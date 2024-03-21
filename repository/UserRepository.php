<?php

require_once __DIR__ . "/../Models/Database.php";
require_once __DIR__ . "/../Models/User.php";

class UserRepository extends Database
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM user');

        $users = [];

        foreach ($data as $user) {
            $newUser = new User(
                $user['id'],
                $user['nom'],
                $user['prenom'],
                $user['email'],
                $user['motDePasse'],
            );

            $users[] = $newUser;
        }

        return $users;
    }

    public function findById($userId)
    {
        $request = 'SELECT * FROM user WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([':id' => $userId]);

        $data = $query->fetch();

        if ($data) {
            $searchedUser = new User(
                $data['id'],
                $data['nom'],
                $data['prenom'],
                $data['email'],
                $data['motDePasse']
            );

            return $searchedUser;
        }
    }

    public function create($newUser)
    {
        $request = 'INSERT INTO user (nom, prenom, email, motDePasse) VALUES (:nom, :prenom, :email, :motDePasse)';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'nom' => $newUser->getNom(),
            'prenom' => $newUser->getPrenom(),
            'email' => $newUser->getEmail(),
            'motDePasse' => $newUser->getMotDePasse(),
        ]);
    }

    public function update($user)
    {
        $request = 'UPDATE user SET nom = :nom, prenom = :prenom, email = :email, motDePasse = :motDePasse WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'nom' => $user->getName(),
            'prenom' => $user->getSurname(),
            'email' => $user->getEmail(),
            'motDePasse' => $user->getMotDePasse(),
            'id' => $user->getId(),
        ]);
    }

    public function delete($userId)
    {
        $request = 'DELETE FROM user WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'id' => $userId
        ]);
    }
}
