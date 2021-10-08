<?php
include_once 'functions.php';

/**
 * 
 * Clase con las principales funciones de la aplicacion
 * 
 * @package Estructura de la aplicación web
 * @author Rauibert
 * 
 */

 class Tools{
     /**
      * Función de conexión de base de datos
      * @return type
      */

    function connectDB(){
        
        $conexion = mysqli_connect(SERVER, USER, PASS, DB);
        
        if($conexion){
        }else{
               echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>';
        }
        
        mysqli_query ($conexion,"SET NAMES 'utf8'");
        mysqli_set_charset($conexion, "utf8");
        
        return $conexion;
    }

    /**
     * Desconecta la base de datos a partir de la instancia que le pasamos
     * @param type $conexion
     * @return type
     */
    function disconnectDB($conexion){
        $close = mysqli_close($conexion);
                 if($close){
                 }else{
                     echo 'Ha sucedido un error inexperado en la desconexion de la base de datos<br>';
                 }   
         return $close;
     }




 }



?>