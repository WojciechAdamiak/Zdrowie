<?php
$wzrost = $_POST ['wzrost'];
$waga = $_POST ['waga'];
$bmi = ($waga)/(pow($wzrost,2));
echo  "Twoje BMI wynosi $bmi.<br>"; 
if ($bmi < "16"){
    echo "Jesteś wygłodzony.";
}elseif ($bmi < "16" ){
    echo "Jesteś wychudzony.";
}elseif ("17.01" < $bmi < "18.5"){
    echo "Masz niedowagę.";
}elseif ("18.51" < $bmi < "25"){
    echo "Twoja waga jest prawidłowa.";
}elseif ("25.01" < $bmi < "30"){
    echo "Masz nadwagę.";
}elseif("30.01" < $bmi < "35"){
    echo "Masz otyłość I stopnia.";
}elseif("35.01" < $bmi < "40"){
    echo "Masz otyłość II stopnia.";
}else{
    echo "Masz otyłość III stopnia";
}
?>

