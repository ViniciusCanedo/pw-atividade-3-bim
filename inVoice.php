<?php

    class inVoice{
        private $numeroFatura;
        private $descItem;
        private $qtdItem;
        private $preco;
    

        public function __construct($par1, $par2, $par3, $par4){
        $this->numeroFatura = $par1;
        $this->descItem = $par2;
        if ($par3 <= 0) {
            $this->qtdItem = 0;
        }else {
            $this->qtdItem = $par3;
        }

        if ($par4 <= 0) {
            $this->preco = 0.0;
        }else {
            $this->preco = $par4;
        }
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function getInVoiceAmount(){
        return ($this->preco * $this->qtdItem);
    }

}

?>