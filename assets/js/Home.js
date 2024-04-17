// d8b   db  .d8b.  db    db      .d8888.  .d88b.  db    db d8888b. d888888b .d8888. 
// 888o  88 d8' `8b 88    88      88'  YP .8P  Y8. 88    88 88  `8D   `88'   88'  YP 
// 88V8o 88 88ooo88 Y8    8P      `8bo.   88    88 88    88 88oobY'    88    `8bo.   
// 88 V8o88 88~~~88 `8b  d8'        `Y8b. 88    88 88    88 88`8b      88      `Y8b. 
// 88  V888 88   88  `8bd8'       db   8D `8b  d8' 88b  d88 88 `88.   .88.   db   8D 
// VP   V8P YP   YP    YP         `8888Y'  `Y88P'  ~Y8888P' 88   YD Y888888P `8888Y' 

document.getElementById('menu1').addEventListener('mouseover', function() {
    var contenuDiv = document.querySelector('.contenu');
    contenuDiv.textContent = 'Contenu du menu 1';
    console.log("Menu 1 affiché");
});

document.getElementById('menu1').addEventListener('click', function() {
    window.location.href = '/';
});

document.getElementById('menu2').addEventListener('mouseover', function() {
    var contenuDiv = document.querySelector('.contenu');
    contenuDiv.textContent = 'Contenu du menu 2';
    console.log("Menu 2 affiché");
});

document.getElementById('menu2').addEventListener('click', function() {
    window.location.href = '/consultation';
});

document.getElementById('menu3').addEventListener('mouseover', function() {
    var contenuDiv = document.querySelector('.contenu');
    contenuDiv.textContent = 'Contenu du menu 3';
    console.log("Menu 3 affiché");
});

document.getElementById('menu3').addEventListener('click', function() {
    window.location.href = '/';
});




// db   dD  .d88b.  d8b   db  .d8b.  .88b  d88. d888888b 
// 88 ,8P' .8P  Y8. 888o  88 d8' `8b 88'YbdP`88   `88'   
// 88,8P   88    88 88V8o 88 88ooo88 88  88  88    88    
// 88`8b   88    88 88 V8o88 88~~~88 88  88  88    88    
// 88 `88. `8b  d8' 88  V888 88   88 88  88  88   .88.   
// YP   YD  `Y88P'  VP   V8P YP   YP YP  YP  YP Y888888P

  let sequence = ""; // Variable pour stocker la séquence de boutons
    let lastPressTime = 0; // Variable pour stocker le temps du dernier appui sur un bouton
    const secretCode = "upupdowndownleftrightleftrightba"; // Code secret à vérifier

   
    // Fonction pour vérifier si la séquence correspond au code secret
    function checkSecretCode(sequence) {
        if (sequence === secretCode) {
            window.location.href = "http://projet/?page=snake";
        }
    }

    // Ajout d'écouteurs d'événements à chaque bouton de la manette
    const buttons = document.querySelectorAll('#snes-gamepad button');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const currentTime = new Date().getTime();
            if (currentTime - lastPressTime <= 1000) { // Vérifier si le dernier appui était dans le délai d'une seconde
                sequence += button.id; // Ajouter l'identifiant du bouton à la séquence
                console.log("Suite de boutons :", sequence);
                checkSecretCode(sequence); // Vérifier si la séquence correspond au code secret
            }else {
                sequence = button.id; // Réinitialiser la séquence si le dernier appui était après une seconde
                console.log("Nouvelle suite de boutons :", sequence);
            }
            lastPressTime = currentTime; // Mettre à jour le temps du dernier appui
        });
    });


// d8b   db d88888b d8888b. d8888b.      d8888b.  .d88b.  db    db 
// 888o  88 88'     88  `8D 88  `8D      88  `8D .8P  Y8. `8b  d8' 
// 88V8o 88 88ooooo 88oobY' 88   88      88oooY' 88    88  `8bd8'  
// 88 V8o88 88~~~~~ 88`8b   88   88      88~~~b. 88    88  .dPYb.  
// 88  V888 88.     88 `88. 88  .8D      88   8D `8b  d8' .8P  Y8. 
// VP   V8P Y88888P 88   YD Y8888D'      Y8888P'  `Y88P'  YP    YP     

// Sélectionnez la boîte de logs
var logBox = document.getElementById('logBox');

// Fonction pour ajouter un message de log dans la boîte
function addLog(message) {
  var logMessage = document.createElement('p');
  logMessage.textContent = message;

  // Ajouter la nouvelle ligne au début de la boîte de logs
  logBox.insertBefore(logMessage, logBox.firstChild);

  // Limiter le nombre de lignes dans la boîte de logs
  var maxLines = 6; // Nombre maximum de lignes à afficher
  var logLines = logBox.querySelectorAll('p');
  if (logLines.length > maxLines) {
    logBox.removeChild(logLines[maxLines]);
  }
}

// Redirection des logs console vers la boîte de logs
console.log = function(message) {
  addLog('[LOG] ' + message);
}

// d8b   db d88888b d8888b. d8888b.      .88b  d88.  .d88b.  d8888b. d88888b 
// 888o  88 88'     88  `8D 88  `8D      88'YbdP`88 .8P  Y8. 88  `8D 88'     
// 88V8o 88 88ooooo 88oobY' 88   88      88  88  88 88    88 88   88 88ooooo 
// 88 V8o88 88~~~~~ 88`8b   88   88      88  88  88 88    88 88   88 88~~~~~ 
// 88  V888 88.     88 `88. 88  .8D      88  88  88 `8b  d8' 88  .8D 88.     
// VP   V8P Y88888P 88   YD Y8888D'      YP  YP  YP  `Y88P'  Y8888D' Y88888P

// Sélectionnez l'interrupteur et la boîte de logs
var logSwitch = document.getElementById('logSwitch');
var logBox = document.getElementById('logBox');

// Ajoutez un événement "change" à l'interrupteur
logSwitch.addEventListener('change', function() {
  // Si l'interrupteur est coché, affichez la boîte de logs, sinon cachez-la
  if (logSwitch.checked) {
    logBox.style.display = 'block'; // Affiche la boîte de logs
    console.log("Nerd Box affichée");
  } else {
    logBox.style.display = 'none'; // Cache la boîte de logs
    console.log("Nerd Box cachée");
  }
});