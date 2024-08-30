<?php
    include_once "test2.php";
    include_once "test2.php"; //esse segunda vez não será renderizada

    require_once "test2.php"; //Também não será renderizada