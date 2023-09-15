<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Bagus");
addTodoList("Adji");
addTodoList("Samudra");
addTodoList("Brubu");
addTodoList("83");
addTodoList("E");

showTodoList();

viewRemoveTodoList();

showTodoList();
