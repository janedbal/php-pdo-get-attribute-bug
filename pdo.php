<?php

$pdo = new PDO('mysql:host=mysql;port=3306;dbname=foo', 'root', 'secret');
//$pdo = new PDO('pgsql:host=pgsql;port=5432;dbname=foo', 'root', 'secret');
//$pdo = new PDO('sqlite::memory:', 'root', 'secret');

$before = $pdo->query('SELECT 1')->fetchAll();
$set = $pdo->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
$after = $pdo->query('SELECT 1')->fetchAll();

var_dump($set, $before, $after);

$get = $pdo->getAttribute(PDO::ATTR_STRINGIFY_FETCHES);

var_dump($get);
