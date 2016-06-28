<?php

class ServiceEnum
{
   // const ip = '52.36.10.62/';  //servidor oficial     url: 'http://192.168.0.5:8089/com.matchfc.soccer/v1/model/player/',
//    const ip = '192.168.0.2:8089/';
    const ip = '54.149.40.134/';

    const listarClientes = 'com.matchfc.app/public/player';
    const EliminarCliente = 'com.matchfc.app/public/player/';
    const AgregarCliente = 'com.matchfc.app/public/player';
    const EditarCliente = 'com.matchfc.app/public/player/';
    const ObtenerCliente = 'com.matchfc.app/public/player/';
    
    const RegistroCliente = 'com.matchfc.app/public/registration';
    const VerificarCliente = '';
    const LoginCliente = 'com.matchfc.app/public/login';
    const InsertarDatosPersonales = '';

    function getIP()
    {
        return $this->ip;
    }

    function getUrlListarClientes()
    {
        $url = self::ip.self::listarClientes;
        return $url;
    }

    function getUrlEliminarCliente()
    {
        $url = self::ip.self::EliminarCliente;
        return $url;
    }

    function getUrlAgregarCliente()
    {
        $url = self::ip.self::AgregarCliente;
        return $url;
    }
    
    function getUrlEditarCliente()
    {
        $url = self::ip.self::EditarCliente;
        return $url;
    }

    function getUrlObtenerCliente()
    {
        $url = self::ip.self::ObtenerCliente;
        return $url;
    }
        
    
    function getUrlRegistrarCliente()
    {
        $url = self::ip.self::RegistroCliente;
        return $url;
    }
    
    function getUrlVerificarCliete()
    {
        $url = self::ip.self::VerificarCliente;
        return $url;
    }
    
    function getUrlLoginCliente()
    {
        $url = self::ip.self::LoginCliente;
        return $url;
    }
    
      function getUrlInsertarDatosPersonales()
    {
        $url = self::ip.self::InsertarDatosPersonales;
        return $url;
    }
}