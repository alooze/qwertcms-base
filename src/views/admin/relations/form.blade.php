@extends('layouts.lte')

@section('title', $title . ' ' . $form->name)

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('a.start') }}">Главная</a></li>
                <li><a href="{{ route('ar.relations', ['slug' => $slug]) }}">Заявки &laquo;{{ $form->name }}&raquo;</a></li>               
                <li class="active">{{ $title }}</li>
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
{{ Form::open() }}
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('name', 'Имя:') }}
            {{ Form::text('name', $formUse->name, ['placeholder'=>'Имя', 'class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('phone', 'Телефон:') }}
            {{ Form::text('phone', $formUse->phone, ['placeholder'=>'Телефон', 'class' => 'form-control']) }}
        </div>
    </div>
    @if ($form->id == 2)
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('email', ' Email') }}
            {{ Form::email('email', $formUse->email, ['placeholder'=>'Email', 'class' => 'form-control']) }}
        </div>
    </div>
    @endif
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('status', 'Статус:') }}
            {{ Form::select('status', $statuses, $formUse->status, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="pull-right">
            {{ Form::submit('Сохранить', ['class'=>'btn btn-success btn-flat']) }}
        </div>
    </div>
    {{ Form::close() }}
    
</div>
@stop