<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 25/01/2019
 * Time: 16:23
 */
include "index.php";
session_start();

session_destroy();
session_unset();

header("Location: pageAcceuil.php");
