const grid = document.getElementById('grid');
let score = 0;


for (let i = 0; i < 20; i++) {
  for (let j = 0; j < 20; j++) {
    const cell = document.createElement('div');
    cell.classList.add('cell');
    grid.appendChild(cell);
  }
}

let segments = [];
let moveX = 1;
let moveY = 0;
let interval;


function startMoving() {
  interval = setInterval(() => {
    moveSnake();
  }, 250);
}


function stopMoving() {
  clearInterval(interval);
}


function moveSnake() {

  const newHeadX = segments[0].x + moveX;
  const newHeadY = segments[0].y + moveY;


  if (isValidMove(newHeadX, newHeadY)) {

    segments.unshift({ x: newHeadX, y: newHeadY });


    if (grid.children[newHeadY * 20 + newHeadX].classList.contains('red-square')) {
      segments.push({ x: segments[segments.length - 1].x, y: segments[segments.length - 1].y });
      placeRandomRedSquare();
      score++;
      console.log("Score:", score);
    }

    undisplaySegment(segments.pop());
  } else {
    stopMoving();
    displayGameOver();
    console.log("Game over!");
    return;
  }


  displaySegments();
}


function displaySegments() {
  segments.forEach(segment => {
    const cellIndex = segment.y * 20 + segment.x;
    grid.children[cellIndex].classList.add('snake');
  });
}


function undisplaySegment(segment) {
  const cellIndex = segment.y * 20 + segment.x;
  grid.children[cellIndex].classList.remove('snake');
}


function isValidMove(x, y) {

  if (x < 0 || x >= 20 || y < 0 || y >= 20) {
    return false;
  }

 
  for (let i = 1; i < segments.length; i++) {
    if (segments[i].x === x && segments[i].y === y) {
      return false;
    }
  }

  return true;
}


function placeRandomRedSquare() {
  const redSquare = document.querySelector('.red-square');
  if (redSquare) {
    redSquare.classList.remove('red-square');
  }
  const randomX = Math.floor(Math.random() * 20);
  const randomY = Math.floor(Math.random() * 20);
  const cellIndex = randomY * 20 + randomX;
  grid.children[cellIndex].classList.add('red-square');
}


function displayGameOver() {

  const gameOverMessage = `Game Over\nScore: ${score}`;

 
  alert(gameOverMessage);


  const replayButton = document.createElement('button');
  replayButton.textContent = "Rejouer";
  replayButton.classList.add('replay-button');
  replayButton.onclick = () => location.reload();
  document.body.appendChild(replayButton);
}


const initialX = 9;
const initialY = 9;
segments.push({ x: initialX, y: initialY });
displaySegments();


startMoving();


placeRandomRedSquare();


document.addEventListener('keydown', (event) => {
  switch (event.key) {
    case 'ArrowUp':
      if (moveY !== 1) {
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