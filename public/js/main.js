document.addEventListener("DOMContentLoaded", () => {
    // Seleccionar todos los elementos de audio
    const audioElements = document.querySelectorAll("audio");

    // Iterar sobre cada elemento de audio
    audioElements.forEach((audioElement) => {
        // Escuchar el evento 'loadedmetadata' para cada audio
        audioElement.addEventListener("loadedmetadata", () => {
            const duration = audioElement.duration; // Obtener duración en segundos
            const formattedDuration = formatTime(duration); // Convertir a mm:ss

            // Buscar el contenedor donde mostrar la duración (por ejemplo, un <span> junto al audio)
            const durationElement = audioElement.closest("td").previousElementSibling;
            if (durationElement) {
                durationElement.textContent = formattedDuration; // Actualizar con la duración formateada
            }
        });
    });
});

// Función para formatear segundos a mm:ss
function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60); // Obtener los minutos
    const secs = Math.floor(seconds % 60); // Obtener los segundos restantes
    return `${minutes}:${secs < 10 ? "0" : ""}${secs}`; // Formato mm:ss
}