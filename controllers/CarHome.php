<?php 
class CarHome {
    var $urlHome;

    public function carregaPagina($url){
        $this->urlHome = file_get_contents($url);
    }
    public function listaDados(){
        return $this->urlHome;
    }

}
?>