<?php
include("Conexion.php");


function  DevolverRegistroDato($consulta)
{
    $Base = new Conexion();
    $resultset = mysqli_query($Base->Conexion(), $consulta);
    return $resultset;
}

function CabeceraTabla($cabecera)
{
    echo ("<div class='container'>"
        . "<div class='row'>"
        . "<div class='col-lg-11'>"
        . "<div class='table-responsive'>"
        . "<table class='table table-striped table-bordered' id='' style='width:100%'>"
        . "<thead>"
        . "<tr>");
    for ($i = 0; $i < count($cabecera); $i++) {
        echo  "<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;'>$cabecera[$i]</th>";
    }
    echo ("</thead>"
        . "<tbody>");
}

function LenarTabla($consulta, $arreglo, $longitud)
{
    $registro = DevolverRegistroDato($consulta);
    CabeceraTabla($arreglo);

    while ($fila = mysqli_fetch_row($registro)) {
        echo "<tr>";
        for ($i = 0; $i < $longitud; $i++) {
            echo ("<td style='text-align:center; font-size:14px;'>" . $fila[$i] . "</td>");
        }
        echo "</tr>";
    }
    echo ("</tbody>"
        . "</table>" . "</div>" . "</div>"
        . "</div>" . "</div>");
}
