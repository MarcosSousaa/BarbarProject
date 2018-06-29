
<?php include '../config.php' ?>
<?php
	session_start();            
	if (!isset($_SESSION['logado'])){
		header('Location:'. BASEURL.'View/auth/login.php');	
	}
        if(isset($_GET['action']) && $_GET['action'] == 'logout'){
            session_destroy();
            session_unset();
            header("Location:".BASEURL."View/auth/login.php");
        }
?>
<?php include HEADER_TEMPLATE; ?>            
    <?php 
    	echo 'BEM VINDO '. $_SESSION['usuario']->us_nome;
    ?>
<?php include FOOTER_TEMPLATE ?>