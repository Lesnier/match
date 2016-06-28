<?php
ob_start();
session_start();
header_remove('Location');
include_once('../servicios/ServiceEnum.php');
include_once('../servicios/ServicioGenerico.php');

global $idcliente;
global $coordenadas;
global $esclintepago;
global $referencia;

if (isset($_POST['id_cliente']) && isset($_POST['coordenadas']) && isset($_POST['es_cliente_pago']) && isset($_POST['referencia'])) {
    $idcliente = $_POST['id_cliente'];
    $coordenadas = $_POST['coordenadas'];
    $esclintepago = $_POST['es_cliente_pago'];
    $referencia = $_POST['referencia'];
}

//crear json que sera enviado al servicio

$listadatos = new stdClass();
$listadatos->idcliente = $idcliente;
$listadatos->coordenadas = $coordenadas;
$listadatos->clientePago = $esclintepago;
$listadatos->referencia = $referencia;

$jsonToSend = json_encode($listadatos);

//crear enumerado para seleccionar la url del servicio que ejecutare

$enumerado = new ServiceEnum();
$url = $enumerado->getUrlPedirTaxi();

//Crear clase manejadora de Servicio..el true que se pasa en el constructor es para que el constructor sea si habra parametros o no.. en tal caso es un Get

$serviGeneric = new ServicioGenerico($url, $jsonToSend, true);
$result = $serviGeneric->ejecutar();
if (headers_sent()) {
    echo("Error de redireccionamiento");
} else {
    $result = str_replace('null', '', $result);
    echo $result;
}
ob_end_flush();
?>








