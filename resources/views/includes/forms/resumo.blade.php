<content class="row">
	<div class="container">
		<!-- NOME DO TEMA DO RESUMO-->
     <div class="row"><h4>{{$tema->nome}}</h4></div>
     <div class="row">
     	<div class="col l1 avatar">
     		<!--FOTO DO PROFESSOR-->
     		<img src="{{$tema->admin()->photo}}" alt="" class="circle" style=" max-width: 100%;">
     	</div>
     	<div class="col l11 info">
     		<!-- NOME DA MATÉRIA-->
     		<h6>{{$tema->materia()->nome}}</h6>
     		<!-- NOME DO PROFESSOR-->
     		<p><a href="" class="small-print">{{$tema->admin()->nome}}</a></p>
     		<!-- DATA DA POSTAGEM-->
     		<p class="smaller-print">{{$tema->data()}}</p>
     	</div>
     </div>
     <div class="row">
     	<p>
     		<!--DESCRIÇÃO DO RESUMO-->
     		{{$tema->descricao()}}
     	</p>
     </div>

	<div class="row">
		<form>
			<!--EDITOR DE TEXTO-->
			<textarea name="descricao" type="text" class="input_msg" size="50" id="descricao" /></textarea>
						<script>CKEDITOR.replace( 'descricao' );</script>
			<!--SUBMIT-->
			<button type="submit" name="submitbt" value="foo" class="waves-effect waves-light btn center"> 
				<i class="material-icons left">send</i>Enviar
			</button>
		</form>
	</div>
	


 </div>
</content>