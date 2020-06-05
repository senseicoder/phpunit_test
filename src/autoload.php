<?php

spl_autoload_register(function ($class_name) {
	if($class_name != 'tests') include $class_name . '.php';
});