<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";


function viewRemoveTodoList() {

    echo "MENGHAPUS TODO LIST" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo list" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo list nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo list nomor $pilihan" . PHP_EOL;
        }
    }
}