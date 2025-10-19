<?php

class Empleado {
    private string $nombre;
    private float $sueldo;

    public function asignacionDatos(string $nombre, float $sueldo): void {
        $this->nombre = $nombre; 
        $this->sueldo = $sueldo; 
    }

    public function mostrarMensaje(): void {
        echo "Nombre: " . $this->nombre . "\n"; 
        if ($this->sueldo > 6000) {
            echo "Debe pagar impuestos.\n"; 
        } else {
            echo "No debe pagar impuestos.\n"; 
        }
    }
}

$empleado1 = new Empleado(); 
$empleado1->asignacionDatos("Laura",7200); 
$empleado1->mostrarMensaje(); 
?>
