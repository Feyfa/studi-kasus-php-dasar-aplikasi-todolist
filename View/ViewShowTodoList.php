<?php 

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";


function viewShowTodoList()
{
    while(true)
    {
        showTodoList();
    
        echo "MENU\n";
        echo "1. Tambah Todo\n";
        echo "2. Hapus Todo\n";
        echo "x. Keluar\n";
    
        $pilihan = input('Pilih');

        if($pilihan === "1") {
            viewAddTodoList();
        } else if($pilihan === "2") {
            viewRemoveTodoList();
        } else if($pilihan === "x") {
            break;
        } else {
            echo "Pilihan Tidak Dimengerti\n";
        }
    }

    echo "Sampai Jumpa Lagi\n";
}