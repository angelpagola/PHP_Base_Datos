<?php
include("Conexion.php");


function  DevolverRegistroDato($consulta)
{
    $Base = new Conexion();
    $resultset = mysqli_query($Base->Conexion(), $consulta);
    return $resultset;
}
