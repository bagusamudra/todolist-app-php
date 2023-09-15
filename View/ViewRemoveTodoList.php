<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "DELETE TODO" . PHP_EOL;

    $choose = input("No. (x to cancel)");

    if ($choose == "x") {
        echo "Cancel remove todo" . PHP_EOL;
    } else {
        $success = removeTodoList($choose);

        if ($success) {
            echo "Success remove todo no. $choose" . PHP_EOL;
        } else {
            echo "Fail remove todo no. $choose" . PHP_EOL;
        }
    }
}
