<?php
    $jsonFilePath = 'data/todoList.json';

    $jsonContent = file_get_contents($jsonFilePath);
    
    $todoList = json_decode($jsonContent, true);
    
    if (isset($_POST['todoItem'])) {
        $newTask = array(
            'text' => $_POST['todoItem'],
            'done' => false
        );
    
        $todoList[] = $newTask;
    
        $updatedJsonContent = json_encode($todoList, JSON_PRETTY_PRINT);
    
        file_put_contents($jsonFilePath, $updatedJsonContent);
    }
    
    header('Content-Type: application/json');
    
    echo json_encode($todoList);
?>