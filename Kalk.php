<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkultor</title>
</head>
<body>
<h1>Kalkulator</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Liczba 1: <input type="text" name="Liczba_a" required><br><br>
    Liczba 2: <input type="text" name="Liczba_b" required><br><br>
    Wybierz: <select name="wybor">
        <option name="Dodawanie">Dodawanie</option>
        <option name="Odejmowanie">Odejmowanie</option>
        <option name="Mnozenie">Mnozenie</option>
        <option name="Dzielenie">Dzielenie</option>
    </select><br><br>
    <input type="submit" name="submit" value="Wynik"><br><br>

</form>
<?php
if(isset($_POST['submit'])) {

    $a = $_POST['Liczba_a'];
    $b = $_POST['Liczba_b'];
    $w = $_POST['wybor'];

    switch ($w){
        case 'Dodawanie':
            $cd = $a + $b;
            echo 'Wynik : '.$a.' + '.$b.' = '. $cd . '<br>';
            break;
        case 'Odejmowanie':
            $co = $a - $b;
            echo 'Wynik : '.$a.' - '.$b.' = '. $co . '<br>';
            break;
        case 'Mnozenie':
            $cm = $a * $b;
            echo 'Wynik : '.$a.' * '.$b.' = '. $cm . '<br>';
            break;
        case 'Dzielenie':
            if($b == 0){
                echo "Nie wolno dzielic przez zero";

            }else {
                $cf = $a / $b;
                echo 'Wynik : ' . $a . ' / ' . $b . ' = ' . $cf . '<br>';
                break;
            }
    }

}
?>

</body>
</html>