<?php

$wybor = $_POST['wybor'];

class Produkty
{		
	public $nazwa;
	public $kcal;
	public $bialko;
	public $tluszcz;
	public $weglowodany;
	public $blonnik;
	public $sod;
	public $potas;
	public $wapn;
	public $fosfor;
	public $magnez;
	public $zelazo;
	public $wit_a;
	public $beta_karoten;
	public $wit_d;
	public $wit_e;
	public $wit_b1;
	public $wit_b2;
	public $wit_b3;
	public $wit_c;	
	
	function __construct($jaka_nazwa, $ile_kcal, $ile_bialko, $ile_tluszcz, $ile_weglowodany, $ile_blonnik, $ile_sod, $ile_potas, $ile_wapn, $ile_fosfor, $ile_magnez, $ile_zelazo, $ile_wit_a, $ile_beta_karoten, $ile_wit_d, $ile_wit_e, $ile_wit_b1, $ile_wit_b2, $ile_wit_b3, $ile_wit_c)
	{	
	$this->nazwa = $jaka_nazwa;	 
	$this->kcal = $ile_kcal;
	$this->bialko = $ile_bialko;
	$this->tluszcz = $ile_tluszcz;
	$this->weglowodany = $ile_weglowodany;
	$this->blonnik = $ile_blonnik;
	$this->sod = $ile_sod;
	$this->potas = $ile_potas;
	$this->wapn = $ile_wapn;
	$this->fosfor = $ile_fosfor;
	$this->magnez = $ile_magnez;
	$this->zelazo = $ile_zelazo;
	$this->wit_a = $ile_wit_a;
	$this->beta_karoten = $ile_beta_karoten;
	$this->wit_d = $ile_wit_d;
	$this->wit_e = $ile_wit_e;
	$this->wit_b1 = $ile_wit_b1;
	$this->wit_b2 = $ile_wit_b2;
	$this->wit_b3 = $ile_wit_b3;
	$this->wit_c = $ile_wit_c;	
	}
	
	function oblicz()
	{	
	$ilosc = $_POST['ilosc'];
	
	$oblicz_kcal = $this->kcal*$ilosc/100;
	$oblicz_bialko = $this->bialko*$ilosc/100;
	$oblicz_tluszcz = $this->tluszcz*$ilosc/100;
	$oblicz_weglowodany = $this->weglowodany*$ilosc/100;
	$oblicz_blonnik = $this->blonnik*$ilosc/100;
	$oblicz_sod = $this->sod*$ilosc/100;
	$oblicz_potas = $this->potas*$ilosc/100;
	$oblicz_wapn = $this->wapn*$ilosc/100;
	$oblicz_fosfor = $this->fosfor*$ilosc/100;
	$oblicz_magnez = $this->magnez*$ilosc/100;
	$oblicz_zelazo = $this->zelazo*$ilosc/100;
	$oblicz_wit_a = $this->wit_a*$ilosc/100;
	$oblicz_beta_karoten = $this->beta_karoten*$ilosc/100;
	$oblicz_wit_d = $this->wit_d*$ilosc/100;
	$oblicz_wit_e = $this->wit_e*$ilosc/100;
	$oblicz_wit_b1 = $this->wit_b1*$ilosc/100;
	$oblicz_wit_b2 = $this->wit_b2*$ilosc/100;
	$oblicz_wit_b3 = $this->wit_b3*$ilosc/100;
	$oblicz_wit_c = $this->wit_c*$ilosc/100;	
	
	echo "Wybrano produkt $this->nazwa który w $ilosc gramach produktu zawiera $oblicz_kcal kcal";
	echo "<br><br> A także nastepujace wartości poszczególnych składników odżywczych:<br><br>";
	echo "Białko: $oblicz_bialko g. <br>";
	echo "Tłuszcz: $oblicz_tluszcz g. <br>";
	echo "Węglowodany: $oblicz_weglowodany g. <br>";
	echo "Błonnik: $oblicz_blonnik g.<br>";
	echo "Sod: $oblicz_sod mg. <br>";
	echo "Potas: $oblicz_potas mg. <br>";
	echo "Wapń: $oblicz_wapn mg.<br>";
	echo "Fosfor: $oblicz_fosfor mg. <br>";
	echo "Magnez: $oblicz_magnez mg. <br>";
	echo "Żelazo: $oblicz_zelazo mg.<br>";
	echo "Witamina A: $oblicz_wit_a µg.<br>";
	echo "Beta-karoten: $oblicz_beta_karoten µg. <br>";
	echo "Witamina D: $oblicz_wit_d µg.<br>";
	echo "Witamina E: $oblicz_wit_e mg.<br>";
	echo "Witamina B1: $oblicz_wit_b1 mg.<br>";
	echo "Witamina B2: $oblicz_wit_b2 mg. <br>";
	echo "Witamina B3: $oblicz_wit_b3 mg.<br>";
	echo "Witamina C: $oblicz_wit_c mg. <br><br>";
	
	}
		
}	
 
$jarmuz = new Produkty("jarmuż", 36, 3.3, 0.7, 6.1, 3.8, 12, 530, 157, 56, 30, 1.7, 896, 5350, 0, 1.7, 0.11, 0.2, 1.6, 120);
$dynia = new Produkty("dynia", 33, 1.3, 0.3, 7.7, 2.8, 4, 278, 66, 43, 14, 0.8, 496, 2974, 0, 1.03, 0.05, 0.12, 0.5, 8);
$czarne_jagody = new Produkty("czarne jagody", 51, 0.8, 0.6, 12.2, 3.2, 1, 62, 15, 14, 2, 0.7, 6, 34, 0, 1.88, 0.018, 0.018, 0.28, 14.7);
$maliny = new Produkty("maliny", 42, 1.3, 0.3, 12, 6.7, 2, 203, 35, 33, 20, 0.8, 3, 16, 0, 0.48, 0.018, 0.062, 0.26, 31.4);
$ogorek = new Produkty("ogórek", 14, 0.7, 0.1, 2.9, 0.5, 11, 125, 15, 23, 8, 0.2, 28, 170, 0, 0.16, 0.029, 0.038, 0.19, 8);

if ($wybor==1)
{	
	$jarmuz->oblicz();
}
elseif ($wybor==2)
{
	echo $dynia->oblicz();
}
elseif ($wybor==3)
{
	echo $czarne_jagody->oblicz();
}
elseif ($wybor==4)
{
	echo $maliny->oblicz();
}
elseif ($wybor==5)
{
	echo $ogorek->oblicz();
}
	
?>
