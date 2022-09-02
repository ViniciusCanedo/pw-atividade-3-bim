<?php

    class empregado{
        private $nome;
        private $sobrenome;
        private $salarioMensal;
    

        public function __construct($par1, $par2, $par3){
        $this->nome = $par1;
        $this->sobrenome = $par2;
        if ($par3 <= 0) {
            $this->salarioMensal = 0;
        }else {
            $this->salarioMensal = $par3;
        }
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function getSalarioAnual(){
        return ($this->salarioMensal * 12);
    }

    public function getAumento(){
        return ($this->salarioMensal + $this->salarioMensal / 10);
    }

}

?>