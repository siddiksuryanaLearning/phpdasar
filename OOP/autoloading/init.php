<?php
    spl_autoload_register(function ($class) {
    include 'pekerjaan/' . $class . '.php';
    });
?>