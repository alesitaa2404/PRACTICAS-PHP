<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 26</title>
</head>
<body>
    <center>
    <main>
        <h2>NUMEROS ASCENDENTES</h2>
        <form action="" method="POST">
            <label for="num1">Numero 1:</label>
            <input type="number" id="num1" name="num1" required><br><br>
            <label for="num2">Numero 2:</label>
            <input type="number" id="num2" name="num2" required><br><br>
            <label for="num3">Numero 3:</label>
            <input type="number" id="num3" name="num3" required><br><br>

            <button type="submit">Enviar</button><br><br>
        </form>
        <?php

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            if($num1 > $num2 && $num1 >= $num3){
                $mayor = $num1;
            } elseif($num2 > $num1 && $num2 >= $num3){
                $mayor = $num2;
            }else{
                $mayor = $num3;
            }
    
            echo "El numero mayor es: ". $mayor ."<br>";

            if($num1 <= $num2 && $num1 <= $num3){
                $menor = $num1;
            } elseif($num2 <= $num1 && $num2 <= $num3){
                $menor = $num2;
            }else{
                $menor = $num3;
            }
            echo "El numero menor es: ". $menor . "<br>";

            $suma = $num1 + $num2 + $num3 -($mayor-$menor);
             
            echo "El numero intermedio es: ".$suma;

        }
        }
        ?>
        <br>
        <a href="PRACT27.php">Siguiente practica</a><br>
        <a href="PRACT25.php">Regresar practica</a>
    
    </main>

    <footer>ALE GH</footer>
    </center>
</body>
</html>