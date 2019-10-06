<?php
    class CarsList{
        var $urlPesquisa;
        var $jsonDados;

    public function requestGet($veiculo, 
    $tipoVeiculoParticular,
    $tipoVeiculoRevenda, 
    $tipoVeiculoNovo, 
    $tipoVeiculoSemiNovo, 
    $marca, 
    $modelo, 
    $placa,
    $anoDe,
    $anoAte,
    $precoMin,
    $precoMax){
        $url = 'https://seminovos.com.br';
        $getDados = array();

            if(isset($veiculo)){
                array_push($getDados, $veiculo);
            }
            if(isset($marca)){
                array_push($getDados, $marca);
            }
            if(isset($modelo)){
                array_push($getDados, $modelo);
            }
            if(isset($anoDe) && isset($anoAte)){
                array_push($getDados, "ano-".$anoDe."-".$anoAte);
            }
            if(isset($precoMin) && isset($precoMax)){
                array_push($getDados, "preco-".$precoMin."-".$precoMax);
            }
            if(isset($placa)){
                $this->urlPesquisa = file_get_contents($url."/".$placa);
            }
        $this->urlPesquisa = file_get_contents($url."/".join("/",$getDados));
        preg_match_all('#<span class="card-price">(.*)</span>#',$this->urlPesquisa, $dadosPreco);
        preg_match_all('#<h2 class="card-title">(.*)</h2>#', $this->urlPesquisa, $dadosCarro);
        preg_match_all('#<li title="Ano de fabricação"><i class="icon icon-calendar"></i>(.*)</li>#', $this->urlPesquisa,$dadosAnos );
        preg_match_all('#<li title="Tipo de câmbio"><i class="icon icon-gearbox"></i>(.*)</li>#', $this->urlPesquisa,$dadosTipo );
        preg_match_all('#<ul class="list-inline">(.*)</ul>#', $this->urlPesquisa,$dadosTags);
        $body = $dadosPreco[0];
        $carroDados = $dadosCarro[0];
        $this->jsonDados = array();
        $jsonCode = '{
            "preco": 0,
            "carro": string,
        }';
        for($i=0;$i<=count($body)-1;$i++){
            $precos = preg_replace("/[^0-9|,|R$]/","", $body[$i]);
            $carros = preg_replace("/<\\/?h2(\\s+.*?>|>)/", "",$carroDados[$i]);
            $json = json_decode($jsonCode, true);
            $json['carro'] = $carros;
            $json['preco'] = $precos;
            array_push($this->jsonDados, $json);
        }
    }
    public function listarVeiculos(){
        return $this->jsonDados;
        for($i=0;$i<sizeof($this->jsonDados);$i++){
            $jsonEncode = json_encode($this->jsonDados);
            $dados = json_decode($jsonEncode, true);
            echo $dados[$i]['lista']."<br>";
        }

     
    }
    }

?>