<?php

class Categoria {
    public $nome;
    public $icona;
    
    public function __construct($nome, $icona)
    {
        $this->nome = $nome;
        $this->icona = $icona;
    }
}

?>