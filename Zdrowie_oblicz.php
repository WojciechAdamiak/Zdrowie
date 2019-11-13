<?php


$ilosc = $_POST['ilosc'];
$wybor = $_POST['wybor'];


	abstract class Wartosci
{		
		public $Nazwa;
		public $Kcal;
		public $Bialko;
		public $Tluszcz;
		public $Weglowodany;
		public $Blonnik;
		public $Sod;
		public $Potas;
		public $Wapn;
		public $Fosfor;
		public $Magnez;
		public $Zelazo;
		public $Witamina_A;
		public $Beta_karoten;
		public $Witamina_D;
		public $Witamina_E;
		public $Tiamina_B1;
		public $Ryboflawina_B2;
		public $Niacyna_B3;
		public $Witamina_C;	
}	
	
	class Warzywa extends Wartosci
{
	
}
	
$Jarmuz = new Warzywa();
	$Jarmuz->Nazwa = "Jarmuż";
	$Jarmuz->Kcal = 36;
	$Jarmuz->Bialko = 3.3;
	$Jarmuz->Tluszcz = 0.7;
	$Jarmuz->Weglowodany= 6.1;
	$Jarmuz->Blonnik= 3.8;
	$Jarmuz->Sod= 12;
	$Jarmuz->Potas= 530;
	$Jarmuz->Wapn= 157;
	$Jarmuz->Fosfor= 56;
	$Jarmuz->Magnez= 30;
	$Jarmuz->Zelazo= 1.7;
	$Jarmuz->Witamina_A= 896;
	$Jarmuz->Beta_karoten= 5350;
	$Jarmuz->Witamina_D= 0;
	$Jarmuz->Witamina_E= 1.7;
	$Jarmuz->Tiamina_B1= 0.11;
	$Jarmuz->Ryboflawina_B2= 0.2;
	$Jarmuz->Niacyna_B3= 1.6;
	$Jarmuz->Witamina_C= 120;
	
$Dynia = new Warzywa();
	$Dynia->Nazwa = "Dynia";
	$Dynia->Kcal = 33;
	$Dynia->Bialko = 1.3;
	$Dynia->Tluszcz = 0.3;
	$Dynia->Weglowodany= 7.7;
	$Dynia->Blonnik= 2.8;
	$Dynia->Sod= 4;
	$Dynia->Potas= 278;
	$Dynia->Wapn= 66;
	$Dynia->Fosfor= 43;
	$Dynia->Magnez= 14;
	$Dynia->Zelazo= 0.8;
	$Dynia->Witamina_A= 496;
	$Dynia->Beta_karoten= 2974;
	$Dynia->Witamina_D= 0;
	$Dynia->Witamina_E= 1.03;
	$Dynia->Tiamina_B1= 0.05;
	$Dynia->Ryboflawina_B2= 0.12;
	$Dynia->Niacyna_B3= 0.5;
	$Dynia->Witamina_C= 8;
	
	$Jarmuz_kcal = $Jarmuz->Kcal*$ilosc/100;
	$Jarmuz_bialko = $Jarmuz->Bialko*$ilosc/100;
	$Jarmuz_tluszcz = $Jarmuz->Tluszcz*$ilosc/100;
	$Jarmuz_weglowodany = $Jarmuz->Weglowodany*$ilosc/100;
	$Jarmuz_blonnik = $Jarmuz->Blonnik*$ilosc/100;
	$Jarmuz_sod = $Jarmuz->Sod*$ilosc/100;
	$Jarmuz_potas = $Jarmuz->Potas*$ilosc/100;
	$Jarmuz_wapn = $Jarmuz->Wapn*$ilosc/100;
	$Jarmuz_fosfor = $Jarmuz->Fosfor*$ilosc/100;
	$Jarmuz_magnez = $Jarmuz->Magnez*$ilosc/100;
	$Jarmuz_zelazo = $Jarmuz->Zelazo*$ilosc/100;
	$Jarmuz_witamina_a = $Jarmuz->Witamina_A*$ilosc/100;
	$Jarmuz_beta_karoten = $Jarmuz->Beta_karoten*$ilosc/100;
	$Jarmuz_witamina_d = $Jarmuz->Witamina_D*$ilosc/100;
	$Jarmuz_witamina_e = $Jarmuz->Witamina_E*$ilosc/100;
	$Jarmuz_tiamina_b1 = $Jarmuz->Tiamina_B1*$ilosc/100;
	$Jarmuz_ryboflawina_b2 = $Jarmuz->Ryboflawina_B2*$ilosc/100;
	$Jarmuz_niacyna_b3 = $Jarmuz->Niacyna_B3*$ilosc/100;
	$Jarmuz_witamina_c = $Jarmuz->Witamina_C*$ilosc/100;
	
$oblicz_jarmuz = <<<end
	<br><br>
	$Jarmuz->Nazwa ma $Jarmuz_kcal kcal w $ilosc gramach produktu.
	<br><br> A także nastepujace wartości poszczególnych składników odżywczych:<br><br>
	Białko: $Jarmuz_bialko g. <br>
	Tłuszcz: $Jarmuz_tluszcz g. <br>
	Węglowodany: $Jarmuz_weglowodany g. <br>
	Błonnik: $Jarmuz_blonnik g.<br>
	Sod: $Jarmuz_sod mg. <br>
	Potas: $Jarmuz_potas mg. <br>
	Wapń: $Jarmuz_wapn mg.<br>
	Fosfor: $Jarmuz_fosfor mg. <br>
	Magnez: $Jarmuz_magnez mg. <br>
	Żelazo: $Jarmuz_zelazo mg.<br>
	Witamina A: $Jarmuz_witamina_a µg.<br>
	Beta-karoten: $Jarmuz_beta_karoten µg. <br>
	Witamina D: $Jarmuz_witamina_d µg.<br>
	Witamina E: $Jarmuz_witamina_e mg.<br>
	Tiamina: $Jarmuz_tiamina_b1 mg.<br>
	Ryboflawina: $Jarmuz_ryboflawina_b2 mg. <br>
	Niacyna: $Jarmuz_niacyna_b3 mg.<br>
	Witamina C: $Jarmuz_witamina_c mg. <br><br>
	
	Legenda: 
	g - gram,
	mg - miligram,
	µg - mikrogram.
	
end;
	
	$Dynia_kcal = $Dynia->Kcal*$ilosc/100;
	$Dynia_bialko = $Dynia->Bialko*$ilosc/100;
	$Dynia_tluszcz = $Dynia->Tluszcz*$ilosc/100;
	$Dynia_weglowodany = $Dynia->Weglowodany*$ilosc/100;
	$Dynia_blonnik = $Dynia->Blonnik*$ilosc/100;
	$Dynia_sod = $Dynia->Sod*$ilosc/100;
	$Dynia_potas = $Dynia->Potas*$ilosc/100;
	$Dynia_wapn = $Dynia->Wapn*$ilosc/100;
	$Dynia_fosfor = $Dynia->Fosfor*$ilosc/100;
	$Dynia_magnez = $Dynia->Magnez*$ilosc/100;
	$Dynia_zelazo = $Dynia->Zelazo*$ilosc/100;
	$Dynia_witamina_a = $Dynia->Witamina_A*$ilosc/100;
	$Dynia_beta_karoten = $Dynia->Beta_karoten*$ilosc/100;
	$Dynia_witamina_d = $Dynia->Witamina_D*$ilosc/100;
	$Dynia_witamina_e = $Dynia->Witamina_E*$ilosc/100;
	$Dynia_tiamina_b1 = $Dynia->Tiamina_B1*$ilosc/100;
	$Dynia_ryboflawina_b2 = $Dynia->Ryboflawina_B2*$ilosc/100;
	$Dynia_niacyna_b3 = $Dynia->Niacyna_B3*$ilosc/100;
	$Dynia_witamina_c = $Dynia->Witamina_C*$ilosc/100;
	
$oblicz_dynia = <<<end
	<br><br>
	$Dynia->Nazwa ma $Dynia_kcal kcal w $ilosc gramach produktu.
	<br><br> A także nastepujace wartości poszczególnych składników odżywczych:<br><br>
	Białko: $Dynia_bialko g. <br>
	Tłuszcz: $Dynia_tluszcz g. <br>
	Węglowodany: $Dynia_weglowodany g. <br>
	Błonnik: $Dynia_blonnik g.<br>
	Sod: $Dynia_sod mg. <br>
	Potas: $Dynia_potas mg. <br>
	Wapń: $Dynia_wapn mg.<br>
	Fosfor: $Dynia_fosfor mg. <br>
	Magnez: $Dynia_magnez mg. <br>
	Żelazo: $Dynia_zelazo mg.<br>
	Witamina A: $Dynia_witamina_a µg.<br>
	Beta-karoten: $Dynia_beta_karoten µg. <br>
	Witamina D: $Dynia_witamina_d µg.<br>
	Witamina E: $Dynia_witamina_e mg.<br>
	Tiamina: $Dynia_tiamina_b1 mg.<br>
	Ryboflawina: $Dynia_ryboflawina_b2 mg. <br>
	Niacyna: $Dynia_niacyna_b3 mg.<br>
	Witamina C: $Dynia_witamina_c mg. <br><br>
	
	Legenda: 
	g - gram,
	mg - miligram,
	µg - mikrogram.
	
end;
	
	class Owoce extends Wartosci
	{
		
	}

$Czarne_jagody = new Owoce();
	$Czarne_jagody->Nazwa = "Czarne jagody";
	$Czarne_jagody->Kcal = 51;
	$Czarne_jagody->Bialko = 0.8;
	$Czarne_jagody->Tluszcz = 0.6;
	$Czarne_jagody->Weglowodany= 12.2;
	$Czarne_jagody->Blonnik= 3.2;
	$Czarne_jagody->Sod= 1;
	$Czarne_jagody->Potas= 62;
	$Czarne_jagody->Wapn= 15;
	$Czarne_jagody->Fosfor= 14;
	$Czarne_jagody->Magnez= 2;
	$Czarne_jagody->Zelazo= 0.7;
	$Czarne_jagody->Witamina_A= 6;
	$Czarne_jagody->Beta_karoten= 34;
	$Czarne_jagody->Witamina_D= 0;
	$Czarne_jagody->Witamina_E= 1.88;
	$Czarne_jagody->Tiamina_B1= 0.018;
	$Czarne_jagody->Ryboflawina_B2= 0.018;
	$Czarne_jagody->Niacyna_B3= 0.28;
	$Czarne_jagody->Witamina_C= 14.7;
	
$Maliny = new Owoce();
	$Maliny->Nazwa = "Maliny";
	$Maliny->Kcal = 42;
	$Maliny->Bialko = 1.3;
	$Maliny->Tluszcz = 0.3;
	$Maliny->Weglowodany= 12;
	$Maliny->Blonnik= 6.7;
	$Maliny->Sod= 2;
	$Maliny->Potas= 203;
	$Maliny->Wapn= 35;
	$Maliny->Fosfor= 33;
	$Maliny->Magnez= 20;
	$Maliny->Zelazo= 0.8;
	$Maliny->Witamina_A= 3;
	$Maliny->Beta_karoten= 16;
	$Maliny->Witamina_D= 0;
	$Maliny->Witamina_E= 0.48;
	$Maliny->Tiamina_B1= 0.018;
	$Maliny->Ryboflawina_B2= 0.062;
	$Maliny->Niacyna_B3= 0.26;
	$Maliny->Witamina_C= 31.4;
	
	$Czarne_jagody_kcal = $Czarne_jagody->Kcal*$ilosc/100;
	$Czarne_jagody_bialko = $Czarne_jagody->Bialko*$ilosc/100;
	$Czarne_jagody_tluszcz = $Czarne_jagody->Tluszcz*$ilosc/100;
	$Czarne_jagody_weglowodany = $Czarne_jagody->Weglowodany*$ilosc/100;
	$Czarne_jagody_blonnik = $Czarne_jagody->Blonnik*$ilosc/100;
	$Czarne_jagody_sod = $Czarne_jagody->Sod*$ilosc/100;
	$Czarne_jagody_potas = $Czarne_jagody->Potas*$ilosc/100;
	$Czarne_jagody_wapn = $Czarne_jagody->Wapn*$ilosc/100;
	$Czarne_jagody_fosfor = $Czarne_jagody->Fosfor*$ilosc/100;
	$Czarne_jagody_magnez = $Czarne_jagody->Magnez*$ilosc/100;
	$Czarne_jagody_zelazo = $Czarne_jagody->Zelazo*$ilosc/100;
	$Czarne_jagody_witamina_a = $Czarne_jagody->Witamina_A*$ilosc/100;
	$Czarne_jagody_beta_karoten = $Czarne_jagody->Beta_karoten*$ilosc/100;
	$Czarne_jagody_witamina_d = $Czarne_jagody->Witamina_D*$ilosc/100;
	$Czarne_jagody_witamina_e = $Czarne_jagody->Witamina_E*$ilosc/100;
	$Czarne_jagody_tiamina_b1 = $Czarne_jagody->Tiamina_B1*$ilosc/100;
	$Czarne_jagody_ryboflawina_b2 = $Czarne_jagody->Ryboflawina_B2*$ilosc/100;
	$Czarne_jagody_niacyna_b3 = $Czarne_jagody->Niacyna_B3*$ilosc/100;
	$Czarne_jagody_witamina_c = $Czarne_jagody->Witamina_C*$ilosc/100;
	
$oblicz_czarne_jagody = <<<end
	<br><br>
	$Czarne_jagody->Nazwa ma $Czarne_jagody_kcal kcal w $ilosc gramach produktu.
	<br><br> A także nastepujace wartości poszczególnych składników odżywczych:<br><br>
	Białko: $Czarne_jagody_bialko g. <br>
	Tłuszcz: $Czarne_jagody_tluszcz g. <br>
	Węglowodany: $Czarne_jagody_weglowodany g. <br>
	Błonnik: $Czarne_jagody_blonnik g.<br>
	Sod: $Czarne_jagody_sod mg. <br>
	Potas: $Czarne_jagody_potas mg. <br>
	Wapń: $Czarne_jagody_wapn mg.<br>
	Fosfor: $Czarne_jagody_fosfor mg. <br>
	Magnez: $Czarne_jagody_magnez mg. <br>
	Żelazo: $Czarne_jagody_zelazo mg.<br>
	Witamina A: $Czarne_jagody_witamina_a µg.<br>
	Beta-karoten: $Czarne_jagody_beta_karoten µg. <br>
	Witamina D: $Czarne_jagody_witamina_d µg.<br>
	Witamina E: $Czarne_jagody_witamina_e mg.<br>
	Tiamina: $Czarne_jagody_tiamina_b1 mg.<br>
	Ryboflawina: $Czarne_jagody_ryboflawina_b2 mg. <br>
	Niacyna: $Czarne_jagody_niacyna_b3 mg.<br>
	Witamina C: $Czarne_jagody_witamina_c mg. <br><br>
	
	Legenda: 
	g - gram,
	mg - miligram,
	µg - mikrogram.
	
end;

$Maliny_kcal = $Maliny->Kcal*$ilosc/100;
	$Maliny_bialko = $Maliny->Bialko*$ilosc/100;
	$Maliny_tluszcz = $Maliny->Tluszcz*$ilosc/100;
	$Maliny_weglowodany = $Maliny->Weglowodany*$ilosc/100;
	$Maliny_blonnik = $Maliny->Blonnik*$ilosc/100;
	$Maliny_sod = $Maliny->Sod*$ilosc/100;
	$Maliny_potas = $Maliny->Potas*$ilosc/100;
	$Maliny_wapn = $Maliny->Wapn*$ilosc/100;
	$Maliny_fosfor = $Maliny->Fosfor*$ilosc/100;
	$Maliny_magnez = $Maliny->Magnez*$ilosc/100;
	$Maliny_zelazo = $Maliny->Zelazo*$ilosc/100;
	$Maliny_witamina_a = $Maliny->Witamina_A*$ilosc/100;
	$Maliny_beta_karoten = $Maliny->Beta_karoten*$ilosc/100;
	$Maliny_witamina_d = $Maliny->Witamina_D*$ilosc/100;
	$Maliny_witamina_e = $Maliny->Witamina_E*$ilosc/100;
	$Maliny_tiamina_b1 = $Maliny->Tiamina_B1*$ilosc/100;
	$Maliny_ryboflawina_b2 = $Maliny->Ryboflawina_B2*$ilosc/100;
	$Maliny_niacyna_b3 = $Maliny->Niacyna_B3*$ilosc/100;
	$Maliny_witamina_c = $Maliny->Witamina_C*$ilosc/100;
	
$oblicz_maliny = <<<end
	<br><br>
	$Maliny->Nazwa ma $Maliny_kcal kcal w $ilosc gramach produktu.
	<br><br> A także nastepujace wartości poszczególnych składników odżywczych:<br><br>
	Białko: $Maliny_bialko g. <br>
	Tłuszcz: $Maliny_tluszcz g. <br>
	Węglowodany: $Maliny_weglowodany g. <br>
	Błonnik: $Maliny_blonnik g.<br>
	Sod: $Maliny_sod mg. <br>
	Potas: $Maliny_potas mg. <br>
	Wapń: $Maliny_wapn mg.<br>
	Fosfor: $Maliny_fosfor mg. <br>
	Magnez: $Maliny_magnez mg. <br>
	Żelazo: $Maliny_zelazo mg.<br>
	Witamina A: $Maliny_witamina_a µg.<br>
	Beta-karoten: $Maliny_beta_karoten µg. <br>
	Witamina D: $Maliny_witamina_d µg.<br>
	Witamina E: $Maliny_witamina_e mg.<br>
	Tiamina: $Maliny_tiamina_b1 mg.<br>
	Ryboflawina: $Maliny_ryboflawina_b2 mg. <br>
	Niacyna: $Maliny_niacyna_b3 mg.<br>
	Witamina C: $Maliny_witamina_c mg. <br><br>
	
	Legenda: 
	g - gram,
	mg - miligram,
	µg - mikrogram.
	
end;



echo "Wybrano $ilosc gram nastepującego produktu: ";

if ($wybor==1)
{	
	echo $oblicz_jarmuz;
}
else if ($wybor==2)
{
	echo $oblicz_dynia;
}
else if ($wybor==3)
{
	echo $oblicz_czarne_jagody;
}
else if ($wybor==4)
{
	echo $oblicz_maliny;
}




?>