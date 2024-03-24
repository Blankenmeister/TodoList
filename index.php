<?php

require_once __DIR__ ."/repositories/UserRepository.php";

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


include "./public/assets/includes/header.php"; 

?>


<!-- liste des taches -->

<div class="boxTask">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Ménage<span class="badge rounded-pill text-bg-danger">Urgent</span><span class="badge bg-secondary">Famille</span></a>
  <a href="#" class="list-group-item list-group-item-action">Vaisselle<span class="badge rounded-pill text-bg-warning">Important</span></a>
  <a href="#" class="list-group-item list-group-item-action">Lessive<span class="badge rounded-pill text-bg-info">Info</span></a>
  <a href="#" class="list-group-item list-group-item-action">Courses<span class="badge rounded-pill text-bg-danger">Urgent</span></a>
  
<!-- formulaire -->
<form>
<div class="formTask">
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Titre</span>
  <input type="text" class="form-control" id="titre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Descriptif</span>
  <input type="text" class="form-control" id="description" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3d-grid d-md-flex">
  <label class="input-group-text" for="inputGroupSelect01">Priorités</label>
  <select class="form-select" id="priorites">
    <option selected>Sectionner</option>
    <option value="1">Normale</option>
    <option value="2">Importante</option>
    <option value="3">Urgente</option>
  </select>
  <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
  <select class="form-select" id="categories">
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


<button class="btn btn-success" onclick="AjaxTask(event)">Valider</button>
<div id="message"></div>

</div>
</div>
</form>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-outline-success" type="button">Déconnexion</button>
</div>


<script src="./public/assets/js/ajax/requeteInscription"></script>
<script src="./public/assets/js/ajax/requeteConnexion"></script>
<script src="./public/assets/js/ajax/requeteTask"></script>
</body>
</html>