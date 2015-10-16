@extends('layout.principal')

@section('conteudo2')
	<h1>Perfil</h1>
	

@stop

@section('conteudo')

    Bem vindo {{ Auth::user()->name }}!

	
@stop