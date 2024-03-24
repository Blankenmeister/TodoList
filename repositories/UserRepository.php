<?php

require_once __DIR__ . "/../Models/Database.php";
require_once __DIR__ . "/../Models/User.php";

class UserRepository extends Database
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM todo_user');

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
        $request = 'SELECT * FROM todo_user WHERE id = :id';

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
        $request = 'INSERT INTO todo_user (nom, prenom, email, motDePasse) VALUES (:nom, :prenom, :email, :motDePasse)';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'nom' => $newUser->getNom(),
            'prenom' => $newUser->getPrenom(),
            'email' => $newUser->getEmail(),
            'motDePasse' => $newUser->getMotDePasse(),
        ]);
        return $this->getDb()->lastInsertId();
    }

    public function update($user)
    {
        $request = 'UPDATE todo_user SET nom = :nom, prenom = :prenom, email = :email, motDePasse = :motDePasse WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'email' => $user->getEmail(),
            'motDePasse' => $user->getMotDePasse(),
            'id' => $user->getId(),
        ]);
    }

    public function delete($userId)
    {
        $request = 'DELETE FROM todo_user WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'id' => $userId
        ]);
    }
}
