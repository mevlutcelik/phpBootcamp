<?php

class Sekil
{
    public $x, $y, $z;

    public function __construct($x, $y = null, $z = null)
    {
        $this->x = $x;  //Ayrıt-1 (Genişlik)
        $this->y = $y;  //Ayrıt-2 (Yükseklik)
        $this->z = $z;  //Ayrıt-3 (Hipotenüs)
    }
}

class Kare extends Sekil
{
    public function cevre()
    {
        return $this->x * 4;
    }
    public function alan()
    {
        return pow($this->x, 2);
    }
}

class Dikdortgen extends Sekil
{
    public function cevre()
    {
        return $this->x * 2 + $this->y * 2;
    }
    public function alan()
    {
        return $this->x * $this->y;
    }
}

class Ucgen extends Sekil
{
    public function cevre()
    {
        return $this->x + $this->y + $this->z;
    }
    public function alan()
    {
        $u = $this->cevre();    //Üçgenin çevresi
        return bcsqrt((($u / 2) * (($u / 2) - $this->x) * (($u / 2) - $this->y) * (($u / 2) - $this->z)), 2);   //3 ayrıtı bilinen üçgenin alan formülü
    }
}

$kare = new Kare(3);
$dikdortgen = new Dikdortgen(3, 4);
$ucgen = new Ucgen(3, 4, 5);

echo "Kare Çevresi: " . $kare->cevre() . "<br/>";
echo "Kare Alanı: " . $kare->alan() . "<br/>";
echo "Dikdörtgen Çevresi: " . $dikdortgen->cevre() . "<br/>";
echo "Dikdörtgen Alanı: " . $dikdortgen->alan() . "<br/>";
echo "Üçgen Çevresi: " . $ucgen->cevre() . "<br/>";
echo "Üçgen Alanı: " . $ucgen->alan() . "<br/>";