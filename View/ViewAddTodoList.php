<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "ADD TODO " . PHP_EOL;

    $todo = input("Todo (x for cancel)");

    if ($todo == "x") {
        //cancel
        echo  "Cancel Add Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
