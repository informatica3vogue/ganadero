<?php

include '../conexion.php';

$id= explode("=",base64_decode($_SERVER[QUERY_STRING]))[1];
$sql="delete from vegetaciones where id=$id";

$conex->query($sql);

header("location:$_SERVER[HTTP_REFERER]");