<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";


addTodoList("Dava");
addTodoList("Daviar");
addTodoList("Saputra");
addTodoList("Bagus");
addTodoList("Joko");

ShowTodoList();

viewRemoveTodoList();

