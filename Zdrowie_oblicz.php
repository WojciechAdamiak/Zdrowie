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
	
	$opis_jarmuz = <<<end
	<br><br>
	$Jarmuz->Nazwa ma $Jarmuz->Kcal kcal.
	<br><br> A także nastepujace wartośći poszczególnych składnikow odzywczych w 100g produktu:<br><br>
	Białko: $Jarmuz->Bialko g. <br>
	Tłuszcz: $Jarmuz->Tluszcz g. <br>
	Węglowodany: $Jarmuz->Weglowodany g. <br>
	Błonnik: $Jarmuz->Blonnik g.<br>
	Sod: $Jarmuz->Sod mg. <br>
	Potas: $Jarmuz->Potas mg. <br>
	Wapń: $Jarmuz->Wapn mg.<br>
	Fosfor: $Jarmuz->Fosfor mg. <br>
	Magnez: $Jarmuz->Magnez mg. <br>
	Żelazo: $Jarmuz->Zelazo mg.<br>
	Witamina A: $Jarmuz->Witamina_A µg.<br>
	Beta-karoten: $Jarmuz->Beta_karoten µg. <br>
	Witamina D: $Jarmuz->Witamina_D µg.<br>
	Witamina E: $Jarmuz->Witamina_E mg.<br>
	Tiamina: $Jarmuz->Tiamina_B1 mg.<br>
	Ryboflawina: $Jarmuz->Ryboflawina_B2 mg. <br>
	Niacyna: $Jarmuz->Niacyna_B3 mg.<br>
	Witamina C: $Jarmuz->Witamina_C mg. <br><br>
	
	Legenda: 
	g - gram,
	mg - miligram,
	µg - mikrogram.
	end;
	
	$opis_dynia = <<<end
	<br><br>
	$Dynia->Nazwa ma $Dynia->Kcal kcal.
	<br><br> A także nastepujace wartośći poszczególnych składników odżywczych w 100g produktu:<br><br>
	Białko: $Dynia->Bialko g. <br>
	Tłuszcz: $Dynia->Tluszcz g. <br>
	Węglowodany: $Dynia->Weglowodany g. <br>
	Błonnik: $Dynia->Blonnik g.<br>
	Sod: $Dynia->Sod mg. <br>
	Potas: $Dynia->Potas mg. <br>
	Wapń: $Dynia->Wapn mg.<br>
	Fosfor: $Dynia->Fosfor mg. <br>
	Magnez: $Dynia->Magnez mg. <br>
	Żelazo: $Dynia->Zelazo mg.<br>
	Witamina A: $Dynia->Witamina_A µg.<br>
	Beta-karoten: $Dynia->Beta_karoten µg. <br>
	Witamina D: $Dynia->Witamina_D µg.<br>
	Witamina E: $Dynia->Witamina_E mg.<br>
	Tiamina: $Dynia->Tiamina_B1 mg.<br>
	Ryboflawina: $Dynia->Ryboflawina_B2 mg. <br>
	Niacyna: $Dynia->Niacyna_B3 mg.<br>
	Witamina C: $Dynia->Witamina_C mg. <br><br>
	
	Legenda: 
	g - gram,
	mg - miligram,
	µg - mikrogram.
	end;
	
	



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
	<br><br> A także nastepujace wartośći poszczególnych składnikow odzywczych:<br><br>
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
end;
	



echo "Wybrano $ilosc gram nastepującego produktu: ";

if ($wybor==1)
{	
	echo $oblicz_jarmuz;
}
else if ($wybor==2)
{
	echo $opis_dynia;
}
else if ($wybor==3)
{
	echo "czarnych jagód.";
}
else if ($wybor==4)
{
	echo "malin.";
}




?>