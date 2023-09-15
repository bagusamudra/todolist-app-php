<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Bagus");
addTodoList("Adji");
addTodoList("Samudra");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
