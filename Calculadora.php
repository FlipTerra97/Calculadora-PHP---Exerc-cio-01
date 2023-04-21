<?php
    $nu1 = 0;
    $nu2 = 0;
    $resultado = 0;
    $calc = 'somar';
    $calc2 = 'subtrair';
    $calc3 = 'multiplicar';
    $calc4 = 'divisao';

    if(isset($_POST['+'])){
        $nu1 = (int)$_POST['nu1'];
        $nu2 = (int)$_POST['nu2'];
        $calc = $_POST['+'];

        $resultado = $n1 + $n2;
    }

    if(isset($_POST['-'])){
        $nu1 = (int)$_POST['nu1'];
        $nu2 = (int)$_POST['nu2'];
        $calc2 = $_POST['-'];

        $resultado = $n1 - $n2;
    }

    if(isset($_POST['*'])){
        $nu1 = (int)$_POST['n1'];
        $nu2 = (int)$_POST['n2'];
        $calc3 = $_POST['*'];

        $resultado = $n1 * $n2;
    }

    if(isset($_POST['/'])){
        $nu1 = (int)$_POST['n1'];
        $nu2 = (int)$_POST['n2'];
        $calc4 = $_POST['/'];

        $resultado = $n1 / $n2;
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CalculadoraPHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post">
        Primeiro numero <br>
        <input type="number" name="nu1" value= <?= $nu1 ?> required > <br>
        Segundo numero  <br>
        <input type="number" name="nu2" value= <?= $nu2 ?> required  > <br><br>
        <input type="submit" value="Somar" name="+">
        
        <input type="submit" value="Subtrair" name="-">
        <br><br>
        <input type="submit" value="Multiplicar" name="*">
        
        <input type="submit" value="Dividir" name="/">
        <br><br>
        
        <p>O valor é : <?= $resultado ?> </p>
    </form>

</body>
</html>