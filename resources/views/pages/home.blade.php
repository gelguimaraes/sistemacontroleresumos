@extends('layouts.default')

@section ('content')
	@if (Auth::check())
  		@if($user->isAdmin)
  			@include('includes/home/admin')
  		@else
  			@include('includes/home/aluno')
  		@endif
	@else
  		@include('includes/home/guest')
	@endif
@stop