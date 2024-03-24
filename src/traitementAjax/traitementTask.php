<?php


require_once __DIR__ .'/../../Models/Task.php';
require_once __DIR__ .'/../../repositories/TaskRepository.php';



if (!empty(file_get_contents('php://input'))) {
    $data = json_decode(file_get_contents('php://input'));

    $titre = $data->titre;
    $description = $data->description;
    $date = $data->date;


//instanciation d'une tache
    $newTask = new Task(
      null,
      $titre,
      $description,
      $date
  );

  $taskRepository = new TaskRepository();

  $taskId = $taskRepository->create($newTask);

  echo($taskId);

  }

  