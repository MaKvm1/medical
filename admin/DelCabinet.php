<?php

session_start();
require_once "Function.php";

    return (new Func())->deleteCabinet($_GET['id_cabinet']);
