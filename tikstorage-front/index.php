<?php 

#iniciar sessão
session_start();

#Base de dados
include 'db.php';

#Cabeçalho
include 'header.php';


#Conteúdo da página

if(isset($_SESSION['login'])){//se existir um login
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'teste';
	}
}

else{
		$pagina = 'home';
}

switch ($pagina) {
	case 'returncad': include 'views/cadprod.php'; break;
	default: include 'views/home.php'; 
	break;
}


#Rodapé
include 'footer.php';