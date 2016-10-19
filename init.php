<?php

// auto loading classes
spl_autoload_register(function($class_name){
    require_once "classes/{$class_name}.php";
});

