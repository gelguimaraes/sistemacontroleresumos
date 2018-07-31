<aside>
	 <ul id="slide-out" class="sidenav sidenav-fixed">
	    <li><div class="user-view">
	      <div class="background gradiente">
	        @php

		  
	     	//print $aluno -> id;
	     	$turmas = \App\Turma::where('admin', $user->id)->get();
		 	//print $turmas
	     @endphp
	      </div>
	      <!--FOTO DO USUÁRIO-->
	      <a href="">
	      	@if ($user->photo != null)
		    	<img src="{{$user->photo}}" alt="" class="circle responsive-img">
		    @else
		    	<img src="{{asset('/image/imagem.png')}}" alt="" class="circle responsive-img">
		    @endif
	      	
	      </a>
	      <!--NOME DO USUÁRIO-->
	      <a href=""><span class="white-text name">{{$user->nome}}</span></a>
	      
	    </div></li>
	    <!--IR PARA HOME-->
	    <li><a href="/"><i class="material-icons">home</i>Home</a></li>
	    <!--EDITAR O USUÁRIO-->
	    <li><a href="/edituser/{{$user->id}}"><i class="material-icons">settings</i>Opções</a></li>
	    <!--MAT~ERIAS DO USUÁRIO-->
	    <li><div class="divider"></div></li>
	    <li><a class="subheader"><i class="material-icons">book</i>Matérias</a></li>
	    <!--LOOP DE TURMAS-->
	    	@forelse($user->turma() as $turma)
	    	 <!--LISTAR TEMAS DA TURMA X-->
	 		<li><a class="waves-effect" href="/resumos/{{$turma->id}}">{{$turma->materia()->get()->nome}}</a></li>
	 		@empty
	 		<li>Sem matérias cadastradas</li>
	 		@endforelse
	 		 <!--ADCIONAR NOVO TEMA-->
	 		<li>
	 			<a class="waves-effect" href="/addturma">
	 				<i class="material-icons">add_circle_outline</i>Nova Matéria
	 			</a>
	 		</li>
	 		 <!--LOGOUT-->
	 		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
	 	<li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="material-icons">exit_to_app</i>Logout
            </a>
        </li>
	 	</ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

          
</aside>