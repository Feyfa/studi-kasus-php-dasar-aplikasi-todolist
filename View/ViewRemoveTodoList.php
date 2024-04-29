<?php 

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO\n";

    $pilihan = input("Nomor (x untuk batal)");

    if($pilihan === "x") 
    {
        echo "Batal Menghapus Todo\n";
    } 
    else 
    {
        $success = removeTodoList((int) $pilihan);
    
        if($success) {
            echo "Sukses Menghapus Todo Nomor $pilihan\n";
        } else {
            echo "Gagal Menghapus Todo Nomor $pilihan\n";
        }
    }


}