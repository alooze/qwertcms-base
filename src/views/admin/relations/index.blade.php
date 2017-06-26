@extends('layouts.lte')

@section('title', 'Данные из формы &laquo;' . $form->name . '&raquo;')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('a.start') }}">Главная</a></li>               
                <li class="active">{{ $form->name }}</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if (request()->route()->getName() == 'ar.relations.all')
            <a href="{{ route('ar.relations', ['slug' => $slug]) }}" class="btn btn-info btn-flat" style="margin-right:15px;">Показать без удаленных</a>
            <a href="{{ route('ar.relations.exportall', ['slug' => $slug]) }}" class="btn btn-warning btn-flat">Экспорт заявок</a>
            @else
            <a href="{{ route('ar.relations.all', ['slug' => $slug]) }}" class="btn btn-info btn-flat" style="margin-right:15px;">Показать все</a>
            <a href="{{ route('ar.relations.export', ['slug' => $slug]) }}" class="btn btn-warning btn-flat">Экспорт заявок</a>
            @endif
            
            <a href="{{ route('ar.relations.add', ['slug' => $slug]) }}" class="btn btn-success btn-flat pull-right">Добавить запись</a>
            
        </div>
    </div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <table  class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <!-- <th></th> -->
                    <th>Дата</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    @if ($form->id == 2)
                    <th>Email</th>
                    @endif
                    <th>Статус</th>
                    <th>Управление</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formUses as $formUse)
                <tr>
                    <td>{{ $formUse->created_at->format('d.m.Y H:i') }}</td>
                    <td>{{ $formUse->data['name'] }}</td>
                    <td>{{ $formUse->data['phone'] }}</td>
                    @if ($form->id == 2)
                    <td>{{ $formUse->data['email'] }}</td>
                    @endif
                    <td>
                        {{ $statuses[$formUse->status] }}
                    </td>
                    <td>
                        <a href="{{ route('ar.relations.edit', ['slug' => $slug, 'id' => $formUse->id]) }}" class="btn btn-info btn-xs">
                            <span class="glyphicon glyphicon-pencil"></span>&nbsp;Изменить
                        </a>
                        <a href="javascript:void(0)" data-href="{{ route('ar.relations.delete', ['id' => $formUse->id]) }}" class="btn btn-danger btn-xs page-item-delete">
                            <span class="glyphicon glyphicon-trash"></span>&nbsp;Удалить
                        </a>
                    </td>                       
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop