<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Bagus");
addTodoList("Adji");
addTodoList("Samudra");

var_dump($todoList);
