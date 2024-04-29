<?php 

/**
 * menghapus todo di list
 */
function removeTodoList(int $number): bool
{   
    global $todolist;

    $length = sizeof($todolist);

    
    if($number > $length) return false;
    
    // 1. Eko
    // 2. Khannedy
    // 3. Kurniawan

    // 1. Eko
    // 2. $todolist[2 + 1]
    // 3. $todolist[3 + 1]
    for($i = $number; $i < $length; $i++)
    {
        $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[$length]);

    return true;
}