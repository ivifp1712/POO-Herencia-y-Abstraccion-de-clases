<?php
class Productos{
    private int $id;
    private string $nombre;
    private int $unidades;
    private float $precio;
    private float $iva = 1.21;
    //Constructor
    public function __construct(int $id,string $nombre, int $unidades, float $precio )
    {
        $this->precio = $precio;
        $this->id = $id;
        $this->unidades = $unidades;
        $this->nombre = $nombre;
    }
    //getters and setters
    public function setPrecio(float $precio)
    {
        $this->precio = $precio;
    }
    public function getPrecio():float
    {
        return $this->precio;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getId():int
    {
        return $this->id;
    }

    public function setUnidades(int $unidades)
    {
        $this->unidades = $unidades;
    }
    public function getUnidades():int
    {
        return $this->unidades;
    }

    public function setNombre(int $nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre():string
    {
        return $this->nombre;
    }
    // Total de la factura
    public function total():string
    {
        return "<p>El total de la factura es ".($this->unidades*$this->precio*$this->iva)."</p>";
    }
    //Funcionalidad opcional
    public function info():string
    {
        return "<p>Contiene $this->unidades de $this->nombre con id $this->id y su precio indivual es $this->precio</p>";
    }
}