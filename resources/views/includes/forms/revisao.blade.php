<content class="row">
     <div class="container">
          <!-- NOME DO TEMA DO RESUMO-->
     <div class="row"><h4>{{$resumo->tema()->nome}}</h4></div>
     <div class="row">
          <div class="col l1 avatar">
               <!--FOTO DO ALUNO-->
               <img src="{{$resumo->aluno()->photo}}" alt="" class="circle" style=" max-width: 100%;">
          </div>
          <div class="col l11 info">
              
               <!-- NOME DO PROFESSOR-->
               <p><a href="" class="small-print">{{$resumo->aluno()->nome}}</a></p>
               <!-- DATA DA POSTAGEM-->
               <p class="smaller-print">{{$resumo->data()}}</p>
          </div>
     </div>
     <div class="row">
          <p>
               <!--DESCRIÇÃO DO RESUMO-->
               {{$resumo->texto()}}
          </p>
     </div>

    
     <div class="row">
          <form action="#">
               <!--NOTA-->
              <p class="range-field">
                <input type="range" id="nota" min="0" max="100" />
              </p>
              <button type="submit" name="submitbt" value="foo" class="waves-effect waves-light btn center">
                    <i class="material-icons left">send</i>Enviar
               </button>
            </form>

     </div>
     


 </div>
</content>