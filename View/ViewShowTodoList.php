<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
function viewShowTodoList()
{
    while (true){
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Delete Todo" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        $choose = input("Choose");

        if ($choose == "1"){
            viewAddTodoList();
        }elseif ($choose == "2"){
            viewRemoveTodoList();
        }elseif ($choose == "x"){
            // exit
            break;
        }else {
            echo "Choose Error" . PHP_EOL;
        }
    }

    echo "Good Bye !" . PHP_EOL;
}
