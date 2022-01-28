<?php
// con abstract indicamos que la clase no se puede instanciar
abstract class Padre{
    public $nombre;
    protected $unidades;
    private $precio;
    public function __construct2(string $nombre, int $unidades, float $precio )
    {
        $this->nombre = $nombre;
        $this->unidades = $unidades;
        $this->precio = $precio;
    }
    // a la función saludar se le pasa un argumento(nombre), que utilizara la funcion
    // aunque la clase Padre no podrá usar el método mientras sea una clase abstracta
    public function saludar(string $nombre)
    {
        echo "<i>hola, me llamo $nombre</i>";
    }
    // método en Padre llamado verTareas
    public function verTareas(string $grado):string
    {
        if ($grado == "urgente"){
            return "Las tareas urgentes son: ";
        }elseif ($grado == "importante"){
            return "Las tareas importantes son: ";
        }else{
            return "No hay tareas.";
        }
    }
}