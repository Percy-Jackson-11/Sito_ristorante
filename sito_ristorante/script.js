// Seleziona il menu hamburger
const hamburgerMenu = document.querySelector(".hamburger-menu");

let open = 0;
// Seleziona la lista dei link della navbar
const navLinks = document.querySelector(".nav-links");

const img_carosello = document.querySelector(".img_carosello");

// Aggiungi un gestore di eventi al clic al menu hamburger
hamburgerMenu.addEventListener("click", () => {
    if(open == 0){
        open_nav();
        open ++;
    }
    else{
        close_nav();
        open=0;
    }
});


var array_img = ['./img/foto1.png','./img/foto2.jpg','./img/foto3.jpg'];
let indece_immagine = 0;
function cambia_img(){
    if(indece_immagine != 3){
        img_carosello.src = array_img[indece_immagine];
    }
    else{
        indece_immagine = 0;
        img_carosello.src = array_img[indece_immagine];
    }
    indece_immagine++;
  }

setInterval(cambia_img, 5000);

function open_nav(){
    navLinks.style.display = "block";
}

function close_nav(){
    navLinks.style.display = "none";
}

function mostraBottone() {
    // Imposta la trasparenza dello sfondo al 50%
    document.querySelector(".carta img").style.opacity = 0.5;

    // Mostra il bottone
    document.querySelector(".carta .bottone").style.display = "block";
  }

  function nascondiBottone() {
    // Imposta la trasparenza dello sfondo al 50%
    document.querySelector(".carta img").style.opacity = 1;

    // Mostra il bottone
    document.querySelector(".carta .bottone").style.display = "none";
  }

  

  // Ascolta l'evento di ingresso del mouse sulla carta
  document.querySelector(".carta").addEventListener("mouseenter", mostraBottone);
  document.querySelector(".carta").addEventListener("mouseleave", nascondiBottone);



  //gestione del menu
  const menu = document.querySelector(".big_menu");
  const portate = document.querySelector(".portate");
  const img = document.querySelector(".menu_img img");
  let open_sel = 0;

  document.querySelector(".selection").addEventListener("click", () => {
    if(open_sel == 0){
    apri_menu();
    document.querySelector(".selection").src="./img/croce.png";
    open_sel++;
    }
    else
    {
    chiudi_menu();
    document.querySelector(".selection").src="./img/forchetta.png";
    open_sel--;
    }
  })


  function apri_menu(){
    menu.style.width = "80vh";
    portate.style.display ="block";
    document.querySelector(".sel_menu img").style.width = "27px";
    document.querySelector(".sel_menu img").style.height = "27px";
  }

  function chiudi_menu(){
    menu.style.width = "60px";
    portate.style.display ="none";
    document.querySelector(".sel_menu img").style.width = "40px";
    document.querySelector(".sel_menu img").style.height = "40px";
  }

  //portate
  const primi = document.querySelector(".two");
  const secondi = document.querySelector(".three");
  const antipasti = document.querySelector(".one");
  const dolci = document.querySelector(".four");

  //piatti
  const nome_portate = document.querySelector(".nome_portata");
  const primo_piatto = document.querySelector(".first_plate");
  const secondo_piatto = document.querySelector(".second_plate");
  const terzo_piatto = document.querySelector(".third_plate");
  
  

  primi.addEventListener("click", () => {
    nome_portate.textContent = "Primi piatti";
    primo_piatto.textContent = "Gnochetti di zucca";
    secondo_piatto.textContent = "Tortellini alla panna";
    terzo_piatto.textContent = "Cappellacci burro e salvia";
    img.src = "img/pasta (1).png";
  })

  secondi.addEventListener("click", () => {
    nome_portate.textContent = "Secondi piatti";
    primo_piatto.textContent = "Grigliata mista";
    secondo_piatto.textContent = "Filetto di manzo";
    terzo_piatto.textContent = "Branzino al forno";
    img.src = "img/secondi-removebg-preview.png";
  })

  antipasti.addEventListener("click", () => {
    nome_portate.textContent = "Antipasti";
    primo_piatto.textContent = "Pinzini con salumi";
    secondo_piatto.textContent = "Tagliere misto";
    terzo_piatto.textContent = "Insalata fredda";
    img.src = "img/antipasto.png";
  })

  dolci.addEventListener("click", () => {
    nome_portate.textContent = "Dolci";
    primo_piatto.textContent = "Tenerina";
    secondo_piatto.textContent = "Zuppa inglese";
    terzo_piatto.textContent = "Tiramisù";
    img.src = "img/dolce.png";
  })