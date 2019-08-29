
<?php
$nombre = "Línea Chocman";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tilin Tilin</title>
        <style>
            label{
                color: green;
                font-family: fantasy;
            }  
           
            
            
        </style>
    </head>
    <body>
        <h1 align="center">Ingreso de Productos </h1>
        <?php
        // put your code here
        echo "<h1 align=center>" . $nombre . "</h1>";
        ?>

        <form action="pag1.php" method="post">
            <label> Codigo: </label>
            <input type="text" name="codigo"/> <br>
           

                <label style="color:red;"> Marca: </label>
                <input type="text" name="marca"/>  <br>
                    <label> Modelo: </label>
                    <input type="text" name="modelo"/>  <br>

                        <label> Precio: </label>
                        <input type="number" name="precio"/>  <br>
                      
                            <input type="submit" value="registrar"/> 


                                </form>
                                </body>
                                </html>
