<?php

include 'Vieje.php';

echo "--------- Viaje Feliz ----------";
echo "Ingrese los datos correspondientes al viaje \n";
echo "Ingrese el codigo del viaje: \n";
$viajeCodigo= trim(fgets(STDIN));
echo "Ingrese el destino: \n";
$lugarDestino=trim(fgets(STDIN));
echo "Ingrese la cantidad máxima de asientos: \n";
$maxAsientos = trim (fgets(STDIN));
echo "Ingrese los datos de los pasajeros: \n";
$passenger= infoPasajero();

echo menu();
switch ($eleccion) {
    case '1':
        // Desea cambiar el código del viaje? //
        # code...
        break;
        
    case '2':
         // Desea cambiar el destino?  //
            # code...
            break;

    case '3':
         // Desea cambiar la cantidad de pasajeros que viajaron?   //
             # code...
            break;

    case '4':
         // Desea cambiar los datos de un pasajero?  //
             # code...
             break;

    case '5':
         // Desea cambiar la capacidad máxima de la movilidad?   //
             # code...
             break;

    case '6':
            //Ver viaje //
            # code...
            break;

    case '7':
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
        return $menu= "Elija la opción deseada:
        1- Desea cambiar el código del viaje? \n.
        2- Desea cambiar el destino? \n.
        3- Desea cambiar la cantidad de pasajeros que viajaron?/n.
        4- Desea cambiar los datos de un pasajero?\n.
        5- Desea cambiar la capacidad máxima de la movilidad?\n.
        6- Ver viaje \n.
        7- Salir \n.";



    }


    

}