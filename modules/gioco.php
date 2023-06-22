<?php

class Gioco extends Prodotto {
    public $colore;

    public function __construct($nome, $prezzo, Categoria $categoria, $immagine, $descrizione, $colore) {
        parent::__construct($nome, $prezzo, $categoria, $immagine, $descrizione);
        $this->colore = $colore;
    }

    public function getColore() {
        return $this->colore;
    }

    public function setColore($value) {
        return $this->colore = $value;
    }

    public function getClassName() {
		return get_class();
	}
}

?>