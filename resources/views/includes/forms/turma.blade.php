<content class="row">
     <div class="row container">
	    <form class="col s12">
	      <div class="row">
	      	@if ($turma != null)
	     	  <input  id="name" type="text" class="validate" value="{{$urma->name}}">
	     	@else
	     	 <input  id="name" type="text" class="validate" >
	     	@endif
	          <label for="name">Nome da Matéria</label>
	      </div>
	       <div class="row">
	     	 <div class="input-field col s12">
			    <select>
			      <option value="" disabled selected>Faculdade</option>
			      <option value="1">UFPB</option>
			      <option value="2">IFPB</option>
			      <option value="3">Unipe</option>
			    </select>
			    <label>Instituição de Ensino</label>
			  </div>
	      </div>

	      <div class="divider">
	      </div>

	      <h5>Alunos</h5>
	      	@foreach($Alunos as $aluno)
	      		<p>
		      <label>
		        <input type="checkbox" name="alunos" value="{{$aluno->id}}" />
		        <span>{{$aluno->nome}}</span>
		      </label>
		    </p>
	      	@endforeach
	      <button type="submit" name="submitbt" value="foo" class="waves-effect waves-light btn center"> 
				<i class="material-icons left">send</i>Enviar
		  </button>
	  </form>
	</div>
</content>