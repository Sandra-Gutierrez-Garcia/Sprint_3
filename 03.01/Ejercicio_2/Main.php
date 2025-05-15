<?php require_once "Usuario.php";


$billetera = new Wallet();
$llavesCOche= new vehicleKeys();
$usuario = new Usuario([$billetera,$llavesCOche]);
echo $usuario->ITake();


?>