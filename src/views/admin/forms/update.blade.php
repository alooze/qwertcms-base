@extends('layouts.lte')

@section('title', 'Редактирование формы')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('a.start') }}">Главная</a></li>
                <li><a href="{{ route('a.forms') }}">Все формы</a></li>               
                <li class="active">Редактирование формы</li>
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
<div class="row">
    <div class="col-md-4">
        {{ Form::open() }}
            <div class="form-group">
                {{ Form::label('name', 'Название:') }}
                {{ Form::text('name', $form->name, ['placeholder'=>'Название', 'class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('from', ' Email отправителя') }}
                {{ Form::email('from', $form->from, ['placeholder'=>'Email отправителя ', 'class' => 'form-control']) }}
            </div>  
            <div class="pull-right">
                {{ Form::submit('Добавить', ['class'=>'btn btn-success btn-flat']) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop