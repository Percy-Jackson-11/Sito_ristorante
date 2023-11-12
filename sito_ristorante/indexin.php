<?php
    $tavoli = [
        '2' => 5,
        '4' =>5,  
        '8' =>5,
        '10' =>5,
        '12' =>5,
        ];

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $mail  = $_POST['mail'];
    $numero = $_POST['numero'];
    $data = $_POST['data'];
    $ora = $_POST['ore'];
    $headers = "From: cavalieruliva@staff.com";


    $to = $mail;
    $oggetto = 'Conferma prenotazione';
    $corpo = 'Buongiorno '. $nome ." ". $cognome. " ,le scriviamo per confermare la sua prenotazione per il giorno ".$data." alle ore: ". $ora. " da noi al Cavalier Uliva. Impazienti di ospitarla le auguriamo una buona serata."; 

    $tavoli [$numero] -= 1 ;

    if(mail($to,$oggetto,$corpo)){
        echo 'mail mandata';
        echo '\ntavoli da '.$numero ." rimasti ". $tavoli [$numero] ;
    }
    else
    echo 'errore';

?>
