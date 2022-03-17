<?php

class prodotto {
    public $nome;
    public $prezzo;
    public $tipologia;
    
    public function __construct($nome,int $prezzo,$tipologia){
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->tipologia = $tipologia;
}
}

    


?>