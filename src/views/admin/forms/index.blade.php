@extends('layouts.lte')

@section('title', 'Все формы приложения')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('a.start') }}">Главная</a></li>               
                <li class="active">Все формы</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('a.form.add') }}" class="btn btn-success btn-flat pull-right">
            Добавить форму
            </a>
        </div>
    </div> 
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Отправитель</th>
                    <th>Получатели</th>
                    <th>К-во отправок</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($forms as $form)
                <tr>
                    <td>{{ $form->id }}</td>
                    <td>{{ $form->name }}<br>
                        <small>
                            <a href="{{ route('a.form.log', ['id' => $form->id]) }}">
                            Лог
                            </a>
                        </small>
                    </td>
                    <td>{{ $form->from }}</td>
                    <td>
                        
                        {{ Form::open(['route' => ['a.form.mails', 'id' => $form->id]]) }}
                        {{ Form::submit('+', ['class'=>'btn btn-success btn-flat ']) }}
                        <select class="emails_forms" name="emails[]" multiple>
                        @foreach (array_pluck($emails, 'email', 'id') as $eId => $eMail)
                        @if (in_array($eId, explode(',', $form->email_ids)))
                        <option value="{{ $eId }}" selected>{{ $eMail }}</option>
                        @else
                        <option value="{{ $eId }}">{{ $eMail }}</option>
                        @endif
                        @endforeach
                        </select>

                        {{ Form::close() }}
                    </td>
                    <td>
                        {{ $form->uses ? $form->uses->count() : 0 }}
                    </td>
                    <td>
                        <a href="{{ route('a.form.update', ['id' => $form->id]) }}" class="btn btn-xs btn-success">
                            <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Обновить
                        </a>
                        <a href="javascript:void(0)" data-href="{{ route('a.form.delete', ['id' => $form->id]) }}" class="btn btn-danger btn-xs form-item-delete">         
                            <span class="glyphicon glyphicon-trash" data-href="{{ route('a.form.delete', ['id' => $form->id]) }}"></span>&nbsp;Удалить
                        </a>
                    </td>
                </tr>   
            @endforeach         
            </tbody>
        </table>
    </div>
</div>
@stop