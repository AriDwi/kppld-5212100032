@extends('layouts.master')

@section('asset')
<link rel ="stylesheet" href="http://cdn.datatables.net/1.10.1/css/jquery.dataTables.css"/>
<script src="http://cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script>
@stop

@section('title')
    {{$title}}
@stop

@section('title-button')
    {{HTML::buttonAdd()}}
@stop

@section('breadcrumb')
    {{$title}}
@stop

@section('content')
    {{Datatable::table()
        ->addColumn ('id', 'Nama', '')
        ->setOptions ('aoColumnDefs',array (
            array (
                'bVisible' => false,
                'aTargets' => [0]),
            array (
                'sTitle'   => 'Nama',
                'aTargets' => [1]),
            array (
                'bSortable'=> false,
                'aTargets' => [2])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('admin.services.index'))
    ->render()}}
@stop