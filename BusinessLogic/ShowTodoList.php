<?php 

/**
 * menampilkan todo di list
 */
function showTodoList()
{
    global $todolist;

    echo "TODOLIST\n";

    foreach($todolist as $number => $value)
    {
        echo "$number. $value\n";
    }
}   