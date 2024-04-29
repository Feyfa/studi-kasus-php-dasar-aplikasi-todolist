<?php 

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList('Makan');
addTodoList('Minum');
addTodoList('Mandi');
addTodoList('Mukbang');
addTodoList("Muhamamad");
addTodoList('Jidan');

showTodoList();

viewRemoveTodoList();

showTodoList();