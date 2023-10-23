<?php
// Clase base Moneda
class Moneda {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function convertir($cantidad) {
        return $cantidad * $this->valor;
    }
}

// Clase Dolar que hereda de Moneda
class Dolar extends Moneda {
    public function __construct() {
        parent::__construct(34.88); // Valor del dólar en relación a la moneda base
    }
}

// Crear instancia de la clase Dolar
$dolar = new Dolar();

// Obtener la cantidad a convertir desde el formulario HTML
$cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;

// Realizar la conversión a dólares
$conversionDolar = $dolar->convertir($cantidad);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Monedas</title>
</head>
<body>
    <h1>Conversor de Monedas</h1>

    <form method="POST" action="">
        Cantidad de dólares <input type="number" name="cantidad" value="<?php echo $cantidad; ?>"><br><br>

        <h3>Conversión a Bolivar</h3>
        <p>Bolívares: <?php echo $conversionDolar; ?></p>

        <input type="submit" value="Convertir">
    </form>
</body>
</html>