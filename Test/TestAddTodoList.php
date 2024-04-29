<?php 

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList('Muhammad');
addTodoList('Jidan');
addTodoList('Ganteng');

var_dump($todolist);