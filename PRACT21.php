<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 21</title>
</head>
<body>
<center>
        
                
                <header>  <br><br><h1 >NUMERO MAYOR DE 3</h1></header>
                <main>
            <section>
        <form action="" method= "POST">

            <label for= "Num1" > Primer numero: </label>
            <input type="text" id="Num1" name="Num1"><br><br>

            <label for= "Num2" > Segundo numero: </label>
            <input type="text" id="Num2" name="Num2"><br><br>

            <label for= "Num3" > Tercer numero: </label>
            <input type="text" id="Num3" name="Num3"><br><br>
           
            <button type= "submit">Operar</button><br><br>
          
            
            <?php
// Solicitar los tres números
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['Num1']) && (['Num2']) &&(['Num3'])){
        $num1 =$_POST['Num1'];
        $num2 =$_POST['Num2'];
        $num3 =$_POST['Num3'];

// Determinar el mayor
if ($num1 > $num2 && $num1 > $num3) {
    $mayor = $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    $mayor = $num2;
} else {
    $mayor = $num3;
}

// Imprimir el resultado
echo "El número mayor es: $mayor\n";
    }
}
?>

            </section>
            <a href="PRACT22.php">Ir a la siguiente</a> <br><br>
        </main>

        <footer>
           ALE GH
        </footer>
        </center>
    
</body>
</html>