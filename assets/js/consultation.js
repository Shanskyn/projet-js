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

function rechercher(searchText) {
    fetch("/api/games").then(r => r.json()).then(jsonData => {
        if (searchText.trim() === "") {
            AfficherJeux(jsonData);
        } else {
            const filteredGames = jsonData.filter(jeu => jeu['titre'].toLowerCase().includes(searchText.toLowerCase()));
            AfficherJeux(filteredGames);
        }
    });
}

function AfficherJeux(jeux) {
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
}

const inputRecherche = document.getElementById('inputRecherche');

inputRecherche.addEventListener('input', function() {
    // Appelle ta fonction ici avec le texte saisi comme argument
    rechercher(inputRecherche.value);
});