<?php
    require_once("agency.crud.php");

    
    $Cargo = filter_input(INPUT_POST, 'inputCargo', FILTER_SANITIZE_SPECIAL_CHARS);
    $Salario = filter_input(INPUT_POST, 'inputSalario', FILTER_SANITIZE_SPECIAL_CHARS);
    $carga_horaria = filter_input(INPUT_POST, 'inputCarga_horaria', FILTER_SANITIZE_SPECIAL_CHARS);
    $Requisitos = filter_input(INPUT_POST, 'inputRequisitos', FILTER_SANITIZE_SPECIAL_CHARS);
    
   

     if(cadastrarVaga($Cargo, $Salario, $carga_horaria, $Requisitos))

     {
            header('Location: ../index.php');
            exit;
        }

    header('Location: ../cadastrovaga.php?error=true');
    exit;

