<?php
require_once __DIR__ . '/cliente.php';
require_once __DIR__ . '/cc.php';
require_once __DIR__ . '/prodotto.php';
class negozio {
    public $prodotti;
    public $clienti;

    public function __construct($prodotti,$clienti){
        $this->prodotti = $prodotti;
        $this->clienti = $clienti;
    }

    public function compra(prodotto $prodotto,cliente $cliente){
        if ($cliente->cc->paga() == true){
            echo 'Pagamento è andato a buon fine'.'<br>'.($prodotto->prezzo-($prodotto->prezzo*0.2)).' €';
        }
        else{
            echo 'Non è andato a buon fine il pagamento';
        }
    }

    public function compra_senza_iscrizione($prodotto,$cc){
        if ($cc->paga() == true){
            echo 'Pagamento è andato a buon fine'.'<br>'.$prodotto->prezzo.' €';
        }
        else{
            echo 'Non è andato a buon fine il pagamento';
        }
    }

    public function mostra(){
        return $this->prodotti;
    }
}


?>