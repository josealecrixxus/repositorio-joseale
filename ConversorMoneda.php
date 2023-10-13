 <?php
class ConversorMoneda {
    private $tasaCambio;

    public function __construct($tasaCambio) {
        $this->tasaCambio = $tasaCambio;
    }

    public function calcularEnBolivares($montoDolares) {
        return $montoDolares * $this->tasaCambio;
    }
}
?>