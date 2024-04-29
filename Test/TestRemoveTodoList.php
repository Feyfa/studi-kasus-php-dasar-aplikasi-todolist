<?php 

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList('Makan');
addTodoList('Minum');
addTodoList('Main');
addTodoList('Tidur');
showTodoList();

removeTodoList(1);
showTodoList();

removeTodoList(1);
showTodoList();

$success = removeTodoList(11);
var_dump($success);

showTodoList();