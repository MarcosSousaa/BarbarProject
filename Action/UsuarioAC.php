<?php
    include  '../config.php';
    
    header('Content-Type: application/json', true);    
    
   $acao = filter_input(INPUT_POST, 'acao');   
   
   if($acao == 0)
   {
       //require_once BASEURL.'Control/UsuarioController.php';
       require_once '../Control/UsuarioController.php';
       $controller = new UsuarioController();
       $controller->doLogin();
   }
   if($acao == 1){
        require_once '../Control/UsuarioController.php';
        $controller = new UsuarioController();
        $result = $controller->listAll();
        echo $result;
      
   }