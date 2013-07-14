@extends('layouts.default')

@section('content')
	<br>
	<div class="hero-unit" style="height: 300px;">
		<h2>Selamat datang, {{ Auth::user()->name }}</h2>
	</div>
@endsection