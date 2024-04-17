

function handleGames(games) {

    const insertTarget = document.querySelector('tbody')

    games.forEach(game => {
        let tr = document.createElement('tr')
        let name = document.createElement('td')
        name.textContent = game.name

        let summary = document.createElement('td')
        summary.textContent = game.summary

        tr.appendChild(name)
        tr.appendChild(summary)

        insertTarget.appendChild(tr)
    })
}
document.addEventListener("DOMContentLoaded", function() {
    fetch("/api/games").then(r => {
        return r.json()
    }).then(jsonData => {
        handleGames(jsonData)
    })
})

