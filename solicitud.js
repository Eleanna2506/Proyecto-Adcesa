
document.getElementById("procesarSolicitud").addEventListener("submit", function(event) {
    event.preventDefault();
    fetch("MostrarSolicitud.php")
    .then(response => response.json())
    .then(data => {
    const div= document.getElementById("solicitud");
    div.style.display= 'flex';
    })
})
