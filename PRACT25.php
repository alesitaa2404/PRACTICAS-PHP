<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 25</title>
</head>
<body>
  <center>
    <header><h1>DOBLE O TRIPLE</h1></header>
<main>
    <section>
      <form action="" method="POST">
    <label for="numero">Ingresa Un Numero: </label><br><br>
    <input type="numer" name="numero" id="numero"><br><br>
    <button type="submit">Calcular</button><br><br>
      </form>  
    <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numero=$_POST['numero'];
        if($numero % 2==0){
            $resultado=$numero * 3;
            $mensaje="El numero es par, su triple es: ";
        }else{
            $resultado= $numero * 2;
            $mensaje="El numero es impar, su doble es: ";
        }
        echo "$mensaje $resultado";
     }
    ?>
    <br>
      <a href="PRACT26.php">Siguiente practica</a><br>
      <a href="PRACT24.php">Regresar practica</a>
      </section>
      

</main>
<footer>ALE GH </footer>
</center> 
</body>
</html>