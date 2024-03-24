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
  $email = htmlspecialchars($data->email);
  $password = $data->password;
  $password2 = $data->password2;



  if ($password === $password2) {

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $newUser = new User(
      null,
      $nom,
      $prenom,
      $email,
      $hashedPassword
  );

  $userRepository = new UserRepository();

  $userId = $userRepository->create($newUser);

  echo json_encode($hashedPassword);

  }

  }