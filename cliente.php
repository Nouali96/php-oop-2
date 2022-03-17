<?php
class cliente {
    public $nome;
    public $email;
    public $cc;
    
    public function __construct($nome,$email,$cc){
        $this->email = $email;
        $this->cc = $cc;
        $this->nome = $nome;
    }
}
?>