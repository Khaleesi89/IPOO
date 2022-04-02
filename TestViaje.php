<?php

include 'Vieje.php';

echo "--------- Viaje Feliz ----------";
echo "Ingrese los datos correspondientes al viaje \n";
echo "Ingrese el codigo del viaje: \n";
$viajeCodigo= strtoupper(trim (fgets(STDIN)));
echo "Ingrese el destino: \n";
$lugarDestino= strtoupper(trim (fgets(STDIN)));
echo "Ingrese la cantidad máxima de asientos: \n";
$maxAsientos = strtoupper(trim (fgets(STDIN)));
$objViaje = new Viaje($viajeCodigo,$lugarDestino,$maxAsientos);


echo menu();
switch ($eleccion) {
    case '1':
        // Desea cambiar el código del viaje? //
        echo "Ingrese el nuevo código: \n";
        $newCod= strtoupper(trim (fgets(STDIN)));
        $objViaje->setCodigoViaje($newCod);
        break;
        
    case '2':
         // Desea cambiar el destino?  //
        echo "Ingrese el nuevo destino: \n";
        $newDestino= strtoupper(trim (fgets(STDIN)));
        $objViaje->setDestino($newDestino);
        break;

    case '3':
         // Desea cambiar la cantidad de pasajeros que viajaron?   //
        # code...
        break;

    case '4':
        // Desea ingresar los datos de un pasajero?  //
        echo "Ingrese los datos de los pasajeros: \n";
        if ()
        $passenger= infoPasajero();
            break;

    case '5':
         // Desea cambiar los datos de un pasajero?  //
             # code...
             break;

    case '6':
         // Desea cambiar la capacidad máxima de la movilidad?   //
             # code...
             break;

    case '7':
            //Ver viaje //
            # code...
            break;

    case '8':
            // Salir  //
            # code...
            break;

    default:
        echo "el código ingresado no existe";
        break;



    function infoPasajero(){
        do{
            $respuesta= false;
            $pasajero=[];
            echo "Ingrese apellido: \n";
            $apellido= strtoupper(trim (fgets(STDIN)));
            echo "Ingrese nombre: \n";
            $nombre= strtoupper(trim (fgets(STDIN)));
            echo "Ingrese DNI: \n";
            $dni= strtoupper(trim (fgets(STDIN)));
            $pasajero = ['nombre'=>$nombre, 'apellido'=>$apellido, 'DNI'=>$dni];
            echo "Desea ingresar un nuevo pasajero? S - N \n";
            $opcionElegible= strtoupper(trim (fgets(STDIN)));
            if($opcionElegible=="S"){

            }
            return $pasajero;

        }
     
    }



    function menu(){
        return $menu = "Elija la opción deseada:
        1- Desea cambiar el código del viaje? \n.
        2- Desea cambiar el destino? \n.
        3- Desea cambiar la cantidad de pasajeros que viajaron?/n.
        4-Desea ingresar los datos de un pasajero?
        5- Desea cambiar los datos de un pasajero?\n.
        6- Desea cambiar la capacidad máxima de la movilidad?\n.
        7- Ver viaje \n.
        8- Salir \n.";



    }


    

}