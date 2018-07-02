<?php
    include '../config.php';
    
    header('Content-Type: application/json', true);    
    $acao = filter_input(INPUT_POST, 'acao');    
    if($acao == 0){
        require_once '../Control/CabeleleiroController.php';
        $controller = new CabeleleiroController();
        $controller->cadCab();
    }