<?php
class HabitacionPaquete {
    public $idHabitacion;
    public $idPaquete;

    public function __construct($idHabitacion = null, $idPaquete = null) {
        $this->idHabitacion = $idHabitacion;
        $this->idPaquete = $idPaquete;
    }
}

?>