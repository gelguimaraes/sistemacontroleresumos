@extends('layouts.default')

@section ('content')
	@if (Auth::check())
        @php
        $user = auth()->user();
        //print "usuario {{$user->name}}";
        @endphp
  		@if(auth()->user()->isAdmin)
           @php
           // print "é admin";
            //@include('includes/home/admin')
           @endphp

  		@else
            @php
            //print "é usuario";
            //@include('includes/home/aluno')
            @endphp


  		@endif
	@else
        @php
        //print "é convidado";
        //
        @endphp
        @include('includes/home/guest')
	@endif
@stop