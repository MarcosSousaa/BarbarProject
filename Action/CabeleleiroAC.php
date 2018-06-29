<?php
    include '../config.php';
    
    header('Content-Type: application/json', true);    
    $acao = filter_input(INPUT_POST, 'acao');    
    if($acao == 0){
        
    }