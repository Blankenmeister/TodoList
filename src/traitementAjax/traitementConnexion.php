<?php

require_once __DIR__ .'/../../Models/User.php';
require_once __DIR__ .'/../../repositories/UserRepository.php';

//enregistrement en base de données en "sanitisant" les champs: 

if (!empty(file_get_contents('php://input'))) {
    $data = json_decode(file_get_contents('php://input'));

  
  $emailConnexion = htmlspecialchars($data->emailConnexion);
  $passwordConnexion = password_hash($data->passwordConnexion, PASSWORD_DEFAULT);

  echo json_encode($passwordConnexion);

  }

  