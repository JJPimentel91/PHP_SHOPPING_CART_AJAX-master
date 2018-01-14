<?php

require 'controller/dbcontroller.php';
$conn    = Connect();

$correo   = $conn->real_escape_string($_POST['correo']);

$query   = "INSERT into tb_cform (correo) VALUES('" . $correo . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Tu mensaje se ha guardado, muchas gracias por contactarnos!";

$conn->close();

?>