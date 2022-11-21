<?php

session_start();
require_once "Function.php";

    return (new Func())->deleteClass($_GET['id_class']);
