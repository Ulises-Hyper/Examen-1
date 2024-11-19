document.addEventListener('DOMContentLoaded', () => {

    // Selección de elementos
    const playButton = document.getElementById('play-btn');
    const muteButton = document.getElementById('mute-btn');
    const volumeSlider = document.getElementById('volume-slider');
    const progressBar = document.getElementById('progress-bar');
    const currentTimeLabel = document.getElementById('current-time');
    const durationLabel = document.getElementById('duration');
    const albumCover = document.querySelector('.album-cover');
    const hiddenInput = document.querySelector('input[type="hidden"]');

    // Crear el objeto Audio
    let audio = new Audio();

    // Obtener la ruta de la canción desde el input hidden
    const audioSrc = hiddenInput.value;
    audio.src = audioSrc;

    albumCover.src = "https://via.placeholder.com/300"; // Cambia esto si tienes una portada específica

    // Actualizar duración una vez que se carga la canción
    audio.addEventListener('loadedmetadata', () => {
        durationLabel.textContent = formatTime(audio.duration);
    });

    // Reproducir / Pausar
    playButton.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            playButton.innerHTML = '<i class="bi bi-pause fs-4"></i>';
        } else {
            audio.pause();
            playButton.innerHTML = '<i class="bi bi-play fs-4"></i>';
        }
    });

    // Silenciar / Reactivar
    muteButton.addEventListener('click', () => {
        audio.muted = !audio.muted;
        muteButton.innerHTML = audio.muted 
            ? '<i class="bi bi-volume-mute fs-4"></i>' 
            : '<i class="bi bi-volume-up fs-4"></i>';
    });

    // Control de volumen (si tienes un slider de volumen)
    if (volumeSlider) {
        volumeSlider.addEventListener('input', (e) => {
            audio.volume = e.target.value;
        });
    }

    // Actualizar la barra de progreso y el tiempo actual
    audio.addEventListener('timeupdate', () => {
        const currentTime = audio.currentTime;
        const duration = audio.duration;

        const progressPercentage = (currentTime / duration) * 100;
        progressBar.style.width = `${progressPercentage}%`;
        progressBar.setAttribute('aria-valuenow', progressPercentage);

        currentTimeLabel.textContent = formatTime(currentTime);
    });

    // Formatear tiempo en minutos:segundos
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60).toString().padStart(2, '0');
        return `${minutes}:${secs}`;
    }
});