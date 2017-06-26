<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.users.index', compact('users'));
    }

    public function add()
    {
        return view('admin.users.create'/*, compact('user','roles')*/);
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            abort(404);
        }
        return view('admin.users.update', compact('user'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('adminadmin');
        $user->save();

        return redirect()->route('a.user.edit', ['id' => $user->id]);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            abort(404);
        }

        $this->validate($request, [
            'email' => 'required|email|unique:users,email,' . $user->id,
            'name' => 'required',
            'new_password2'=>'same:new_password1',
            'new_password1'=>'same:new_password2',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->new_password2)) {
            $user->password = bcrypt($request->new_password2);
        }
        $user->save();
        
        return redirect()->route('a.user.edit', ['id' => $user->id]);
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            abort(404);
        }
        $user->delete();
        return redirect()->route('a.users');
    }

    /**
     * Пока не используется
     */
    public function massEdit(Request $request)
    {
        $result;
        switch ($request->action) {
            case 'mass_delete':
                $result = User::whereIn('id',$request->ids)->delete();
                break;
            case 'mass_publish':
                $result = User::whereIn('id',$request->ids)->update(['publish_status'=>Pages::STATUS_PUBLISHED]);
                break;
            case 'mass_hide':
                $result = User::whereIn('id',$request->ids)->update(['publish_status'=>Pages::STATUS_ARCHIVE]);
                break;
        }
        return $result;
    }
}