<?php
    $tavoli = [
        '2' => 5,
        '4' =>5,  
        '8' =>5,
        '10' =>5,
        '12' =>5,
        ];?>
<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo"><img src="img/Senzatitolo2.png" alt=""></div>
      <ul class="nav-links">
        <li><a href="#men_link">Menu</a></li>
        <li><a href="#who_i">Chi siamo</a></li>
        <li><a href="#dove_siamo">Posizione</a></li>
        <li><a href="#prenota_ora">Prenota</a></li>
      </ul>
      <div class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </nav>
  </header>

  <div class="contenitore">
    <div class="carta">
        <img src="img/menu-827750_640.jpg" alt="Immagine di sfondo">
        <a href="#men_link"><button class="bottone">Il menu</button></a>
      </div>

      <div class="carta">
        <img src="img/peafowl-816981_640.jpg" alt="Immagine di sfondo">
        <a href="#who_i"><button class="bottone">Chi siamo</button></a>
      </div>
      
      <div class="carta">
        <img src="img/compass-8324516_640.jpg" alt="Immagine di sfondo">
        <a href="#dove_siamo"><button class="bottone">Dove trovarci</button></a>
      </div>

		<div class="sfondo1"></div>
      
      <div id="men_link" class="introduzione">
        <h2>Il nostro Menu</h2>
        <p>Ecco il nostro menu, sfogliatelo e scoprite cosa potete trovare nella nostra cucina!</p>
      </div>

      <div class="menu">
        <div class="big_menu">
        <div class="sel_menu">
          <img class="selection" src="img/forchetta.png ">
          <ul>
            <li>M</li>
            <li>E</li>
            <li>N</li>
            <li>U</li>
          </ul>
        </div>
        <div class="portate">
          <ul>
            <li><b>Portate</b></li>
            <li class="one">Antipasti</li>
            <li class="two">Primi piatti</li>
            <li class="three">Secondi piatti</li>
            <li class="four">Dolci</li>
          </ul>
        </div>
      </div>
        <div class="corpo">
        <ul>
          <li class="nome_portata"><b>Antipasti</b></li>
          <li class="first_plate"><b>Uno</b></li>
          <li class="second_plate"><b>due</b></li>
          <li class="third_plate"><b>tre</b></li>
        </ul>
      </div>
      <div class="menu_img">
        <img src="img/pasta1.png" >
      </div>
      </div>

	<div class="sfondo2"></div>
  
      <div  id="who_i" class="introduzione2">
        <h2>Chi siamo</h2>
        <p>Siamo un ristorante rustico, caldo e molto accogliente, abbiamo una piccola riserva dove vivono tanti animali come: pappagalli, pavoni, tartarughe e pesci.</p>
      </div>

      <div class="carosello">
        <img class="img_carosello" src="img/foto2.jpg">
      </div>

	<div class="sfondo3"></div>

      <div id="dove_siamo" class="introduzione3">
        <h2>Dove ci troviamo</h2>
        <p>Ecco dove potete venire a trovarci per gustare un buon pasto e passare un po' di tempo nel verde.</p>
      </div>

      <div class="mappa" id="imap">
        <iframe class="struttura_mappa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.09224898848!2d11.770965476241225!3d44.86041677107042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477e5b163f8ad4a1%3A0x4e2ea74a8f04d7a1!2sCavalier%20Uliva!5e0!3m2!1sit!2sit!4v1699439908272!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="where">
          <ul>
            <li>nome via</li>
            <li>provincia</li>
            <li>altro</li>
          </ul>
        </div>
      </div>

		<div class="sfondo4"></div>

      <div id="prenota_ora" class="introduzione4">
        <h2>Prenota ora</h2>
        <p>Adesso puoi prenotare online, facile, veloce e sicuro!</p>
      </div>


      <div class="tav">
        <div class="tavoli_disponibili">
            <div class="tav1"><h2>Tav. 2 persone: <?= $tavoli['2']?></h2></div>
            <div class="tav1"><h2>Tav. 4 persone: <?= $tavoli['4']?></h2></div>
            <div class="tav1"><h2>Tav. 8 persone: <?= $tavoli['8']?></h2></div>
            <div class="tav1"><h2>Tav. 10 persone: <?= $tavoli['10']?></h2></div>
            <div class="tav1"><h2>Tav. 12 persone: <?= $tavoli['12']?></h2></div>
        </div>

    <div class="form_prenota">
      <h2></h2>
        <form  method="post">
          <div class="nome_row">
            <h2>Credenziali</h2>
            <input type="text" name="nome" placeholder="nome" >
            <input type="text" name="cognome" placeholder="cognome" required>
            <input type="email" name="mail" id="1" placeholder="Email" required>
          </div>

          <div class="nome_row">
            <h2>Numero di persone</h2>
            <select name="numero">
              <option id="1" value="2">2 Persone</option>
              <option id="2" value="4">4 Persone</option>
              <option id="3" value="8">8 Persone</option>
              <option id="4" value="10">10 Persone</option>
              <option id="5" value="12">12 Persone</option>
            </select>
          </div>

          <div class="nome_row">
            <h2>Data</h2>
            <input type="date" name="data" required>
            <input type="time" name="ora"  required>
          </div>
            <input type="submit" name="submit" value="prenota">
        </form>
    </div>
    
  </div><div class="footer">
          <h2>Cavalier Uliva</h2>
          <img src="img/instagram.png" alt="">
          <img src="img/facebook.png" alt="">
          <img src="img/twitter.png" alt="">
          <img src="img/tripadvisor.png" alt="">
        </div>
  </div>

  
      
    <script src="script.js"></script>
  </div>

  
</body>
</html>

<?php 
  if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $mail  = $_POST['mail'];
    $numero = $_POST['numero'];
    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $headers = "From: cavalieruliva@staff.com";


    $to = $mail;
    $oggetto = 'Conferma prenotazione';
    $corpo = 'Buongiorno '. $nome ." ". $cognome. " ,le scriviamo per confermare la sua prenotazione per il giorno ".$data." alle ore: ". $ora. " da noi al Cavalier Uliva. Impazienti di ospitarla le auguriamo una buona serata."; 

    $tavoli [$numero] -= 1 ;

    if(mail($to,$oggetto,$corpo)){
     
  }
}
?>