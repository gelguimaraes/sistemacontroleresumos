<div class="row">
	<h3>Novo Usuário</h3>
<p>In iaculis metus enim, at rhoncus magna egestas bibendum. Sed rutrum leo ac ex mattis, sed sagittis ligula imperdiet. Cras quis feugiat nibh, ut molestie erat. Nulla id arcu lobortis, porta eros non, suscipit ligula. Proin suscipit, metus eget porta rutrum, sem nisi rhoncus nibh, non accumsan nunc enim ac lorem.</p> 
</div>

@if (Auth::check())
	<div class="row container">
	    <form class="col s12">
	      <div class="row">
	     	  <input  id="name" type="text" class="validate" value="{{$user->name}}">
	          <label for="name">Nome</label>
	      </div>
	      <div class="row">
	     	  <input  id="email" type="text" class="validate" value="{{$user->email}}">
	          <label for="email">Email</label>
	      </div>
	      <div class="row">
	      	<label>
        		<input type="checkbox" class="filled-in" 
        		@if($user->isAdmin)
        			checked="checked"
        		@endif />
        		<span>Administrador</span>
      		</label>
	      </div>
	      <div class="file-field input-field">
		      <div class="btn">
		        <span>File</span>
		        <input type="file">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		   </div>
	      <div class="row">
	        <div class="input-field">
	          <input id="password" type="password" class="validate">
	          <label for="password">Senha</label>
	        </div>
	      </div>
	      
	 	</form>
 	</div>
 @else
 	<div class="row container">
	    <form class="col s12">
	      <div class="row">
	     	  <input  id="name" type="text" class="validate">
	          <label for="name">Nome</label>
	      </div>
	      <div class="row">
	     	  <input  id="email" type="text" class="validate">
	          <label for="email">Email</label>
	      </div>
	      <div class="row">
	      	<label>
        		<input type="checkbox" class="filled-in" checked="checked" />
        		<span>Administrador</span>
      		</label>
	      </div>
	      <div class="file-field input-field">
		      <div class="btn">
		        <span>File</span>
		        <input type="file">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		   </div>
	      <div class="row">
	        <div class="input-field col s6">
	          <input  id="login" type="text" class="validate">
	          <label for="login">Usuário</label>
	           <span class="helper-text"  data-error="Usuário já cadastrado"></span>
	        </div>
	        <div class="input-field col s6">
	          <input id="password" type="password" class="validate">
	          <label for="password">Senha</label>
	        </div>
	      </div>
	      
	 	</form>
 	</div>
 @endif

 