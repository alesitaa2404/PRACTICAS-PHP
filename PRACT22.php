<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 22</title>
</head>
<body>
    <center>
        <main>
            <section>
               
            <br><br><h1>VOCAL O NO?</h1>
        <form action="" method= "POST">

            <label for= "caracter" > Ingrese la vocal: </label>
            <input type="text" id="caracter" name="caracter" maxlength="1"><br><br>

            <button type="submit">Resultado</button><br><br>
          
</form>

<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $char = $_POST['caracter'];

    if($char == 'a' || $char == 'A'){
        $resultado = 'Es una vocal';
    }else if($char == 'e' || $char == 'E'){
       $resultado = 'Es una vocal';
    }else if($char == 'i' || $char == 'I'){
        $resultado = 'Es una vocal';
    }else if($char == 'o' || $char == 'O'){
        $resultado = 'Es una vocal';
    }else if($char == 'u' || $char == 'U'){
       $resultado = 'Es una vocal';
    }else{
        $resultado = 'No es vocal'; 
    } 
     echo " El caracter que ingresaste $resultado";
 } 
?>
         <br>  
        <a href="PRACT23.php">Siguiente practica</a><br>
        <a href="PRACT21.php">Regresar practica</a>
        
        </section>
        </main>
        <footer>
            ALE GH
        </footer>
        </center>
</body>
</html>