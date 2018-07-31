<content class="row">
     <div class="row container">
	    <form class="col s12">
	      <div class="row">
	      	@if ($tema != null)
	     	  <input  id="name" type="text" class="validate" value="{{$tema->name}}">
	     	@else
	     	 <input  id="name" type="text" class="validate" >
	     	@endif
	          <label for="name">Nome do Tema</label>
	      </div>
	       <div class="row">
	     	  @if ($tema != null)
	     	  <input  id="description" type="text" class="validate" value="{{$tema->description}}">
	     	@else
	     	 <input  id="description" type="text" class="validate" >
	     	@endif
	          <label for="description">Descrição</label>
	      </div>
	      <button type="submit" name="submitbt" value="foo" class="waves-effect waves-light btn center"> 
				<i class="material-icons left">send</i>Enviar
		  </button>
	  </form>
	</div>
</content>