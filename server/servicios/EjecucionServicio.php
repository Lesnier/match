<?php

class EjecucionServicio extends ServicioGenerico
{

    function EjecucionServicio($pUrlService, $pJsonParametros, $pTipoLlamada)
    {

        $this->urlServicio = $pUrlService;
        $this->jsonParametros = $pJsonParametros;
        $this->tipollamada = $pTipoLlamada;

    }


    function ejecutarServicio()    //Esta funcion se llamara en la clase Servicio Generico
    {
        if($this->tipollamada == "POST")
        {
            self::procesarEjecucionPOST($this->urlServicio, $this->jsonParametros);
        }
        if($this->tipollamada == "PUT")
        {
            self::procesarEjecucionPUT($this->urlServicio, $this->jsonParametros);
        }
        if($this->tipollamada == "GET")
        {
            self::procesarEjecucionGET($this->urlServicio);
        }
        if($this->tipollamada == "DELETE")
        {
            self::procesarEjecucionDELETE($this->urlServicio);
        }
    }


    function procesarEjecucionPOST($pUrlService, $pJsonParametros)
    {
        $ch = curl_init($pUrlService);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $pJsonParametros);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($pJsonParametros))
        );
        $this->resultado = curl_exec($ch);
        curl_close($ch);
    }

    function procesarEjecucionPUT($pUrlService, $pJsonParametros) 
    {
        $ch = curl_init($pUrlService);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $pJsonParametros);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($pJsonParametros))
        );
        $this->resultado = curl_exec($ch);
        curl_close($ch);
    }


    function procesarEjecucionGET($pUrlService)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $pUrlService,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'));
        $this->resultado = curl_exec($curl);
        curl_close($curl);
    }

    function procesarEjecucionDELETE($pUrlService)
    {
        $ch = curl_init($pUrlService);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_POSTFIELDS, null);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json')
        );
        $this->resultado = curl_exec($ch);
        curl_close($ch);
    }
}