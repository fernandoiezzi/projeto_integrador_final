<?php
    require_once("agency.crud.php");


    $CNPJ = filter_input(INPUT_POST, 'inputCNPJ', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $Local = filter_input(INPUT_POST, 'inputLocal', FILTER_SANITIZE_SPECIAL_CHARS);
    $Hora_Funcionamento = filter_input(INPUT_POST, 'inputHora_Funcionamento', FILTER_SANITIZE_SPECIAL_CHARS);
    $Logo = filter_input(INPUT_POST, 'inputLogo', FILTER_SANITIZE_SPECIAL_CHARS);
   

     if(cadastrarEmpresa($CNPJ, $nome, $Local, $Hora_Funcionamento, $Logo))

     {
            header('Location: ../index.php');
            exit;
        }

    header('Location: ../cadastroempresa.php?error=true');
    exit;
