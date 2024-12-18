<?php
// initialization session
session_start();

$authonitication = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWay Console</title>
    <link rel="stylesheet" href="/MyWay-Console---PHP/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- Header 1 -->
        <div style="background-color: #343434;">
          <!-- Se Dahsboard-->
          <?php
           if ($authonitication) {
          ?>
            <div>
              <a href="dashboard.php">
                <button class="btn btn-success">
                  <i class="bi bi-person"></i>Dashboarde
                </button>
              </a>
            </div>
          <!-- Se Connecter -->
          <?php
            }else{
          ?>
          <div>
            <a href="login.php">
              <button class="btn btn-primary">
                <i class="bi bi-person"></i>Me connecter
              </button>
            </a>
          </div>
          <?php
            };
          ?>
            <!-- Languege -->
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
        </div>
        <!-- Header 2 -->
         <div>
            <ul>
                <li>
                  <span>Apprendre</span>à me connaître
                </li>
                <li>
                  <span>Explorer</span>et découvrir
                </li>
                <li>
                  <span>M'aider</span>à faire mon choix
                </li>
                <li>
                  <a href="register.php">
                    <button class="btn btn-primary">M’inscrire</button>
                  </a>
                </li>
            </ul>
         </div>
        <img src="assets/images/logo.jpg" alt="logo">

    </header>