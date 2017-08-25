@extends('layouts.master')

@section('title')
    <title>Uppercase a word!</title>
@stop

@section('content')
    <h1>uppercasedWord: {{ $word }}</h1>
    <a href="{{ action('HomeController@lowercase', array($word)) }}">Make {{$word}} lowercase</a>
@stop