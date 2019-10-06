<?php
    require_once "../controllers/CarsList.php";
    $carrosPesquisa = new CarsList;
    $carrosPesquisa->requestGet(isset($_GET['veiculos_tipo']) ? $_GET['veiculos_tipo'] : false, 
                                isset($_GET['particular']) ?$_GET['particular'] : false,
                                isset($_GET['revenda']) ? $_GET['revenda']: false, 
                                isset($_GET['zero-km']) ? $_GET['zero-km'] : false, 
                                isset($_GET['semiNovo']) ? $_GET['semiNovo'] : false, 
                                isset($_GET['marca']) ? $_GET['marca'] : false, 
                                isset($_GET['modelo']) ? $_GET['modelo'] : false, 
                                isset($_GET['placa']) ? $_GET['placa'] : false,
                                isset($_GET['ano_de']) ? $_GET['ano_de'] : false,
                                isset($_GET['ano_ate']) ? $_GET['ano_ate'] : false,
                                isset($_GET['min_preco']) ? $_GET['min_preco'] : false,
                                isset($_GET['max_preco']) ? $_GET['max_preco'] : false);
    $lista = $carrosPesquisa->listarVeiculos();  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Veiculos - Resultado</title>
    <link rel="stylesheet" type="text/css" href="../public/css/index.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/cars.css"
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="title">
            <h1>Resultado dos Veículos</h1>
        </div>
        <div class="button">
            <a href="../index.php"><button>Pesquisar Novamente</button></a>
        </div>
        <?php
            for($i=0;$i<sizeof($lista);$i++){
                $jsonEncode = json_encode($lista);
                $dados = json_decode($jsonEncode, true);
            ?>
        <div class="card">
            <div class="img-car">
                <img src="https://carros.seminovosbh.com.br/honda-city-2011-2011-2616093-36399d804657ec831eb92890255ee787f6bb.jpg"  class="img-format">
            </div>
            <div class="card-content">
                <a href="#" class="link-header">
                    <h2><?php echo $dados[$i]['carro'] ?><span class="price-car"><?php echo $dados[$i]['preco'] ?></span></h2>
                </a>
                <ul class="list-info">
                    <li><span>Ano:</span>000</li>
                    <li><span>km</span>00</li>
                    <li><span>tipo:</span>Automático</li>
                </ul>
                <p class="card-about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a href="#" class="link-car">Mais informações >></a>
            </div>
        </div>
 <?php } ?>
</div>

</body>
</html>

<!-- https://carros.seminovosbh.com.br/honda-city-2011-2011-2616093-36399d804657ec831eb92890255ee787f6bb.jpg -->
