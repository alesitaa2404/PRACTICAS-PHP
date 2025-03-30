<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 29</title>
</head>
<body>
    <center>
    <main>
<header>
   
         <h1>Ingresa un numero</h1>
         
        </header>
        <main>
            <section>

           <form action="" method= "POST">
          
                <label for="numero"> INGRESE UN NUMERO ENTERO:</label>
                <input type="number" id="numero" name="numero" required><br><br>
           
                <button type="submit">Calcular</button> <br><br><br>

                <a href="PRACT30.php">Siguiente practica</a><br>
        <a href="PRACT28.php">Regresar practica</a>
         
</form>

                <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $numero = $_POST["numero"];

                if($numero> 0){
                    $resultado = $numero * 2;
                    echo"<p> El doble del numero es : $resultado </p> ";
                } elseif ($numero < 0){
                    $resultado = $numero * 3;
                    echo"<p> El triple del numero es : $resultado </p> ";
                }else{
                    echo "<p> El numero es neutro, el resultado es 0</p>";
                   
                }

               
            }
?>

        </section>
    
       
        </main>
        
<footer>ALE GH</footer>
</center>
</body>
</html>