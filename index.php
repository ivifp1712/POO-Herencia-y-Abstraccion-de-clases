<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio 8</title>
</head>
<body>
    <h2>POO en PHP</h2>
    <?php
        echo "<h3>Clases y objetos</h3>";
        require_once("./clases/clase1.php");
        $objeto = new ClasePropiedades(); // instanciar
        echo $objeto->nombre;
        require_once("./clases/Cliente.php");
        $cliente1 = new Cliente("indra",5,true);
        echo "<br>";
        echo $cliente1->getNombre();
        //modifica el nombre del cliente
        echo "<br>";
        $cliente1->setNombre("Repsol");
        //consulta nombre de nuevo para ver el cambio
        echo "<br>";
        echo $cliente1->getNombre();
        // Actividad: POO getters / setters
        echo "<br>";
        require_once("./clases/Productos.php");
        $producto1 = new Productos(100, "camisa", 5, 7.99);
        $producto1->setPrecio(7.95);
        echo $producto1->total();
        echo $producto1->info();
        //Clase Padre
        require_once("./clases/Padre.php");
        //$padre = new Padre("nombre1", 10, 9.95);
        //echo $padre->nombre;
        // echo $padre->unidades; no puede acceder a protected
        // echo $padre->precio; no puedo accder a private
        // Clase hijo
        echo "<br>Hijo1<br>";
        require_once("./clases/Hijo.php");
        $hijo = new Hijo("barcelona");
        $hijo->saludar("Pepe"); // queda sobrescrito
        echo "<br>";
        echo $hijo->ciudad;
        echo "<br>Hijo2<br>";
        $hijo2 = new Hijo("valencia", "hijo2@gmail.com");
        echo $hijo2->info();
        echo "<br>Hija<br>";
        require_once("./clases/Hija.php");
        $hija = new Hija("hija", 10, 9.95);
        echo $hija->saludar("Maria");
        echo "<br>";
        echo $hija->verTareas("urgente");
        echo "<br>";
        echo $hija->verTareas("importante");
        echo "<br>";
        echo $hija->verTareas("asdad");
        // Sobreescritura
        // La única manera de usar un método sobreescrito es inicializar una clase que no sobrescriba el método
        $hijo->saludar("Pepe");

        echo "<br> La resta de 4 - 2 es <br>";
        Hijo::resta(4,2);
    ?>
</body>
</html>