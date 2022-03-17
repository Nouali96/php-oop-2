<?php
class cc {
    private $ntessera;
    private $scadenza;

    public function __construct($ntessera,$scadenza){
        $this->scadenza = $scadenza;
        $this->ntessera = $ntessera;
    }
    
    private function controllo_scadenza(){
        $now = new DateTime();
        return $this->scadenza <= $now;
    }

    public function paga(){
        return $this->controllo_scadenza()==false;       
    }
}
?>