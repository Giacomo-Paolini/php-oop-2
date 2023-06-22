<?php

class Prodotto {
    public $nome;
    public $prezzo;
    public $categoria;
	public $immagine;
	public $descrizione;


    public function __construct($nome, $prezzo, Categoria $categoria, $immagine, $descrizione)
	{
		$this->nome = $nome;
		$this->prezzo = $prezzo;
		$this->categoria = $categoria;
		$this->immagine = $immagine;
		$this->descrizione = $descrizione;
	}

	public function setPrezzo($value) {
		if($value>=0) {
			$this->prezzo = $value;
		}
	}

	public function getPrezzo() {

		if( is_null($this->prezzo) || is_nan($this->prezzo) ) {
			throw new Exception("valore non numerico");
		}

		if($this->prezzo < 0) {
			throw new RangeException("prezzo negativo");
		} else if($this->prezzo==0) {
			throw new RangeException("prezzo zero");
		}

		return $this->prezzo . " €";
	}
}

?>