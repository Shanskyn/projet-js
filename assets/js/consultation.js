document.addEventListener("DOMContentLoaded", function() {
    let jeuxData = []; // Pour stocker les données des jeux

    // Chargement initial des données
    fetch("/api/games").then(r => r.json()).then(jsonData => {
        jeuxData = jsonData;
        AfficherJeux(jeuxData);
    });

    const inputRecherche = document.getElementById('inputRecherche');
    const selectFiltre = document.getElementById('selectFiltre');

    // Écouteur d'événements pour la recherche en temps réel
    inputRecherche.addEventListener('input', function() {
        rechercher(inputRecherche.value, selectFiltre.value);
    });
});

/*
function showNone() {
    const tableau = document.getElementById('jeux-liste');
    const showNone = document.getElementById('showNone')
    showNone.textContent = "Il n'y a rien dans le tableau";
    tableau.style.display = 'none';
}

function showTab() {
    const tableau = document.getElementById('jeux-liste');
    const showNone = document.getElementById('showNone')
    showNone.textContent = "";
    tableau.style.display = '';
}
*/


function rechercher(searchText) {
    fetch("/api/games").then(r => r.json()).then(jsonData => {
        if (searchText.trim() === "") {
            AfficherJeux(jsonData);
        } /*else {
            const filteredGames = jsonData.filter(jeu => jeu['titre'].toLowerCase().includes(searchText.toLowerCase()));
            if (filteredGames.length === 0 ) {
                showNone()
            } else {
                showTab();
                AfficherJeux(filteredGames);
            }*/
        else {
            const filteredGames = jsonData.filter(jeu => jeu['titre'].toLowerCase().includes(searchText.toLowerCase()));
            AfficherJeux(filteredGames);
        }
    });
}

/*function AfficherJeux(jeux) {
    const insertTarget = document.querySelector('tbody');
    insertTarget.innerHTML = '';

    jeux.forEach(jeu => {
        let tr = document.createElement('tr');
        ['titre', 'studio', 'editeur', 'annee', 'sommaire', 'genre', 'support'].forEach(key => {
            let td = document.createElement('td');
            td.textContent = jeu[key];
            tr.appendChild(td);
        });
        insertTarget.appendChild(tr);
    });
}*/

function AfficherJeux(jeux) {
    const container = document.getElementById('jeux-container');
    container.innerHTML = '';

    jeux.forEach(jeu => {
        let card = document.createElement('div');
        card.className = 'card';

        let cardInner = document.createElement('div');
        cardInner.className = 'card-inner';

        let cardFront = document.createElement('div');
        cardFront.className = 'card-face card-front';
        cardFront.innerHTML = `<h2>${jeu.titre}</h2>
                               <p>${jeu.studio}</p>
                               <p>${jeu.editeur}</p>
                               <p>${jeu.annee}</p>
                               <p>${jeu.genre}</p>
                               <p>${jeu.support}</p>`;

        let cardBack = document.createElement('div');
        cardBack.className = 'card-face card-back';
        cardBack.innerHTML = `<p>${jeu.sommaire}</p>`;

        cardInner.appendChild(cardFront);
        cardInner.appendChild(cardBack);
        card.appendChild(cardInner);

        container.appendChild(card);
    });
}


const inputRecherche = document.getElementById('inputRecherche');

inputRecherche.addEventListener('input', function() {
    rechercher(inputRecherche.value);
});