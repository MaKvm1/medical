<?php

session_start();
require_once "Function.php";

    return (new Func())->deleteServ($_GET['id_serv']);
