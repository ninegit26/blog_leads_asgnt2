<?php

$host = 'beabla-blog.mysql.uhserver.com';
$user = 'beaba_admin';
$pass = 'beaba132@@';
$db = 'beabla_blog';

$connection = new MySQLi($host, $user, $pass, $db);

if ($connection->connect_error) {
    die('Erro na conexão com o DB: ' . $connection->connect_error);
}