@extends('layout/default')
@section('content')
<content class="row">
	<div class="col l8 offset-l3 container">
     <div class="row"><h4>Nome do Resumo</h4></div>
     <div class="row">
     	<div class="col l1 avatar">
     		<img src="" alt="" class="circle" style=" max-width: 100%;">
     	</div>
     	<div class="col l11 info">
     		<h6>Matéria</h6>
     		<p><a href="" class="small-print">Edemberg Rocha</a></p>
     		<p class="smaller-print">28/07/2018</p>
     	</div>
     </div>
     <div class="row">
     	<p>
     		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nibh sem, lobortis at porta at, posuere nec erat. Morbi iaculis sapien placerat magna feugiat fringilla. Proin suscipit augue at suscipit tincidunt. Mauris eu iaculis justo. Morbi vitae odio tortor. Pellentesque maximus auctor nibh eget sollicitudin. Maecenas quis purus odio. Nullam fringilla urna a magna iaculis euismod pharetra at tellus.
     	</p>
     </div>

	<div class="row">
          @include('forms/resumo')
		
	</div>
	


 </div>
</content>
@stop