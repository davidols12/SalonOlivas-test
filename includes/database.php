<?php

$db = mysqli_connect(
    'mysql-salonolivas.alwaysdata.net', 
    '360523', 
    'Culiacan_12', 
    'salonolivas_mvc'
);

$db->set_charset('utf8');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
