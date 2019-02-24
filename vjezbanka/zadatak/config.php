<?php 

    function load($classes){
        require_once "classes/" . $classes . ".class.php";
    }

    spl_autoload_register("load");

