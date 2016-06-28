<?php
ob_start();
session_start();
header_remove('Location');
include_once('../servicios/ServiceEnum.php');
include_once('../servicios/ServicioGenerico.php');


global $email;
global $password;


if ( isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    
}


$listadatos = new stdClass();
$listadatos->email = $email;
$listadatos->password = $password;

$jsonToSend = json_encode($listadatos);

$enumerado = new ServiceEnum();
$url = $enumerado->getUrlLoginCliente();

$serviGeneric = new ServicioGenerico($url, $jsonToSend, 'POST');
$result = $serviGeneric->ejecutar();
echo $result;
