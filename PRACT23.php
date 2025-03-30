<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 23</title>
</head>
<body>
<center>
    <header>
   
        <h1>MULTIPLO DE 3 Y 5</h1>
    </header>
    <main>
         
        <section>
            <form action="" method = "POST">
                <label for="num">Ingresa el numero: </label><br>
                <input type="number" id="num" name="num"><br>
                <button type ="submit">Calcular</button>
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $numero = $_POST['num'];
        if ($numero % 3 == 0 && $numero % 5 == 0) {
            $mensaje = "El numero " . $numero . " es multiplo de 5";
        }else{
            $mensaje = "El numero " . $numero . " no es multiplo de 5";
        }
        echo $mensaje;
    }
        ?><br><br>
        <a href="PRACT24.php">Siguiente practica</a><br>
        <a href="PRACT22.php">Regresar practica</a>

        </section>
        
    </main>
    <footer>ALE GH</footer>
    </center>
</body>
</html>