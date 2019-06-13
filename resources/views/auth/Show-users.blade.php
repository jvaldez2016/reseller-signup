@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
    @foreach ($collection as $item)
    {{$users->name;}}
    @endforeach

@stop

@section('content')
    <p>You are logged in!</p>
@stop
