<?php
class Persona{
public $nombre;
public $apellido;
public $edad;

public function __construct($nombre, $apellido, $edad){
$this->nombre = $nombre;
$this->apellido = $apellido;
$this->edad = $edad;
}

public function showMe(){
return "Nombre: ".$this->nombre.", Apellido: \n".$this->apellido.", Edad: \n".$this->edad;
}
}

$persona1 = new Persona("Samahí","Hernandez","Rosas");
print $persona1->showMe();
