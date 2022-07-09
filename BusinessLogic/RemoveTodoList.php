<?php

function removeTodoList(int $number) : bool 

{

    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }

    // Untuk menggeser angka 
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    // Untuk menghapus angka terakhir
    unset($todoList[sizeof($todoList)]);

    return true;
};