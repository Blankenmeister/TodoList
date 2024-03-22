<?php

require_once __DIR__ . '/../../Models/User.php';
require_once __DIR__ . '/../../repository/UserRepository.php';

if (
    !empty($_POST) &&
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['email']) &&
    isset($_POST['motDePasse'])
) {
    $name = htmlspecialchars($_POST['nom']);
    $surname = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $department = htmlspecialchars($_POST['motDePasse']);

    $newUser = new User(
        null,
        $nom,
        $prenom,
        $email,
        $motDePasse
    );

    $userRepository = new UserRepository();

    $userRepository->create($newUser);

    
}
