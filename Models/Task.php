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

    public function getDate(): string
  {
    return $this->date->format('Y-m-d');
  }

  public function setDate(string|DateTime $date)
  {
    
      $this->date = $date;
   
  }


    public function toAssociativeArray()
    {
        return [
            "id" => $this->id,
            "titre" => $this->titre,
            "description" => $this->description,
            "date" => $this->date,
        ];
    }


}