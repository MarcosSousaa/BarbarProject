<!DOCTYPE html>
<html>
<head>
	<title><?= TITULO ?></title>
	<meta charset="utf-8">		
  	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Materialize CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>View/assets/css/custom.css">
</head>
<body>
	<div class="wrapper">
        <?php include MENU_TEMPLATE; ?>
        <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-danger navbar-btn">
                                <i class="material-icons">menu</i>
                                <span>Menu-Lateral</span>
                            </button>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i> 
                                    <strong><?=$_SESSION['usuario']->us_nome?></strong>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        Nome Usuario
                                        <i class="material-icons">person</i>      
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="?action=logout" class="btn btn-danger btn-block" id="logout">
                                                           Sair
                                        </a>                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>                                            
                    </div>
                </nav>   