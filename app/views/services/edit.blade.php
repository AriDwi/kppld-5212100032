@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('admin.services.index') }}">Services</a></li>
    <li class="uk-active">{{ $title }}</li>
@stop

@section('content')
    {{ Form::model($service, array('url' => route('admin.services.update', ['services'=>$service->id]), 'method' => 'put', 'class'=>'uk-form uk-form-horizontal')) }}
        @include('services._form')
    {{ Form::close() }}
@stop