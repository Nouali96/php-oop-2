<?php

require_once __DIR__ . '/negozio.php';
require_once __DIR__ . '/prodotto.php';
require_once __DIR__ . '/cliente.php';
require_once __DIR__ . '/cc.php';

$cibo = new prodotto('baugnam',2,'alimentare');
$gioco = new prodotto('pallina',5,'gioco');
$cuccia = new prodotto('pisolino',10,'accessorio');
$data_di_scadenza = new DateTime();
$data_di_scadenza->setDate(2025,10,05);
$cc = new cc('645546845416584',$data_di_scadenza);
$GianPaolo = new cliente('GianPaolo','tizio@gmail.com',$cc); //iscrizione
$prodotti = [$cibo,$gioco,$cuccia];
$clienti = [$GianPaolo];
$amici4zampe = new negozio($prodotti,$clienti);
$primoprodotto = $amici4zampe->mostra()[0];
// $amici4zampe->compra($primoprodotto,$GianPaolo); //pagamento con iscrizione
$amici4zampe->compra_senza_iscrizione($primoprodotto,$cc); //pagamento senza iscrizione