<?php

// traiter les champs et ouvrir une session pour un nouvel utilisateur
 
if (!empty(file_get_contents('php://input'))) {
    $data = json_decode(file_get_contents('php://input'));
    var_dump('coucou');
}

header('Content-Type: application/json');
echo json_encode("good"); 



require_once __DIR__. "/../../../repositories/UserRepository.php";

if (!empty(file_get_contents('php://input'))) {

    $json=json_decode(file_get_contents('php://input'));



    // Sanitize all my data
    $sanitizedObj = [
        "nom" => htmlspecialchars($json->nom),
        "prenom" => htmlspecialchars($json->prenom),
        "email" => filter_var($json->email, FILTER_SANITIZE_EMAIL),
        "password" => password_hash($json->password, PASSWORD_DEFAULT)
    ];

    //instance Users
    $user = new Users(
        $sanitizedObj["nom"],
        $sanitizedObj["prenom"],
        $sanitizedObj["email"],
        $sanitizedObj["password"]
    );

    // Create user
    $userRepo = new UsersRepository();
    $creationNewUser = $userRepo->create($user);




}