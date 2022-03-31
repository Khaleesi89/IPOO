<?php

/*
La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice un array que almacene la información correspondiente a los pasajeros. Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.
Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos
*/

class Viaje{

    // ATRIBUTOS //

    // código del viaje //
    private $codigoViaje;

    //destino //
    private $destino;
    
    //cantidad máxima de pasajeros //
    private $cantMaxPasajeros;

    //pasajeros del viaje //
    private $pasajeros;


    public function __construct($codViagem , $destiny , $cantMaxPasaj , $viajeros){
        $this->codigoViaje = $codViagem;
        $this->destino = $destiny;
        $this->cantMaxPasajeros=$cantMaxPasaj;
        $this->pasajeros=$viajeros;
    }   

    // metodos //

    public function getCodigoViaje(){
        return $this->codigoViaje;
    }

    public function setCodigoViaje($codViagem){
        $this->codigoViaje=$codViagem;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function setDestino($destiny){
        $this->destino=$destiny;
    }


    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }

    public function setCantMaxPasajeros($cantMaxPasaj){
        $this->cantMaxPasajeros=$cantMaxPasaj;
    }


    public function getPasajeros(){
        return $this->pasajeros;
    }

    public function setPasajeros($viajeros){
        $this->pasajeros=$viajeros;
    }
}

