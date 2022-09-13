<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 
include_once __DIR__ .'./models/Products/Food.php';
include_once __DIR__ .'./models/Products/Cart.php';
include_once __DIR__ .'./models/Customer.php';
include_once __DIR__ .'./models/Products/Address.php';



$prodotto = new Food('scatoletta','cani','203495673','5,50€','09/2013','crocchette','09/26','[riso,patate e cozze]');
var_dump($prodotto);


$cliente = new Customer();
$cliente->addtoCart($prodotto);
var_dump($cliente);

$indirizzo  = new Address('Simone','Di Prima','via monaco simone 1/11',"12012","GEnova","Italia");
var_dump($indirizzo);