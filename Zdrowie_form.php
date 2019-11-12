<!DOCTYPE html>

<form action="Zdrowie_oblicz.php" method="post">

	<label>Proszę wprowadzić ilość w gramach:</label>
	<input type="number" name="ilosc"  maxlength="5" step="1" />
	<br><br>
	
	<div class="row">
	
	<fieldset>
	<legend> Proszę wybrać produkt: </legend>

	<div><label><input type="radio" name="wybor" value="1" checked> Jarmuż</label></div>
	<div><label><input type="radio" name="wybor" value="2">Dynia</label></div>
	<div><label><input type="radio" name="wybor" value="3">Czarne jagody</label></div>
	<div><label><input type="radio" name="wybor" value="4">Maliny</label></div>
	
	</fieldset>
	
	</div>
	<input type="submit" value="Oblicz" />
</form>




<?php


	/*
	<label>Produkt:</label>
		<select name="rozwin">
			<option value="jar">Jarmuż</option>
			<option value="dyn">Dynia</option>
			<option value="jag">Czarne jagody</option>
			<option selected value="mal">Maliny</option>
		</select>

	
	*/
?>

</html>