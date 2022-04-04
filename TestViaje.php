<?php

include 'Viaje.php';

echo "--------- Viaje Feliz ----------\n";

// EJECUTAMOS EL PROGRAMA //

// MENU PRINCIPAL //

$finish=true;
do{
    echo menu();
    $viagiando= trim (fgets(STDIN));
    switch ($viagiando){
        
                            case '1':
                                    // 1) Cargar un viaje 
                                    echo "Ingrese los datos correspondientes al viaje \n";
                                    echo "Ingrese el codigo del viaje: \n";
                                    $viajeCodigo= strtoupper(trim (fgets(STDIN)));
                                    echo "Ingrese el destino: \n";
                                    $lugarDestino= strtoupper(trim (fgets(STDIN)));
                                    echo "Ingrese la cantidad máxima de asientos: \n";
                                    $maxAsientos = trim (fgets(STDIN));
                                    $objViaje = new Viaje($viajeCodigo,$lugarDestino,$maxAsientos);
                                    echo "Ingrese los datos de los pasajeros: \n";
                                    $persona=[];
                                    $persona=infoPasajero();
                                    $objViaje->agregarPasajero($persona);

                            break;

                            case '2':
                                // 2) Modificar un viaje
                                echo modificacionDatos($objViaje);

                            break;                            
                                

                            case '3':
                                    // 3) Ver datos de un viaje
                                    echo $objViaje;
                                    break;

                            default:
                            $finish= false;
                            break;
    };
}while($finish);




    function infoPasajero(){
       
            $pasajero=[];
            echo "Ingrese apellido: \n";
            $apellido= strtoupper(trim (fgets(STDIN)));
            echo "Ingrese nombre: \n";
            $nombre= strtoupper(trim (fgets(STDIN)));
            echo "Ingrese DNI: \n";
            $dni= strtoupper(trim (fgets(STDIN)));
            $pasajero = ['nombre'=>$nombre, 'apellido'=>$apellido, 'DNI'=>$dni];
        return $pasajero;
    }



    function menuPunto2(){
        return $menu = "Elija la opción deseada: \n.
        1- Desea cambiar el código del viaje? \n.
        2- Desea cambiar el destino? \n.
        3- Desea cambiar la cantidad de pasajeros que viajaron?/n.
        4- Desea cambiar los datos de un pasajero?\n.
        5- Desea cambiar la capacidad máxima de la movilidad?\n.
        6- Ver viaje \n.
        7- Salir \n.";



    }

    function menu(){
        do{
            echo "Ingrese una opción:\n\n
            1) Cargar un viaje \n
            2) Modificar un viaje \n
            3) Ver datos de un viaje \n
            4) Salir\n";
            $respuesta =trim(fgets(STDIN));
            if (!(is_int($respuesta)) && ($respuesta < 0 || $respuesta > 4)) {
                echo "Opcion incorrecta.\n";
            }    
    }while (((is_int($respuesta)) && ($respuesta < 0 || $respuesta < 4)));
}


///BUSCAR PASAJERO///

function buscarPasajero(){
        echo  "Nombre: \n";
        $nomb = trim(fgets(STDIN));
        echo  "Apellido:\n";
        $apellid = trim(fgets(STDIN));
        echo "DNI:\n";
        $id = trim(fgets( STDIN ));
        $gente=[];
        $gente = array("nombre"=>$nomb ,"apellido"=>$apellid,"DNI"=>$id);
        return $gente;
}

function modificacionDatos($objeto){

do{
    $salida=true;
    echo menuPunto2();
    $eleccion2= trim (fgets(STDIN));

    switch ($eleccion2){
        case '1':
            // Desea cambiar el código del viaje? //
            echo "Ingrese el nuevo código: \n";
            $newCod= strtoupper(trim (fgets(STDIN)));
            $objeto->setCodigoViaje($newCod);
            break;
            
        case '2':
            // Desea cambiar el destino?  //
            echo "Ingrese el nuevo destino: \n";
            $newDestino= strtoupper(trim (fgets(STDIN)));
            $objeto->setDestino($newDestino);
            break;
        
        case '3':
            // Desea cambiar los datos de un pasajero?  //
            echo "Ingrese los datos del pasajero a modificar: ";
            $modificarPasajero1= buscarPasajero();
            echo "Ingrese los datos nuevos del pasajero \n";
            $modificarPasajero2= buscarPasajero();
            $objeto->modificarViajeros($modificarPasajero1,$modificarPasajero2);

                break;
    
        case '4':
            // Desea cambiar la capacidad máxima de la movilidad?   //
                
            echo "Ingrese el nuevo valor para la capacidad máxima: \n";
            $capacidadNew=trim (fgets(STDIN));
            $objeto->setsetCantMaxPasajeros($capacidadNew);
            break;
    
        case '5':
            //Ver viaje //
            echo $objeto;
            break;
    
        default:
            // Salir  //
            $salida=false;
            break;
    }

}while($salida);
}