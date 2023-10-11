<?php 
    //incluindo módulo "conexao.php"
    include "conexao.php";

    $vNome = $_POST["txtNome"];
    $vSenha = $_POST["txtSenha"];
    $vSexo = $_POST["txtSexo"];

    $incluir = $CONNECTIONSTRING -> query("insert into TB_Teste(nome_t, senha_t, sexo_t)values('$vNome', '$vSenha', '$vSexo');");
    
    echo "<script>alert('Dados cadastrados com sucesso!!!');</script>";
?>