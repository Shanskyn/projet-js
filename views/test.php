<?php

?>

<form action="/test" id="deleteForm">
    <button type="submit">Valider</button>
</form>

<script>
    document.getElementById("deleteForm").addEventListener("submit", e => {
        e.preventDefault()
        fetch("/test", {
            method: "GET"
        })
    })
</script>