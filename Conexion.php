<?php
class Conexion
{
    public static $host, $usuario, $psw, $db;

    function Conexion()
    {
        $host = "localhost";
        $usuario = "root";
        $psw = "";
        $db = "libros_docente";

        //Conexión con procedimientos
        $conec = mysqli_connect($host, $usuario, $psw);

        if (mysqli_connect_errno()) {
            echo "Error en Conexión";
            exit();
        } else {
            mysqli_select_db($conec, $db) or die("No existe la Base de Datos"); //Con que base de datos trabajao
            mysqli_set_charset($conec, "utf8"); //Corrige el tema de los asentos
        }
        return $conec;
    }
}
