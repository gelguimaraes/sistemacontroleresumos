@extends('layouts.default')

@section ('content')
	@if (Auth::check())
        @php
        $user = auth()->user()->name;
        print "usuario $user";
        @endphp
  		@if(auth()->user()->isAdmin)
           @php
            print "é admin";
            //@include('includes/home/admin')
           @endphp

  		@else
            @php
            print "é usuario";
            //@include('includes/home/aluno')
            @endphp

  		@endif
	@else
        @php
        print "é convidado";
        //@include('includes/home/guest')
        @endphp

	@endif
@stop