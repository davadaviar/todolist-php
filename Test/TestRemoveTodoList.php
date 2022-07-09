<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodoList("Dava");
AddTodoList("Daviar");
AddTodoList("Saputra");
AddTodoList("Joko");
AddTodoList("Eko");

ShowTodoList();

removeTodoList(3);

ShowTodoList();