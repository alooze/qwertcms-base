<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\FormUse;
use Mail;
use App\Mail\FormInfoForManager;
use App\Mail\PresentationForUser;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function callback(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
        ]);
        return $this->touchForm($request);
    }

    private function touchForm($requestDataObj)
    {
        $data = $requestDataObj->except('_token','form_id');
        $fs['json'] = json_encode($data);
        $fs['form_id'] = $requestDataObj->form_id;
        $formUseObj = FormUse::create($fs);

        $form = Form::find($requestDataObj->form_id);
        if ($form) {
            $emails = $form->emails();
            if ($emails) {
                $mail = Mail::to($emails[0]);

                foreach ($emails as $i => $email) {
                    if ($i == 0) continue;
                    $mail->cc($email);
                }

                $mail->send(new FormInfoForManager($formUseObj, $form));

                if ($form->id == 2) {
                    $mail = Mail::to($requestDataObj->email)
                            ->send(new PresentationForUser($formUseObj, $form));
                }
            }
        }

        return json_encode(['status' => 'OK']);
    }
}