@extends('layout/default')
@section('content')
<div class="row">
	<h3>Todos os Temas</h3>
</div>
<div class="row">
		 <ul class="collection">
		 	<!--LOOP PELOS TEMAS Recentes-->
		 	@foreach($temas as $tema)
		    <li class="collection-item avatar">
		    	<div class="row">
		    		<div class="col s1">
		    			@if ($thema->admin->photo != null)
		    			 	<img src="{{$tema->admin->photo}}" alt="" class="circle responsive-img">
		    			@else
		    				<img src="{{asset('/image/imagem.png')}}" alt="" class="circle responsive-img">
		    			@endif
		    		</div>
		    		<div class="col s9">
		    			 <span class="title"><h6>{{$tema->title}}</h6></span>
					      <p class="smaller-print">

					      	<!--TEMAS DO MESMO PROFESSOR-->
					      	<b><a href="/professor/{{$tema->admin->id}}">{{$tema->admin->name}}</a></b> -  
					      	<!--TEMAS DA MESMA MATERIA-->
					      	<b><a href="/materia/{{$tema->materia->id}}">{{$tema->materia->name}}</a></b>
					      	<br>
					      	<!--DATA DE POSTAGEM-->
					        	{{$tema->data}}
					      </p>
					       <!--DESCRIÇÃO DO TEMA-->
					       <p class="small-print">{{$tema->description}}</p>
		    		</div>
		    		 <!--EDITAR OU ENVIAR UM RESUMO-->
		    		<div class="col s2">
		    			<a href="/resumo/{{$resumo->id}}"><i class="material-icons">edit</i></a>
		    			<a href="/resumo/"><i class="material-icons">add_circle_outline</i></a>
		    		</div>
		    	</div>
		    </li>
		    @endforeach
		</ul>
	</div>
	@stop