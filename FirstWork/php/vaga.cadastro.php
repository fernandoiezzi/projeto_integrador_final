<?php
    require_once("agency.crud.php");

    
    $Cargo = filter_input(INPUT_POST, 'Cargo', FILTER_SANITIZE_SPECIAL_CHARS);
    $Salario = filter_input(INPUT_POST, 'Salario', FILTER_SANITIZE_SPECIAL_CHARS);
    $carga_horaria = filter_input(INPUT_POST, 'Carga_horaria', FILTER_SANITIZE_SPECIAL_CHARS);
    $Requisitos = filter_input(INPUT_POST, 'Requisitos', FILTER_SANITIZE_SPECIAL_CHARS);
    $Categoria = filter_input(INPUT_POST, 'Categoria', FILTER_SANITIZE_SPECIAL_CHARS);
   

     if(cadastrarVaga($Cargo, $Salario, $carga_horaria, $Requisitos, $Categoria))

     {
            header('Location: ../index.php');
            exit;
        }

    header('Location: ../cadastrovaga.php?error=true');
    exit;

