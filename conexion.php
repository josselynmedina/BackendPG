<?php

     function connection(){
          $serverName = "DESKTOP-F3PHG0S"; 
          $connectionInfo = array( "Database"=>"ProcesoLogistico");
          $conn = sqlsrv_connect( $serverName, $connectionInfo);

               if( $conn ) {
                    echo "Conexión establecida";
               }else{
                    echo "Conexión no se pudo establecer";
                    die( print_r( sqlsrv_errors(), true));
               }
     }
?>