<?php
include("Conexion.php");

function  DevolverRegistroDato($consulta)
{
    $Base = new Conexion();
    $resultse = mysqli_query($Base->Conexion(), $consulta);
    return $resultse;
}

function CantidadRegistroAfectado()
{
    $Base = new Conexion();
    return mysqli_affected_rows($Base->Conexion());
}

function LlenarPantalla($consul, $lg)
{
    $reg = DevolverRegistroDato($consul);
    while ($fila = mysqli_fetch_row($reg)) {
        for ($i = 0; $i < $lg; $i++) {
            echo $fila[$i] . " | ";
        }
        echo "<br>";
    }
}

function Consulta($sq, $criterio)
{
    $B = new Conexion();
    $resul = mysqli_prepare($B->Conexion(), $sq);
    $ok = mysqli_stmt_bind_param($resul, "s", $criterio);
    $ok = mysqli_stmt_execute($resul);

    if ($ok == false) {
        echo "Error en ejecutar la consulta: ";
        echo $criterio;
    } else {
        $ok = mysqli_stmt_bind_result($resul, $doc, $nomb);
        echo "Ariticulos encontrados: ";

        while (mysqli_stmt_fetch($resul)) {
            echo $doc . " " . $nomb . " " ;
        }
        mysqli_stmt_close($resul);
    }
}

function Cabecera($cabecera)
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
function LlenarPersonas($consulta, $arreglo, $longitud)
{
    $registro = DevolverRegistroDato($consulta);

    Cabecera($arreglo);

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




function LlenarEmpleados($consulta, $longitud)
{
    $registro = DevolverRegistroDato($consulta);

    echo ("<div class='container'>"
        . "<div class='row'>"
        . "<div class='col-lg-12'>"
        . "<div class='table-responsive'>"
        . "<table class='table table-striped table-bordered' id='' style='width:100%'>"
        . "<thead>"
        . "<tr>"
        . "<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;'>N°</th>"
        . "<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;'>NOMBRE</th>"
        . "<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;'>APELLIDOS</th>"
        . "<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;'>CARGO</th>"
        . "<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;'>LOGIN</th></tr>"
        . "</thead>"
        . "<tbody>");
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
