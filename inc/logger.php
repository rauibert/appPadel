<?php
/**
 * 
 * Crea un registro de errores
 *
 * @author rauibert
 */

date_default_timezone_set("Europe/Madrid");

//Configuramos el ini para que no muestre errores
ini_set('display_errors', 0);

//Los ponga en un archivo
ini_set("log_errors", 1);
error_reporting(E_ALL);

//Indicamos donde poner los errores
ini_set("error_log", "logs/".date('j-m-y').".log");

?>