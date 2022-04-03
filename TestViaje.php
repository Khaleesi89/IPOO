<?php

include 'Vieje.php';

echo "--------- Viaje Feliz ----------";

// EJECUTAMOS EL PROGRAMA //

// MENU PRINCIPAL //

do{
    $finish= true;
    $viagiando= menu();
    switch ($viagiando) {
        
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

                            break;

                            case '2':
                                // 2) Modificar un viaje
                                    do{
                                        $salida=true;
                                        echo menuPunto2();
                                        $eleccion2= trim (fgets(STDIN));

                                        switch ($eleccion2){
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
                                                // Desea cambiar los datos de un pasajero?  //
                                                    # code...
                                                    break;
                                        
                                            case '4':
                                                // Desea cambiar la capacidad máxima de la movilidad?   //
                                                    
                                                echo "Ingrese el nuevo valor para la capacidad máxima: \n";
                                                $capacidadNew=trim (fgets(STDIN));
                                                $objViaje->setsetCantMaxPasajeros($capacidadNew);
                                                break;
                                        
                                            case '5':
                                                    //Ver viaje //
                                                    echo $objViaje;
                                                    break;
                                        
                                            case '6':
                                                    // Salir  //
                                                    $salida=false;
                                                    break;
                                        
                                            default:
                                                echo "el código ingresado no existe";
                                                break;
                                        }
                            
                                    }while($salida);

                            case '3':
                                    // 3) Ver datos de un viaje

                                    break;

                            case '4':
                                $finish= false;
                                break;
                            default:
                                echo "Ingrese un valor del 1 al 4";

                            break;
    };


}while($finish);




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
                $respuesta= true;
            }

        }while ($respuesta);
        return $pasajero;
    }



    function menuPunto2(){
        return $menu = "Elija la opción deseada:
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