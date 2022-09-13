<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php include_once __DIR__ . './models/Products/Food.php';
;
include_once __DIR__ . './models/Products/Cart.php';
$prodotto = new Food('scatoletta','cani','203495673','5,50€','09/2013','crocchette','09/26','[riso,patate e cozze]');
var_dump($prodotto);

$carrello = new Cart();

$carrello->addProduct($prodotto);
var_dump($carrello);