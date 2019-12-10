


<!-- index.php -->
<?php

require "functions.php";

class Taskk
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description  = $description;
        // automatically triggered on instantiation
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isCompleted()
    {
        return $this->completed;
    }
}

    

$tasks = [
        new Task('Go to the store'),
        new Task('Finish my coding task'),
        new Task('Clean the room')
    ];

    $tasks[0]->complete();


    require('view/index.view.php');

?>

<!-- START >>>>> index.view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    header{
        background: pink;
        padding: 2em;
        text-align: center;
        
    }

    li{
        list-style: none;
    }
    </style>
</head>
<body>
<header>
  
</header>

    <ul>
   <?php foreach($tasks as $task ): ?>

    <li>

        <?php if ($task->completed): ?>
        <strike><?= $task->description;?></strike>

        <?php else: ?>
       <?= $task->description;?>
        <?php endif ;?>

    </li>
    

   <?php endforeach ?> 
   </ul>
</body>
</html>

<!-- END >>>>>>> index.view.php -->



<!-- START >>>>>> function.php -->
<?php
function connectToDb()
{
    try {
        return new PDO('mysql: host=127.0.0.1 ; dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}




function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

?>

<!-- END >>>>>> function.php -->