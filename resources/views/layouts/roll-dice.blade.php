
@extends('layouts.master')

@section('title')
		<title>Roll the Dice!</title>
@stop

@section('content')
		<div class="container">
			@if($guess == $random)
				<h1 class="green">Right!</h1>
			@else
				<h1 class="red">Incorrect guess!</h1>
				