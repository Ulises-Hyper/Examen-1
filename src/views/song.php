<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor de Música</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <style>
        .player-card {
            max-width: 400px;
            margin: 2rem auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .album-cover {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .progress {
            cursor: pointer;
            height: 6px;
        }

        .controls button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="player-card card">
            <img src="https://via.placeholder.com/300" alt="Album Cover" class="album-cover">

            <div class="card-body">
                <h5 class="card-title mb-0"><?= $song['song_name'] ?></h5>
                <p class="text-muted"><?= $song['artist'] ?></p>

                <input type="hidden" value="<?= htmlspecialchars($song['song_path']) ?>">

                <!-- Progress bar -->
                <div class="progress mb-3">
                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="d-flex justify-content-between small text-muted mb-3">
                    <span id="current-time">0:00</span>
                    <span id="duration">4:30</span>
                </div>

                <!-- Controls -->
                <div class="controls d-flex justify-content-center gap-3 mb-3">
                    <button id="play-btn" class="btn btn-primary">
                        <i class="bi bi-play fs-4"></i>
                    </button>
                    <button id="mute-btn" class="btn btn-secondary">
                        <i class="bi bi-volume-mute fs-4"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/song.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>