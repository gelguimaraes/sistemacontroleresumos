// JavaScript Document

		$(function() {  
				$(".links_menu a").tooltip({
					track       : true,
					showURL     : false,
					delay: 0, 
					showBody: " - ", 
					fade: 250 
				
				});
				$(".submenu a").tooltip({
					track       : true,
					showURL     : false,
					delay: 0, 
					showBody: " - ", 
					fade: 250 
				
				});
				$(".tema_desc img").tooltip({
					track       : false,
					showURL     : false,
					delay: 0, 
					showBody: " - ", 
					fade: 250 
				
				});

			});
			
function select_dynamic(fac, url){
    var fac=fac.jumpfaculdade.value
    window.location.href =url+"?f="+fac
}

function select_dynamic2(fac, sem, url){
    var sem=sem.jumpsemestre.value
    window.location.href =url+"?f="+fac+"&s="+sem
}

function select_dynamic3(fac, sem, dis, url){
    var dis=dis.jumpdisciplina.value
    window.location.href =url+"?f="+fac+"&s="+sem+"&d="+dis
}

function select_dynamic4(fac, sem, dis, tem, url){
    var tem=tem.jumptema.value
    window.location.href =url+"?f="+fac+"&s="+sem+"&d="+dis+"&t="+tem
}

function select_dynamic6(fac, sem, dis, alu, url){
    var alu=alu.jumpaluno.value
    window.location.href =url+"?f="+fac+"&s="+sem+"&d="+dis+"&a="+alu
}
function select_dynamic5(tem, url){
    var tem=tem.jumptema.value
    window.location.href =url+"?t="+tem
}






function ValidaResumo(){
	
	if ($("#jumptema").val()=="0"){
		alertify.alert("Por favor, escolha um tema do seu resumo!");
		return false;
	}

	if ($("#nome").val()==""){
		alertify.alert("Por favor, digite seu nome corretamente!");
		return false;
	}
		if ($("#email").val()==""){
		alertify.alert("Por favor, digite seu E-mail!");
		return false;
	}
		if ($("#final").val()=="S" && $("#imagem").val()==""){
		alertify.alert("Por favor, escolha uma imagem!");
		return false;
	}
	return true;
}
