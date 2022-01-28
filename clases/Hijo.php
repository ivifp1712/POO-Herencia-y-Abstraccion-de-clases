<?php
class Hijo extends Padre{
    public $ciudad = "madrid";
    private $email = "";
    // se nombra constructor0 y constructor1 para hacer una sobrecarga de constructores
    public function __construct0(string $ciudad)
    {
        $this->ciudad=$ciudad;
    }
    public function __construct1(string $ciudad, string $email)
    {
        $this->ciudad=$ciudad;
        $this->email=$email;
    }
    // Mostrar información
    public function info():string
    {
        return "Vive en $this->ciudad con el email $this->email";
    }
    // Método sobrescrito saludar
    public function saludar(string $nombre)
    {
        echo "Es un método de la clase Hijo.";
    }
    // Con la palabra reservada static conseguimos llamar a un metodo sin necesidad de instanciar la clase Hijo
    public static function resta(float $r1, float $r2)
    {
        echo $r1-$r2;
    }
}