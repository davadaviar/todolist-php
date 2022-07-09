<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";


function viewAddTodoList() {

    echo "TAMBAHKAN TODO LIST" . PHP_EOL;

    $todo = input("Todo (x untuk batalkan) ");

    if ($todo == "x") {
        echo "Batal menambahkan todo list" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
    
};