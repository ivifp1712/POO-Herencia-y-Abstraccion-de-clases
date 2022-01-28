<?php
class Cliente{
    private string $nombre;
    private int $compras;
    private bool $activo;


    public function __construct(string $nombre, int $compras, bool $activo)
    {
        $this->nombre = $nombre;
        $this->compras = $compras;
        $this->activo = $activo;
    }

    public function setNombre(string $nombre):void
    {       
        $this->nombre= $nombre;
    }
    public function setPedidos(string $nombre):void
    {       
        $this->nombre= $nombre;
    }
    public function setActivo(string $nombre):void
    {       
       $this->nombre= $nombre;
    }

    public function getNombre():string
    {       
        return $this->nombre;
    }
    public function getPedidos():int
    {       
        return $this->nombre;
    }
    public function getActivo():bool
    {       
        return $this->nombre;
    }
}