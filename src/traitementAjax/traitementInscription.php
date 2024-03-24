<?php

require_once __DIR__ .'/../../Models/User.php';
require_once __DIR__ .'/../../repositories/UserRepository.php';

//enregistrement en base de données:
// if (!empty(file_get_contents('php://input'))) {
//     $data = json_decode(file_get_contents('php://input'));

//     $nom = $data->nom;
//     $prenom = $data->prenom;
//     $email = $data->email;
//     $password = $data->password;
//     $password2 = $data->password2;
  

//     if ($password == $password2) {
//       $newUser = new User(
//         null,
//         $nom,
//         $prenom,
//         $email,
//         $password
//     );

//     $userRepository = new UserRepository();

//     $userId = $userRepository->create($newUser);

//     echo($userId);

//     }

// }


//enregistrement en base de données en "sanitisant" les champs: 

if (!empty(file_get_contents('php://input'))) {
    $data = json_decode(file_get_contents('php://input'));

    $nom = htmlspecialchars($data->nom);
    $prenom = htmlspecialchars($data->prenom);
    $emailInscription = htmlspecialchars($data->emailInscription);
    $passwordInscription = $data->passwordInscription;
    $password2Inscription = $data->password2Inscription;


//Vérification des 2 mots de passes
  if ($passwordInscription === $password2Inscription) {

    $hashedPasswordInscription = password_hash($passwordInscription, PASSWORD_DEFAULT);


//instanciation du nouvel utilisateur
    $newUser = new User(
      null,
      $nom,
      $prenom,
      $emailInscription,
      $hashedPasswordInscription
  );

  $userRepository = new UserRepository();

  $userId = $userRepository->create($newUser);

  echo json_encode($hashedPasswordInscription);

  }

  }