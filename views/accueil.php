<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeWarp</title>
    <link rel="stylesheet" href="../assets/css/accueil.css">
</head>
<body>


<header>
    <a href="http://projet/accueil">
        <img src="../assets/img/logo.png" alt="TimeWarp">
    </a>
  <h1 class="titre">Profitez du passé avec la modernité du futur</h1>
  <label class="switch">
    <input type="checkbox" id="logSwitch">
    <span class="slider"></span>
  </label>
</header>

<input tabindex="-1" type="radio" name="cam" id="cam1" />
<input tabindex="-1" type="radio" name="cam" id="cam2" />
<input tabindex="-1" type="radio" name="cam" id="cam3" />
<input tabindex="-1" type="radio" name="cam" id="cam4" />
<input tabindex="-1" type="radio" name="cam" id="cam5" checked/>
<input tabindex="-1" type="radio" name="cam" id="cam6" />
<input tabindex="-1" type="radio" name="cam" id="cam7" />
<input tabindex="-1" type="radio" name="cam" id="cam8" />
<input tabindex="-1" type="radio" name="cam" id="cam9" />

<div id="camera">
  <label for="cam1"></label>
  <label for="cam2"></label>
  <label for="cam3"></label>
  <label for="cam4"></label>
  <label for="cam5"></label>
  <label for="cam6"></label>
  <label for="cam7"></label>
  <label for="cam8"></label>
  <label for="cam9"></label>
</div>


<article id="snes-gamepad" aria-label="SNES controller">

  <div id="cord"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div> 
  

  <button id="l" class="is3d">Top left<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></button>
  <button id="r" class="is3d">Top Right<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></button>
  

  <div class="face is3d"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  

  <h1 class="esperluette">TimeWarp</h1>
  <p>- REVIVE PROJECT -</p>
  
  <p class="letter letter-x" aria-hidden="true">X</p>
  <p class="letter letter-y" aria-hidden="true">Y</p>
  <p class="letter letter-a" aria-hidden="true">A</p>
  <p class="letter letter-b" aria-hidden="true">B</p>
  <p class="letter-start" aria-hidden="true">START</p>
  <p class="letter-select" aria-hidden="true">SELECT</p>
  
  <!-- directional buttons + axis -->
  <button id="up">Up</button>
  <button id="left">Left</button>
  <button id="right">Right</button>
  <button id="down">Down</button>
  <div class="axis is3d"><div style="--z:1"></div><div style="--z:2"></div><div style="--z:3"></div><div style="--z:4"></div><div style="--z:5"></div><div style="--z:6"></div></div>
  
  <!-- Menu buttons (start/select) -->
  <button id="select" class="is3d">Select<div style="--z:1"></div><div style="--z:2"></div><div style="--z:3"></div><div style="--z:4"></div></button>
  <button id="start" class="is3d">Start<div style="--z:1"></div><div style="--z:2"></div><div style="--z:3"></div><div style="--z:4"></div></button>
  
  <!-- Action buttons -->
  <div class="buttons">
    <button id="x" class="circle is3d">x<div></div><div></div><div></div><div></div></button>
    <button id="y" class="circle is3d">y<div></div><div></div><div></div><div></div></button>
    <button id="a" class="circle is3d">a<div></div><div></div><div></div><div></div></button>
    <button id="b" class="circle is3d">b<div></div><div></div><div></div><div></div></button>
  </div>
</article>

<div class="content-wrapper">
        <div class="simulateur">
            <div class="boite-dialogue">
              <div id="menu-navigation" class="nav-bar">
                <button class="selecteur-menu" id="menu1">Page Produit</button>
                <button class="selecteur-menu" id="menu2">Catalogues</button>
                <button class="selecteur-menu" id="menu3">Menu 3</button>
              </div>
              <div class="contenu">
                Sélectionnez un menu.
              </div>
            </div>
        </div>

        <div class="carousel-container carousel">
          <div class="carousel-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCos0q_9WM8RL741S1GbnTkgQntT_CoaZlA2yw7y69og&s" alt="Image 1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj-0JU3mnSA8xkOShXn8SJjfh6ajf6HXo49bGQiepYyw&s" alt="Image 2">
            <img src="https://img.freepik.com/photos-premium/retro-8-bit-super-mario-console-game-background-fond-ecran-haute-resolution-pour-fans-jeux-vintage_820074-242.jpg" alt="Image 3">
          </div>
          <button class="prevBtn"></button>
          <button class="nextBtn"></button>
        </div>
    </div>

<div id="logBox">
  <!-- div pour afficher les logs -->
</div>

<script src="../assets/js/Home.js"></script>

</body>
</html>

<footer>
    <p>&copy; 2024 TimeWarp. Tous droits réservés.</p>
</footer>

</body>
</html>