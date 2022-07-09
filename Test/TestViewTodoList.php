<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Dava");
addTodoList("Daviar");
addTodoList("Saputra");
addTodoList("Joko");
addTodoList("Bagus");

viewShowTodoList();