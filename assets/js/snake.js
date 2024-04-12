const grid = document.getElementById('grid');
let score = 0; // Variable pour stocker le score initialisé à 0

// Créer la grille avec des cellules et les ajouter à la grille principale
for (let i = 0; i < 20; i++) {
  for (let j = 0; j < 20; j++) {
    const cell = document.createElement('div');
    cell.classList.add('cell');
    grid.appendChild(cell);
  }
}

let segments = []; // Liste de segments représentant le serpent
let moveX = 1;
let moveY = 0;
let interval;

// Fonction pour démarrer le mouvement automatique
function startMoving() {
  interval = setInterval(() => {
    moveSnake();
  }, 250); // Définir l'intervalle de déplacement automatique (250ms)
}

// Fonction pour arrêter le mouvement automatique
function stopMoving() {
  clearInterval(interval);
}

// Fonction pour déplacer le serpent
function moveSnake() {
  // Calculer la nouvelle position de la tête du serpent
  const newHeadX = segments[0].x + moveX;
  const newHeadY = segments[0].y + moveY;

  // Vérifier si la nouvelle position est valide
  if (isValidMove(newHeadX, newHeadY)) {
    // Ajouter la nouvelle tête du serpent
    segments.unshift({ x: newHeadX, y: newHeadY });

    // Vérifier si la tête du serpent atteint une pomme
    if (grid.children[newHeadY * 20 + newHeadX].classList.contains('red-square')) {
      segments.push({ x: segments[segments.length - 1].x, y: segments[segments.length - 1].y }); // Ajouter un segment à la fin
      placeRandomRedSquare(); // Replacer la pomme aléatoirement
      score++; // Incrémenter le score
      console.log("Score:", score); // Afficher le score dans les logs
    }

    // Supprimer la dernière partie du serpent
    undisplaySegment(segments.pop());
  } else {
    // Si le mouvement n'est pas valide, arrêter le mouvement du serpent
    stopMoving();
    displayGameOver();
    console.log("Game over!");
    return;
  }

  // Afficher le serpent
  displaySegments();
}

// Fonction pour afficher tous les segments du serpent sur la grille
function displaySegments() {
  segments.forEach(segment => {
    const cellIndex = segment.y * 20 + segment.x;
    grid.children[cellIndex].classList.add('snake');
  });
}

// Fonction pour masquer un segment spécifique du serpent sur la grille
function undisplaySegment(segment) {
  const cellIndex = segment.y * 20 + segment.x;
  grid.children[cellIndex].classList.remove('snake');
}

// Fonction pour vérifier si un mouvement est valide
function isValidMove(x, y) {
  // Vérifier si le mouvement est dans les limites de la grille
  if (x < 0 || x >= 20 || y < 0 || y >= 20) {
    return false;
  }

  // Vérifier si le serpent se mord la queue
  for (let i = 1; i < segments.length; i++) {
    if (segments[i].x === x && segments[i].y === y) {
      return false;
    }
  }

  return true;
}

// Fonction pour placer une pomme aléatoirement sur la grille
function placeRandomRedSquare() {
  const redSquare = document.querySelector('.red-square');
  if (redSquare) {
    redSquare.classList.remove('red-square');
  }
  const randomX = Math.floor(Math.random() * 20); // Position aléatoire en X
  const randomY = Math.floor(Math.random() * 20); // Position aléatoire en Y
  const cellIndex = randomY * 20 + randomX;
  grid.children[cellIndex].classList.add('red-square');
}

// Fonction pour afficher "Game Over" avec le score et un bouton "Rejouer"
function displayGameOver() {
  // Création du message d'alerte avec le score
  const gameOverMessage = `Game Over\nScore: ${score}`;

  // Affichage de l'alerte avec le message personnalisé
  alert(gameOverMessage);

  // Création du bouton "Rejouer"
  const replayButton = document.createElement('button');
  replayButton.textContent = "Rejouer";
  replayButton.classList.add('replay-button'); // Ajout de la classe pour les styles CSS
  replayButton.onclick = () => location.reload();
  document.body.appendChild(replayButton);
}

// Placer le serpent au milieu de la grille au lancement
const initialX = 9;
const initialY = 9;
segments.push({ x: initialX, y: initialY });
displaySegments();

// Démarrer le mouvement automatique au chargement de la page
startMoving();

// Placement de la pomme au lancement de la partie
placeRandomRedSquare();

// Écouter les événements de pression sur les touches directionnelles pour contrôler le serpent
document.addEventListener('keydown', (event) => {
  switch (event.key) {
    case 'ArrowUp':
      if (moveY !== 1) { // Ne pas permettre au serpent de faire demi-tour
        moveX = 0;
        moveY = -1;
      }
      break;
    case 'ArrowDown':
      if (moveY !== -1) {
        moveX = 0;
        moveY = 1;
      }
      break;
    case 'ArrowLeft':
      if (moveX !== 1) {
        moveX = -1;
        moveY = 0;
      }
      break;
    case 'ArrowRight':
      if (moveX !== -1) {
        moveX = 1;
        moveY = 0;
      }
      break;
    default:
      break;
  }
});