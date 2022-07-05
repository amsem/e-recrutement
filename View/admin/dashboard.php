<?php
    session_start();
    session_regenerate_id();
    if($_SESSION['role'] != 'admin'){
        header("Location: ../index.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Espace Admin ! </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">JobLy</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Rechercher" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="../../Controller/Adminn.php?q=logout">Deconnexion</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="dashboard.php">
                  <span data-feather="home" class="align-text-bottom"></span>
                 Acceuil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recruteures.php">
                  <span data-feather="file" class="align-text-bottom"></span>
                  recruteures
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="candidats.php">
                  <span data-feather="shopping-cart" class="align-text-bottom"></span>
                  candidats
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="offres.php">
                  <span data-feather="users" class="align-text-bottom"></span>
                  offres
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div>
      <input type="text" name="categorieOffre" placeholder="entrer le nom de categorie">
      <button class="btn btn2 btn-secondary m-3" type="submit"></button>

    </div>
  </body>
</html>
