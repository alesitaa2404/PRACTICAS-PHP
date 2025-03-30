<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 27</title>
</head>
<body>
    <center>
        <header><h1> Ecuaciones Primer Grado</h1></header>

<main>
    <section>
<form action="" method="POST">
    <label for="a">Ingrese valor A</label>
    <input type="number" id="a" name="a"> <br><br>
    <label for="b">Ingrese valor B</label>
    <input type="number" id="b" name="b"> <br><br>
    <button type="submit">CALCULAR</button> <br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST['a'];
    $b=$_POST['b'];

    if ($a == 0) {
        echo "No es una ecuación de primer grado.";
    } else {
        $x = -$b / $a;
        echo "El valor de x es: " . $x;
    }

}
?>

    </section>
</main>

<footer>ALE GH</footer>
<a href="PRACT28.php">Siguiente Practica</a><br>
<a href="PRACT26.php">Regresar practica</a>
    </center>
</body>
</html>