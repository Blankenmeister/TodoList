<?php

class Task {
    private $id;
    private $titre;
    private $description;
    private $date;

public function __construct($id, $titre, $description, $date)
{
    $this->id = $id;
    $this->titre = $titre;
    $this->description = $description;
    $this->date = $date;

}

public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->titre = $description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->titre = $date;
    }


    public function toAssociativeArray()
    {
        return [
            "id" => $this->id,
            "titre" => $this->titre,
            "description" => $this->,
            "email" => $this->email,
            "motDePasse" => $this->motDePasse,
        ];
    }


}