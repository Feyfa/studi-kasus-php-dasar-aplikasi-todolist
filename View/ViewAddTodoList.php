<?php 

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO\n";

    $todo = input('Todo (x untuk batal)');

    if($todo === "x") {
        echo "Batal Menambahkan Todo\n";
    } else {
        addTodoList($todo);
    }
}