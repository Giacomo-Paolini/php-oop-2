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
		$this->prezzo = $prezzo . " €";
		$this->categoria = $categoria;
		$this->immagine = $immagine;
		$this->descrizione = $descrizione;
	}
}

?>