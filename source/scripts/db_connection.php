<?php
require_once 'db_credentials.php';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_error()) {
    echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
    $connection = null;
}