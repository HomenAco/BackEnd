<?php 
    require_once '../controllers/CarHome.php';
    $carros = new CarHome;
    $carros->carregaPagina("https://seminovos.com.br/filtros");
    $listaDados = $carros->listaDados();
    echo $listaDados;
?>