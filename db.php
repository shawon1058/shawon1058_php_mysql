<?php
    $dsn ='mysql:host=localhost;dbname=company';
    $user = 'root';
    $password = '';
    $options = [];
    $connection = new PDO($dsn, $user, $password, $options);