<?php

class Cibo extends Prodotto {
    public $peso;

    public function __construct($nome, $prezzo, Categoria $categoria, $immagine, $descrizione, $peso) {
        parent::__construct($nome, $prezzo, $categoria, $immagine, $descrizione,);
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso . " g";
    }

    public function setPeso($value) {
        return $this->peso = $value;
    }

    public function getClassName() {
		return get_class();
	}
}

?>