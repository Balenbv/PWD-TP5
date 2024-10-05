<?php 
include_once 'conector/baseDatos.php';

class Persona extends baseDatos {
    private $nroDni;
    private $nombre;
    private $apellido;

    public function __construct() {
        parent::__construct();
        $this->nroDni = "";
        $this->nombre = "";
        $this->apellido = "";
 
    }

    public function setear($nroDni, $nombre, $apellido) {
        $this->setNroDni($nroDni);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
    }


    public function getNroDni() {
        return $this->nroDni;
    }

    public function setNroDni($nroDni) {
        $this->nroDni = $nroDni;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }


    

    public function cargar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni = '".$this->getNroDni()."'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res > -1) {
                if($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['NroDni'], $row['Nombre'], $row['Apellido']);
                    $resp = true;
                }
            }
        } else {
            $this->setMensajeOperacion("Persona->cargar: ".$base->getError());
        }
        return $resp;
    }

    public function insertar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona(nroDni, Nombre, Apellido) VALUES('".$this->getNroDni()."', '".$this->getNombre()."', '".$this->getApellido()."')";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Persona->insertar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->insertar: ".$base->getError());
        }
        return $resp;
    }

    public function modificar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET nombre='".$this->getNombre()."', apellido='".$this->getApellido()."' WHERE nroDni='".$this->getNroDni()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Persona->modificar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE nroDni='".$this->getNroDni()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Persona->eliminar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public function listar($parametro="") {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona";
        if ($parametro != "") {
            $sql .= ' WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res > -1) {
            if($res > 0) {
                while ($row = $base->Registro()) {
                    $obj = new Persona();
                    $obj->setear($row['NroDni'], $row['Nombre'], $row['Apellido']);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $this->setMensajeOperacion("Persona->listar: ".$base->getError());
        }
        return $arreglo;
    }

}