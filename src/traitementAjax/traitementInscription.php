<?php

// traiter les champs et ouvrir une session pour un nouvel utilisateur
 
if (!empty(file_get_contents('php://input'))) {
    $data = json_decode(file_get_contents('php://input'));
    var_dump('coucou');
}

header('Content-Type: application/json');
echo json_encode(""); 


