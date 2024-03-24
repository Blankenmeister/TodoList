<?php

require_once __DIR__ .'/../../Models/User.php';
require_once __DIR__ .'/../../repositories/UserRepository.php';


if (!empty(file_get_contents('php://input'))) {
    $data = json_decode(file_get_contents('php://input'));

    $nom = $data->nom;
    $prenom = $data->prenom;
    $mail = $data->mail;
    $password = $data->password;
    $password2 = $data->password2;
  

    if ($password == $password2) {
      $newUser = new User(
        null,
        $nom,
        $prenom,
        $mail,
        $password
    );

    $userRepository = new UserRepository();

    $userId = $userRepository->create($newUser);

    echo('Vous êtes bien inscrit');

    

    }

}
