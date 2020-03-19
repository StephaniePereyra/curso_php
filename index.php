<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stephanie Pereyra Curso PHP 2020</title>
</head>
<body>
    <?php 
        /*Ejercicios*/

                
                //1. Inserte la parte faltante del código a continuación para generar "Hello World".
                
                echo "Hello Word";               
          
            /* include ("nav.php");
               include_once ("nav.php");
            */     
                
            
                //2. Crea una variable texto y asignnale un valor.
            $variableDeTexto = "";    // inicializo variable
            $variableDeTexto = "Monitor Panavox";    // asigno valor

               // 3. Obtenga la longitud de la cadena Hello Word.
                echo strlen("Hello Word"."\n");
                
               // 4. Imprima Hello Word si $a es mayor que $b:
                $a = 50;
                $b = 10;
                if($a > $b)
                  echo "Hello World";
                
                
               // 5. Cree una instrucción de cambio que muestre "Hola" si $color es "rojo" y "Bienvenido" si $color es "verde".
                switch ($color) {
                    case "red":
                        echo "Hello";
                        break;
                    case "green":
                        echo "Welcome";
                    break;
                }
            
                //6. Imprima el valor de $i, siempre que $i sea inferior a 6.
                $i = 1; 
                while ($i <6) {
                    echo $i;
                    $i++;
                }
                
                //7. Crea un bucle que vaya desde 0 a 9.
                for($ i = 0; $ i <10; i++) {
                    echo $ i;
                }
            
                //8. Utilice la función correcta para mostrar la cantidad de elementos del arreglo.
                $fruits = array("Apple", "Banana", "Orange");
                echo count($array)."\n";
                

                //9. Muestre el segundo elemento del arreglo.
                $fruits = array("Apple", "Banana", "Orange");
                echo $array[1]."\n";
                                
                //10. Cree una matriz asociativa que contenga la edad de Peter, Ben y Joe.
                $age = array("Peter" => "35", "Ben" =>"37", "Joe"=>"43");
                
                
                //11. Use el método correcto para ordenar la matriz $colors alfabéticamente.
                $colors = array("red", "green", "blue", "yellow"); 
                echo sort($array);
                
                
                //12. Crea dos variables y sumarlas y muestra el resultado.
                $varA = 5.6878;
                $varB = 9.186734;
                echo $varA + $varB;

                //13. Muestre cómo incrustar código PHP en un documento HTML y cómo imprimir desde PHP.
                /*
                <?php 
                    echo "Imprimiendo desde php";
                ?>
                */

                //14. Imprima una tabla de multiplicar utilizando html y php.
                echo "<h1><b>" . "Tabla del 9 a continuación" . "</h1>" . "\n";
                for($i=1; $i<=10;$i++){
                    $tablaDel9 = 9;

                    echo "Valor" . $i*$tablaDel9 . "\n";
                }

                /*
                15. Elabore una página HTML con un formulario para la inserción de productos.
                Tenga en cuenta que un producto tiene los siguientes elementos asociados:
                Nombre
                Precio
                Fecha de creación
                Descripción
                Marca
                Modelo 
                */
    ?>
            <h3>Producto datos de entrada</h3>
            <form action="index.php" method="post">   
                <p>Nombre: <input type="text" name="nombre" /></p>
                <p>Precio: <input type="text" name="precio" /></p>
                <p>Fecha creación: <input type="text" name="fechaCreacion" /></p>
                <p>Descripción: <input type="text" name="descripcion" /></p>
                <p>Marca: <input type="text" name="marca" /></p>
                <p>Modelo: <input type="text" name="modelo" /></p>
                <p><input type="submit" /></p>
            </form>


            <h3>Producto datos salida (procesados por PHP) </h3>

            Nombre del producto: <?php echo $_POST["nombre"]; ?><br>
            Precio: <?php echo $_POST["precio"]; ?><br>
            Fecha de creación: <?php echo $_POST["fechaCreacion"]; ?><br>
            Descripción: <?php echo $_POST["descripcion"]; ?><br>
            Marca: <?php echo $_POST["marca"]; ?><br>
            Modelo: <?php echo $_POST["modelo"]; ?><br>
</body>
</html>
