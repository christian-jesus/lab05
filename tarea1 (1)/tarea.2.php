<?php
// Declaración de variables
$precio_actual = 10;
$cantidad_unidades = 5;

// Cálculo del nuevo precio con descuento del 5%
$nuevo_precio = $precio_actual - ($precio_actual * 0.05);

// Cálculo del importe de la compra sin descuento
$importe_sin_descuento = $nuevo_precio * $cantidad_unidades;

// Cálculo del importe del descuento del 7%
$importe_descuento = $importe_sin_descuento * 0.07;

// Cálculo del importe a pagar con descuento del 7%
$importe_con_descuento = $importe_sin_descuento - $importe_descuento;

// Cálculo del número de caramelos obsequiados
$num_caramelos = $cantidad_unidades * 2;

// Impresión de resultados
echo "El nuevo precio de la gaseosa es: $" . $nuevo_precio . " por 3 litros." . PHP_EOL;
echo "El importe de la compra sin descuento es: $" . $importe_sin_descuento . "." . PHP_EOL;
echo "El importe del descuento es: $" . $importe_descuento . "." . PHP_EOL;
echo "El importe a pagar con descuento es: $" . $importe_con_descuento . "." . PHP_EOL;
echo "Se obsequian " . $num_caramelos . " caramelos." . PHP_EOL;
?>
