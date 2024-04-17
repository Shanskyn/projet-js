

function AfficherJeux(jeux) {

    const insertTarget = document.querySelector('tbody')

    jeux.forEach(jeu => {
        let tr = document.createElement('tr')

        let titre = document.createElement('td')
        titre.textContent = jeu.titre

        let annee = document.createElement('td')
        annee.textContent = jeu.annee

        let support = document.createElement('td')
        support.textContent = jeu.support

        let studio = document.createElement('td')
        studio.textContent = jeu.studio

        let editeur = document.createElement('td')
        editeur.textContent = jeu.editeur

        let sommaire = document.createElement('td')
        sommaire.textContent = jeu.sommaire

        let genre = document.createElement('td')
        genre.textContent = jeu.genre

        tr.appendChild(titre)
        tr.appendChild(annee)
        tr.appendChild(studio)
        tr.appendChild(editeur)
        tr.appendChild(sommaire)
        tr.appendChild(genre)

        insertTarget.appendChild(tr)
    })
}
document.addEventListener("DOMContentLoaded", function() {
    fetch("/api/games").then(r => {
        return r.json()
    }).then(jsonData => {
        AfficherJeux(jsonData)
    })
})

