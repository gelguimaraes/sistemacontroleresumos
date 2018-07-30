
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sistema de Controle de Resumos - Área Administrativa</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/scripts.js" charset="iso-8859-1"></script>
<script type="text/javascript" src="js/jquery.tooltip.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.tooltip.css"/>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script type="text/javascript">
<!--
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
</head>
<body bg bgcolor="#CCD9E6">
    <div class="top">
        <img src="images/scr.png"  border="0" id="index2" alt="" />
        <p class="titulo menu">
        	<a href="admin.php" class="texto6">Home</a><span class="texto6">|</span>
            <a href="dados.php" class="texto6">Alterar dados</a><span class="texto6">|</span>
            <a href="sair.php" class="texto6">Sair</a>
        </p>
    </div>
    
    <?php $url=basename($_SERVER['PHP_SELF']);
		if($url!="admin.php"){
	?>
<div class="bgsubmenu">
  <table width="580" border="0" align="center">
    <tr>
            <td width="621" align="left"></td>
            <td width="30"><a class ="submenu subpainel" href="admin.php" title="Painel de Controle"></a></td>
            <td width="30"><a class ="submenu subfacul" href="lista_faculdades.php" title="Lista de Faculdades"></a></td>
            <td width="30"><a class ="submenu subsem" href="lista_semestres.php" title="Lista de Semestres"></a></td>
            <td width="30"><a class ="submenu subdis" href="lista_disciplinas.php" title="Lista de Disciplinas"></a></td>
            <td width="33"><a class ="submenu subtem" href="lista_temas.php" title="Lista de Temas"></a></td>
            <td width="33"><a class ="submenu sublog" href="lista_logins.php" title="Lista de Logins"></a></td>
            <td width="33"><a class ="submenu subres" href="lista_resumos.php" title="Lista de Resumos"></a></td>
    </tr>
  </table>
</div>
<?php
}
else
print "<p class='titulo'>Bem vindo  $nome!</p>";
?>

<div class="body">