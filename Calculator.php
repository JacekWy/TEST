<?php

echo 'Kalkulator'.'<br>';

$a=12;
$b=44;


$c=$a+$b;
$d=$a-$b;
$e=$a*$b;


echo 'Dadawanie = '.$c.'<br>';
echo 'Odejmowanie = '.$d.'<br>';
echo 'Mnozenie = '.$e.'<br>'.'<br>';


class hero{
    public $hp=100;
    public $armor=100;

    public function hit()
    {
        $this->hp-=20;
        $this->armor-=25;
    }

    public function heal($he)
    {
        $this->hp+=$he;
        $this->armor+=$he;

    }

    public function show()
    {
        echo 'Aktualny ststus bohatera'.'<br>';
        echo 'Masz jeszcze '.$this->hp.' HP'.'<br>';
        echo 'Masz jeszcze '.$this->armor.' Armoru'.'<br>';

    }

}

    $hero1 = new hero();

    for ($i=0;$i<2;$i++) {
        $hero1->hit();
}
    $hero1->heal(100);
    $hero1->show();

    $tablica = array('Aha','chyba ty');
    for ($e=1;$e<=10;$e++)
    {
        array_push($tablica,$e);
    }


    foreach ($tablica as $item){

        echo $item.'<br>';

    }

    $myfile = fopen("file.txt", "w") or die("Unable to open file!");


    for ($t=1;$t<50;$t++){
        $txt ='User'.$t;
        fwrite($myfile, $txt);
    }

    fclose($myfile);