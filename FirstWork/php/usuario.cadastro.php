<?php
    require_once("agency.crud.php");

    
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $CPF = filter_input(INPUT_POST, 'inputCPF', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'inputTelefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $Data_nascimento = filter_input(INPUT_POST, 'inputData_nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
    $Endereco = filter_input(INPUT_POST, 'inputEndereco', FILTER_SANITIZE_SPECIAL_CHARS);
    $Bairro = filter_input(INPUT_POST, 'inputBairro', FILTER_SANITIZE_SPECIAL_CHARS);
    $Estado = filter_input(INPUT_POST, 'inputEstado', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $descr = filter_input(INPUT_POST, 'inputDescr', FILTER_SANITIZE_SPECIAL_CHARS);
    $img = filter_input(INPUT_POST, 'inputImg', FILTER_SANITIZE_SPECIAL_CHARS);
    $rede_social = filter_input(INPUT_POST, 'inputRede_social', FILTER_SANITIZE_SPECIAL_CHARS);
   



