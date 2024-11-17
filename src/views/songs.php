<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/datatables.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/main.js"></script>
</head>

<body>

    <!-- Navbar -->
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Fixed navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?r=formsongs">Add Songs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?r=songs">Songs</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>


    <!-- Tabla de canciones -->
    <div class="container">
        <div class="table-responsive mt-4 rounded">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col"><i class="bi bi-music-note"></i> Nombre</th>
                        <th scope="col"><i class="bi bi-person"></i> Artista</th>
                        <th scope="col"><i class="bi bi-clock"></i> Duración</th>
                        <th scope="col"><i class="bi bi-controller"></i> Controles</th>
                    </tr>
                </thead>
                <?php if (!empty($songs)): ?>
                    <?php foreach ($songs as $song): ?>
                        <!-- id_song | song_name | artist | duration | song_path -->
                        <tbody>
                            <tr>
                                <td class="m-4"><i class="bi bi-music-note-beamed"></i> <?= $song['song_name'] ?></td>
                                <td><i class="bi bi-person-circle"> <?= $song['artist'] ?></i></td>
                                <td id="durationBtn"><i class="bi bi-clock"></i></td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center justify-content-start gap-2 p-2 w-100">
                                        <!-- Contenedor del reproductor de audio -->
                                        <div class="audio-player bg-white rounded-3 shadow-sm p-2 flex-grow-1">
                                            <audio id="myAudio" controls class="w-100">
                                                <source src="<?= htmlspecialchars($song['song_path']) ?>" type="audio/mpeg">
                                                Tu navegador no soporta el elemento de audio.
                                            </audio>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tbody>
                        <tr>
                            <td colspan="4">No hay canciones disponibles</td>
                        </tr>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>

</html>