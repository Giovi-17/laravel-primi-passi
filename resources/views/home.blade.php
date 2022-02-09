@extends('layouts.app')

@section('page_title')
Homepage
@stop

@section('main_content')

    <h1>Hello World</h1>

    <span>Ciao </span>
    <span>{{ $name }} - </span>
    <span>{{ $lastname }}</span>

@stop
