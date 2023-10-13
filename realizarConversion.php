 <?php
require_once 'ConversorMoneda.php';

$tasaCambio = 34.90;
$conversor = new ConversorMoneda($tasaCambio);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $montoDolares = $_POST["monto"];
    if ($montoDolares == "") {
        echo "Debe introducir una cantidad";
    } else {
        $montoBolivares = $conversor->calcularEnBolivares($montoDolares);
        echo "$montoDolares dólar(es) equivale(n) a " . number_format($montoBolivares, 2) . " bolívares";
    }
}
?>