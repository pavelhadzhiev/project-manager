<?php

    $_CONFIG = [];
    $_CONFIG['DATABASE_HOST'] = 'localhost';
    $_CONFIG['DATABASE_NAME'] = 'TestFMI';
    $_CONFIG['DATABASE_USER'] = 'root';
    $_CONFIG['DATABASE_PASS'] = '';

    $db = new PDO('mysql:host='.$_CONFIG['DATABASE_HOST'].';dbname='.$_CONFIG['DATABASE_NAME'].';charset=utf8', $_CONFIG['DATABASE_USER'], $_CONFIG['DATABASE_PASS']);

?>