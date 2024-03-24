<?php

require_once __DIR__ . "/../Models/Database.php";
require_once __DIR__ . "/../Models/Task.php";

class TaskRepository extends Database{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM todo_task');

        $tasks = [];

        foreach ($data as $task) {
            $newTask = new Task(
                $task['id'],
                $task['titre'],
                $task['description'],
                $task['date'],
            );

            $tasks[] = $newTask;
        }

        return $tasks;
    }


public function findById($taskId)
{
    $request = 'SELECT * FROM todo_task WHERE id = :id';

    $query = $this->getDb()->prepare($request);

    $query->execute([':id' => $taskId]);

    $data = $query->fetch();

    if ($data) {
        $searchedTask = new Task(
            $data['id'],
            $data['Titre'],
            $data['description'],
            $data['date'],
        );

        return $searchedTask;
    }
}

public function create($newTask)
{
    $request = 'INSERT INTO todo_task (titre, description, date) VALUES (:titre, :description, :date)';

    $query = $this->getDb()->prepare($request);

    $query->execute([
        'titre' => $newTask->getTitre(),
        'description' => $newTask->getDescription(),
        'date' => $newTask->getDate(),
    ]);
    return $this->getDb()->lastInsertId();
}

public function update($task)
{
    $request = 'UPDATE todo_task SET titre = :titre, description = :description, date = :date WHERE id = :id';

    $query = $this->getDb()->prepare($request);

    $query->execute([
        'titre' => $task->getTitre(),
        'description' => $task->getDescription(),
        'date' => $task->getDate(),
    ]);
}

public function delete($taskId)
{
    $request = 'DELETE FROM todo_task WHERE id = :id';

    $query = $this->getDb()->prepare($request);

    $query->execute([
        'id' => $taskId
    ]);
}

}