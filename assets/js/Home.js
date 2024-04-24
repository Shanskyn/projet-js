// d8b   db  .d8b.  db    db      .d8888.  .d88b.  db    db d8888b. d888888b .d8888. 
// 888o  88 d8' `8b 88    88      88'  YP .8P  Y8. 88    88 88  `8D   `88'   88'  YP 
// 88V8o 88 88ooo88 Y8    8P      `8bo.   88    88 88    88 88oobY'    88    `8bo.   
// 88 V8o88 88~~~88 `8b  d8'        `Y8b. 88    88 88    88 88`8b      88      `Y8b. 
// 88  V888 88   88  `8bd8'       db   8D `8b  d8' 88b  d88 88 `88.   .88.   db   8D 
// VP   V8P YP   YP    YP         `8888Y'  `Y88P'  ~Y8888P' 88   YD Y888888P `8888Y' 

const displayMenu1 = function() {
  var contenuDiv = document.querySelector('.contenu');
  contenuDiv.textContent = 'Cette page présente notre console retro nouvelle génération, La REVIVE.';
  console.log("Menu 1 affiché");
}

const displayMenu2 = function() {
  var contenuDiv = document.querySelector('.contenu');
  contenuDiv.textContent = 'Retrouvez ici le large catalogue des consoles et jeux retros disponibles sur la REVIVE.';
  console.log("Menu 2 affiché");
}

const displayMenu3 = function() {
  var contenuDiv = document.querySelector('.contenu');
  contenuDiv.textContent = 'SOON ...';
  console.log("Menu 3 affiché")
}

document.getElementById('menu1').addEventListener('mouseover', function() {
  displayMenu1()
});

document.getElementById('menu1').addEventListener('click', function() {
    window.location.href = '?page=accueil';
});

document.getElementById('menu2').addEventListener('mouseover', function() {
      displayMenu2()
});

document.getElementById('menu2').addEventListener('click', function() {
    window.location.href = '?page=consultation';
});

document.getElementById('menu3').addEventListener('mouseover', function() {
    displayMenu3()
});

document.getElementById('menu3').addEventListener('click', function() {
    window.location.href = '?page=';
});


// d8b   db  .d8b.  db    db      d8888b.  .d88b.  db    db d888888b  .d88b.  d8b   db .d8888. 
// 888o  88 d8' `8b 88    88      88  `8D .8P  Y8. 88    88 `~~88~~' .8P  Y8. 888o  88 88'  YP 
// 88V8o 88 88ooo88 Y8    8P      88oooY' 88    88 88    88    88    88    88 88V8o 88 `8bo.   
// 88 V8o88 88~~~88 `8b  d8'      88~~~b. 88    88 88    88    88    88    88 88 V8o88   `Y8b. 
// 88  V888 88   88  `8bd8'       88   8D `8b  d8' 88b  d88    88    `8b  d8' 88  V888 db   8D 
// VP   V8P YP   YP    YP         Y8888P'  `Y88P'  ~Y8888P'    YP     `Y88P'  VP   V8P `8888Y' 


let clickableMenus = document.querySelectorAll('#menu-navigation>button.selecteur-menu')

let menuIndex = -1
let menuCount = clickableMenus.length

let menuCallbacks = {
  0: displayMenu1,
  1: displayMenu2,
  2: displayMenu3,
}

function nextMenuItem() {
  menuIndex = (menuIndex + 1) % menuCount;
  if (menuIndex in menuCallbacks) {
    menuCallbacks[menuIndex]();
  }

  clickableMenus.forEach(menu => menu.classList.remove("selected"));
  let menu = clickableMenus[menuIndex];
  menu.classList.add("selected");
}

document.getElementById('right').addEventListener("click", nextMenuItem);

function previousMenuItem() {
  menuIndex = (menuIndex - 1 + menuCount) % menuCount;
  if (menuIndex in menuCallbacks) {
    menuCallbacks[menuIndex]();
  }
 
  clickableMenus.forEach(menu => menu.classList.remove("selected"));
  let menu = clickableMenus[menuIndex];
  menu.classList.add("selected");
}

document.getElementById('left').addEventListener("click", previousMenuItem);

// db   dD  .d88b.  d8b   db  .d8b.  .88b  d88. d888888b 
// 88 ,8P' .8P  Y8. 888o  88 d8' `8b 88'YbdP`88   `88'   
// 88,8P   88    88 88V8o 88 88ooo88 88  88  88    88    
// 88`8b   88    88 88 V8o88 88~~~88 88  88  88    88    
// 88 `88. `8b  d8' 88  V888 88   88 88  88  88   .88.   
// YP   YD  `Y88P'  VP   V8P YP   YP YP  YP  YP Y888888P

  let sequence = "";
    let lastPressTime = 0;
    const secretCode = "upupdowndownleftrightleftrightba";

  
    function checkSecretCode(sequence) {
        if (sequence === secretCode) {
            window.location.href = "?page=snake";
        }
    }

    const buttons = document.querySelectorAll('#snes-gamepad button');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const currentTime = new Date().getTime();
            if (currentTime - lastPressTime <= 1000) {
                sequence += button.id;
                console.log("Suite de boutons :", sequence);
                checkSecretCode(sequence);
            }else {
                sequence = button.id;
                console.log("Nouvelle suite de boutons :", sequence);
            }
            lastPressTime = currentTime;
        });
    });


// d8b   db d88888b d8888b. d8888b.      d8888b.  .d88b.  db    db 
// 888o  88 88'     88  `8D 88  `8D      88  `8D .8P  Y8. `8b  d8' 
// 88V8o 88 88ooooo 88oobY' 88   88      88oooY' 88    88  `8bd8'  
// 88 V8o88 88~~~~~ 88`8b   88   88      88~~~b. 88    88  .dPYb.  
// 88  V888 88.     88 `88. 88  .8D      88   8D `8b  d8' .8P  Y8. 
// VP   V8P Y88888P 88   YD Y8888D'      Y8888P'  `Y88P'  YP    YP     


var logBox = document.getElementById('logBox');

function addLog(message) {
  var logMessage = document.createElement('p');
  logMessage.textContent = message;


  logBox.insertBefore(logMessage, logBox.firstChild);


  var maxLines = 3;
  var logLines = logBox.querySelectorAll('p');
  if (logLines.length > maxLines) {
    logBox.removeChild(logLines[maxLines]);
  }
}

console.log = function(message) {
  addLog('[LOG] ' + message);
}

// d8b   db d88888b d8888b. d8888b.      .88b  d88.  .d88b.  d8888b. d88888b 
// 888o  88 88'     88  `8D 88  `8D      88'YbdP`88 .8P  Y8. 88  `8D 88'     
// 88V8o 88 88ooooo 88oobY' 88   88      88  88  88 88    88 88   88 88ooooo 
// 88 V8o88 88~~~~~ 88`8b   88   88      88  88  88 88    88 88   88 88~~~~~ 
// 88  V888 88.     88 `88. 88  .8D      88  88  88 `8b  d8' 88  .8D 88.     
// VP   V8P Y88888P 88   YD Y8888D'      YP  YP  YP  `Y88P'  Y8888D' Y88888P


var logSwitch = document.getElementById('logSwitch');
var logBox = document.getElementById('logBox');
var snes = document.getElementById('snes-gamepad');
var carousel = document.getElementById('carousel-container');


logSwitch.addEventListener('change', function() {
  if (logSwitch.checked) {
    logBox.style.display = 'block';
    snes.style.display = 'block';
    document.querySelector('.carousel').style.display = 'none'; // Utilisation de la classe .carousel
    console.log("Nerd mode activé");
  } else {
    logBox.style.display = 'none';
    snes.style.display = 'none';
    document.querySelector('.carousel').style.display = 'block'; // Utilisation de la classe .carousel
    console.log("Nerd mode désactivé");
  }
});


//  .o88b.  .d8b.  d8888b.  .d88b.  db    db .d8888. d88888b db      
// d8P  Y8 d8' `8b 88  `8D .8P  Y8. 88    88 88'  YP 88'     88      
// 8P      88ooo88 88oobY' 88    88 88    88 `8bo.   88ooooo 88      
// 8b      88~~~88 88`8b   88    88 88    88   `Y8b. 88~~~~~ 88      
// Y8b  d8 88   88 88 `88. `8b  d8' 88b  d88 db   8D 88.     88booo. 
//  `Y88P' YP   YP 88   YD  `Y88P'  ~Y8888P' `8888Y' Y88888P Y88888P 

let slideIndex = 0;
const slides = document.querySelectorAll('.carousel-slide img');
const slideArea = document.querySelector('.carousel-slide');
const totalSlides = slides.length;

document.querySelector('.prevBtn').addEventListener('click', () => {
    changeSlide(-1);
});

document.querySelector('.nextBtn').addEventListener('click', () => {
    changeSlide(1);
});

function changeSlide(step) {
    slideIndex += step;


    if (slideIndex >= totalSlides) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = totalSlides - 1;
    }

    slideArea.style.transform = `translateX(-${slideIndex * 100 / 3}%)`;
}


slideArea.style.transform = `translateX(-${slideIndex * 100 / 3}%)`;