<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PRACTICA 24</title>
</head>
<body>
<center>
    <header>
   <h1>NUMERO PAR O IMPAR</h1>  </header>
   
        <main>
           
            <section>
                <form action="" method="POST">
                <label for="numero">Ingresa el numero:</label><br><br>
                <input type="number" name="numero" id="numero"><br>
                <button type="submit">Calcular</button><br><br>
                </form>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                
                    $numero=$_POST['numero'];

                 if($numero % 2==0){
                    $mensaje="El numero " .$numero ." es par";
                 }else{
                    $mensaje="El numero " .$numero ." es impar";
                 }
                 echo "$mensaje<br><br>";
                }
                ?>
                  <a href="PRACT25.php">Ir a la siguiente</a><br>
                  <a href="PRACT23.php">Regresar practica</a>
          </section>
        </main>

<footer>ALE GH</footer>

</center>
</body>
</html>
