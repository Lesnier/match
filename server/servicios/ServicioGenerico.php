<?php

include_once('ServiceEnum.php');
include_once('EjecucionServicio.php');

class ServicioGenerico
{

    var $urlServicio;
    var $jsonParametros;
    var $tipollamada;
    var $resultado;
    
    function ServicioGenerico($pNombre, $pParametros, $pTipoLlamada)
    {
        $this->urlServicio = $pNombre;
        $this->jsonParametros = $pParametros;
        $this->tipollamada = $pTipoLlamada;
    }

    function ejecutar()
    {
        $ejecutorServicio = new EjecucionServicio($this->urlServicio,$this->jsonParametros,$this->tipollamada);
        $ejecutorServicio->ejecutarServicio();
        $this->resultado = $ejecutorServicio->resultado;
        return $this->resultado;
    }
}