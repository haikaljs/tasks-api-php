<?php 

    require_once('Task.php');

    try{
        $task = new Task(1, "Title 1", "Description 1", "01/01/2023 12:00", "N");
        header("Content-type: application/json;charset=UTF-8");
        echo json_encode($task->returnTaskAsArray());

    }catch(TaskException $ex){
        echo "Error: " .$ex->getMessage();
    }

?>