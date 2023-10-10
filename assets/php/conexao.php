<?php
    //dados servidor
    $servidor="localhost";
    $usuario="root";
    $senha="12345678";
    $banco="BDCrud";
    
    $CONNECTIONSTRING= new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>