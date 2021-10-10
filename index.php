<?php

require_once "inc/config.php";
require_once "controller/ADMcontroller.php";
require_once "model/MODmodel.php";

$app = new ADMcontroller();

require_once "restrita.php";

    if (!isset($_GET['acao'])) {
        header("Location: login.php");

    }else if($_GET['acao'] == 'lista') {
        require_once "restrita.php";
        $app->all();

    }else if($_GET['acao'] == 'create') {
        require_once "restrita.php";
        $app->create();

    }else if ($_GET['acao']== 'update') {
        require_once "restrita.php";
        $app->update();

    }else if ($_GET['acao']== 'delete') {
        require_once "restrita.php";
        $app->delete();

    }else if ($_GET['acao']== 'read') {
        require_once "restrita.php";
        $app->info();
    }
