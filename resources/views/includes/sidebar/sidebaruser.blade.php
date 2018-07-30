<aside>
	 <ul id="slide-out" class="sidenav sidenav-fixed">
	    <li><div class="user-view">
	      <div class="background gradiente">
	        
	      </div>
	      <a href=""><img class="circle" src="{{$user->photo}}"></a>
	      <a href=""><span class="white-text name">{{$aluno->nome}}</span></a>
	      <a href=""><span class="white-text email">{{$aluno->faculdade}}</span></a>
	    </div></li>
	    <li><a href="/"><i class="material-icons">home</i>Home</a></li>
	    <li><a href="/edituser/{{$aluno->id}}"><i class="material-icons">settings</i>Opções</a></li>
	    <li><div class="divider"></div></li>
	    <li><a class="subheader"><i class="material-icons">book</i>Matérias</a></li>
	    	@forelse($aluno->turma() as $turma)
	 		<li><a class="waves-effect" href="/resumos/{{$turma->id}}">{{$turma->materia->nome}}</a></li>
	 		@empty
	 		<li>Sem matérias cadastradas</li>
	 		@endforelse
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