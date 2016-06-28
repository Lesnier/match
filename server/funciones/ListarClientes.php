<?php
ob_start();
session_start();
header_remove('Location');
include_once('../servicios/ServiceEnum.php');
include_once('../servicios/ServicioGenerico.php');

//crear enumerado para seleccionar la url del servicio que ejecutare
$enumerado = new ServiceEnum();
$url = $enumerado->getUrlListarClientes();


//Crear clase manejadora de Servicio..el true que se pasa en el constructor
// es para que el constructor sepa si habra parametros o no..
// en tal caso es un Get

$serviGeneric = new ServicioGenerico($url, null, 'GET');
$result = $serviGeneric->ejecutar();

if (headers_sent())
{
    echo("Error de redireccionamiento");
}
else
{
    echo $result;
}
ob_end_flush();
?>








