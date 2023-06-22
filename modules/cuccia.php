<?php

class Cuccia extends Prodotto {
    public $dimensione;

    public function __construct($nome, $prezzo, Categoria $categoria, $immagine, $descrizione, $dimensione) {
        parent::__construct($nome, $prezzo, $categoria, $immagine, $descrizione);
        $this->dimensione = $dimensione;
    }

    public function getDimensione() {
        return $this->dimensione;
    }

    public function setDimensione($value) {
        return $this->dimensione = $value;
    }

    public function getClassName() {
		return get_class();
	}
}

?>