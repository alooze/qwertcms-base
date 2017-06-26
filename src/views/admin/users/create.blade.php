@extends('layouts.lte')

@section('title', 'Пользователи')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('a.start') }}">Главная</a></li>
                <li><a href="{{ route('a.users') }}">Все пользователи</a></li>
                <li class="active">Создание нового пользователя</li>
            </ul>
        </div>
    </div>
@stop

@section('content')
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <p>Сейчас новый пароль по-умолчанию <b>adminadmin</b></p>
    
    <div class="row">
        <div class="col-md-4">
            {{ Form::open() }}
                <div class="form-group">
                    {{ Form::label('name', 'Имя') }}
                    {{ Form::text('name', old('name'), ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::text('email', old('email'), ['class' => 'form-control']) }}
                </div>
                <!-- <div class="form-group">
                    {{ Form::label('roles', 'Роль') }}
                    {{ Form::text('roles', old('roles'), ['class' => 'form-control']) }}
                </div> -->
                <div class="pull-right">
                    {{ Form::submit('Создать', ['class'=>'btn btn-success btn-flat']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop