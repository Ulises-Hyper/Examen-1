<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="/css/datatables.css" rel="stylesheet" crossorigin="anonymous">
  <link href="/css/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/jquery-3.7.1.min.js"></script>
  <script src="/js/datatables.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>