<?php 

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';

$todolist[1] = "Belajar PHP Dasar";
$todolist[2] = 'Belajar PHP OOP';
$todolist[3] = "Belajar PHP Database";

showTodoList();