<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Dava");
addTodoList("Daviar");
addTodoList("Saputra");

var_dump($todoList);