<aside>
	 <ul id="slide-out" class="sidenav sidenav-fixed">
	    <li><div class="user-view">
	      <div class="background gradiente">
	        
	      </div>
	      <!--FOTO DO USUÁRIO-->
	     @php

		   // print $user->id;
	     	$aluno = \App\Aluno::where('user_id', $user->id)->first();
	     	//print $aluno -> id;
	     	$turmas = \App\Turma::where('aluno_id', $aluno->id)->get();
		 	//print $turmas
	     @endphp
	    	<img src="{{asset('/images/image.png')}}" alt="" class="circle responsive-img"/>

			<!--NOME DO USUÁRIO-->
			<a href=""><span class="white-text name">{{$user->name}}</span></a>
			<!--FACULDADE DO USUÁRIO -->
			<a href=""><span class="white-text email">{{$user->faculdade}}</span></a>
			</div></li>

			<!--IR PARA HOME-->
			<li><a href="/"><i class="material-icons">home</i>Home</a></li>

			<!--EDITAR O USUÁRIO-->
			<li><a href="/edituser/{{$user->id}}"><i class="material-icons">settings</i>Opções</a></li>
			<!--MAT~ERIAS DO USUÁRIO-->
			<li><div class="divider"></div></li>
			<li><a class="subheader"><i class="material-icons">book</i>Matérias</a></li>
			<!--LOOP DE TURMAS-->
			 @forelse($turmas as $turma)
				 <!--LISTAR TEMAS DA TURMA X-->
					 <li><a class="waves-effect" href="/resumos/{{$turma->id}}">{{$turma->materia->nome}}</a></li>
				 @empty
					 <li>Sem matérias cadastradas</li>
			 @endforelse

			   <!--LOGOUT-->
			<li><a href="{{ route('logout') }}"
										onclick="event.preventDefault();
													  document.getElementById('logout-form').submit();">
													  <i class="material-icons">exit_to_app</i>Logout
			   </a>
			</li>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										 @csrf
									 </form>
			</ul>
			<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

</aside>