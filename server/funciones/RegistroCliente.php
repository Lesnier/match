<?php
ob_start();
session_start();
header_remove('Location');
include_once('../servicios/ServiceEnum.php');
include_once('../servicios/ServicioGenerico.php');

global $name;
global $last_name;
global $email;
global $password;


if (isset($_POST['name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password'])) {
    
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
}


$listadatos = new stdClass();
$listadatos->name = $name;
$listadatos->last_name = $last_name;
$listadatos->email = $email;
$listadatos->password = $password;

$jsonToSend = json_encode($listadatos);

$enumerado = new ServiceEnum();
$url = $enumerado->getUrlRegistrarCliente();

$serviGeneric = new ServicioGenerico($url, $jsonToSend, 'POST');
$result = $serviGeneric->ejecutar();
echo $result;
