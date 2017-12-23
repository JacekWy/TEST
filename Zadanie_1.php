<?php
//Wyswietla date
$date = date( "d.m.Y");
echo 'Witaj, dzisiaj jest: '.$date.'<br>';

//Sprawdza czy masz urodziny
$uro = 18.12;
echo 'Sprawdzanie czy masz urodziny'.'<br>';
if($date == $uro){
    echo "Masz dzis urodziny".'<br>';
}else{
    echo "Nie masz dzis urodzin".'<br>';
}

//Wyswietlanie dnia tygodnia
//echo 'Wyswietlanie dnia tygodnia: ';
$dzien = date("D");
switch ($dzien){
    case 'Mon':
        echo 'Poniedzialek'.'<br>';
        break;
    case 'Tue':
        echo 'Wtorek'.'<br>';
        break;
}


$licznik = 'Zapisane';
setcookie("Licznik",$licznik,time()+3400);
echo $_COOKIE['Licznik'];


$rand = mt_rand(0,2);

$tablica = array('Header','king','igr');

$losowe=$tablica[$rand];

?>

<img src="<?php echo $losowe; ?>.jpg">



