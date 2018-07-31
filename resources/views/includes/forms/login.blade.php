<div class="row container valign-wrapper">
	<div class="col">
    	<h2 class="header">Login</h2>
    	<div class="card horizontal">
	      <div class="card-image">
	        <div class="background gradiente"></div>
	      </div>
	      <div class="card-stacked">
	      	<form>
	      		{{csrf_field()}}
	        <div class="card-content">
	        		<div class="row">
			        	<div class="input-field col s12">
			          		<input id="email" type="email" class="validate">
			          		<label for="email">Login</label>
			        </div>
	        		<div class="row">
			        	<div class="input-field col s12">
			          		<input id="password" type="password" class="validate">
			          		<label for="password">Senha</label>
			        	</div>
			      	</div>
	        </div>
	        <div class="card-action">
			<button type="submit" name="enter" value="foo" class="waves-effect waves-light btn center"> 
				<i class="material-icons left">input</i>Entrar
			</button>
	        </div>
	        </form>
	      </div>
	    </div>
	</div>
  </div>