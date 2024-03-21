<?php

require_once __DIR__ ."/repository/UserRepository.php";

$userRepository = new UserRepository();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>todolist</title>
</head>
<body>

<?php
session_start();

if (isset($_SESSION['connecté']) && !empty($_SESSION['user'])) {
  
  header('location:profil.php');
  die;
}

// include "./public/assets/includes/header.php"; 

?>

<header>
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./public/assets/image/logoBlanc.svg" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
      TO-DO List
    </a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

  <button id="btnInscription" class="btn btn-outline-light me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#modalInscription">Inscription</button>
 
<!-- Modal Inscription -->

<form action="src/traitement.php" method="post" onsubmit="return Validation();">
<div class="modal fade" id="modalInscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<!-- formulaire inscription -->
      <div class="input-group mb-3">
  <span class="input-group-text" id="nom">Nom</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="prenom">Prénom</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="mail">Email</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="password">Mot de passe</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="password2">Mot de passe</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        
      </div>

<!-- fin formulaire inscription -->
<div id="message"></div>
      <div class="modal-footer">
        
        <div id="buttonValider">
        <input class="btn btn-success" type="submit" onclick="appelAjax()" value="Valider">
        </div>
      </div>
      
    </div>
  </div>
</div>
</form>
<!-- fin Modal inscription -->

<button id="btnConnexion" class="btn btn-outline-light me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#modalConnexion">Connexion</button>
 
<!-- Modal Connexion -->

<div class="modal fade" id="modalConnexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-Connexion" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<!-- formulaire Connexion -->
<form action="src/traitement.php" method="post" onsubmit="return Validation();">
      <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Mot de passe</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        </div>
</form>
<!-- fin formulaire Connexion -->

      <div class="modal-footer">
        
        <div id="buttonValider">
        <input class="btn btn-success" type="submit" value="Valider">
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- fin Modal Connexion -->

  
</div>
  </div>
</nav>
</header>




<!-- liste des taches -->

<div class="boxTask">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Ménage<span class="badge rounded-pill text-bg-danger">Urgent</span><span class="badge bg-secondary">Famille</span></a>
  <a href="#" class="list-group-item list-group-item-action">Vaisselle<span class="badge rounded-pill text-bg-warning">Important</span></a>
  <a href="#" class="list-group-item list-group-item-action">Lessive<span class="badge rounded-pill text-bg-info">Info</span></a>
  <a href="#" class="list-group-item list-group-item-action">Courses<span class="badge rounded-pill text-bg-danger">Urgent</span></a>
  
<!-- formulaire -->
<form action="src/traitement.php" method="post" onsubmit="return Validation();">
<div class="formTask">
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Titre</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Descriptif</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3d-grid d-md-flex">
  <label class="input-group-text" for="inputGroupSelect01">Priorités</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Sectionner</option>
    <option value="1">Normale</option>
    <option value="2">Importante</option>
    <option value="3">Urgente</option>
  </select>
  <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Sectionner</option>
    <option value="1">Quotidient</option>
    <option value="2">Travail</option>
    <option value="3">Famille</option>
  </select>
</div>

<div id='date' class="p-3">
    <label for="start">Date:</label>
    <input type="date" id="start" name="trip-start" value="2024-02-22" min="2018-01-01" max="202">
</div>

<div id="buttonValider" class="d-grid gap-2 d-md-block">
<input class="btn btn-success" type="submit" value="Valider">
</div>
</div>
</div>
</form>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-outline-success" type="button">Déconnexion</button>
</div>


<script src="/public/assets/js/front.js"></script>
</body>
</html>