<?php
	//Muutujad
	$myName = "Marko";
	$myFamilyName = "Tomik";
	$myAge = 0;
	$myBirthYear;
	$myLivedYearsList = "";
	
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober",
	"november", "detsember"];
	
	var_dump($monthNamesEt);
	echo $monthNamesEt[8];
	
	$hourNow = date("H");
	$partOfDay = "";
	
	if ($hourNow < 8){
		$partOfDay = "varane hommik";
	}	
	if ($hourNow >= 8) {
		$partOfDay = "koolipäev";
	}
	//nüüd vaatame, kas ja mida kasutaja sisestas
	//var_dump($_POST);
	if (isset($_POST["yearBirth"])){
		$myBirthYear = ($_POST["yearBirth"]);
		$myAge = date("Y") - $myBirthYear;
		
		//tekitame loendi kõigist elatud aastatest 
		$myLivedYearsList .= "<ol \n";
		for ($i = $myBirthYear; $i <= date("Y"); $i++){
				//echo $i;
				$myLivedYearsList .= "<li>" .$i ."</li> \n";		
		}	
		$myLivedYearsList .= "</ol \n";
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Marko Tomiku veebiprogrammeerimise asjad
	</title>
</head>
<body>
	<h1>MVRQUE</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	
	<?php
		echo "<p>Täna on vastik ilm!</p>";
		echo "<p>Täna on ";
		$monthIndex = date("n") - 1;     //n on kuu ilma lisanullita ees
		echo date("d.").$monthNamesEt[$monthIndex] ." " .date( "Y");
		echo ".</p>";
		echo "<p>Lehe laadimise hetkel oli kell: " .date("H:i:s") ."</p>";
		echo "Praegu on " .$partOfDay .".";
	?>
	<p>PHP käivitatakse lehe laadimisel ja siis tehakse kogu töö ära. 
	Hiljem, kui on midagi jälle vaja "kalkuleerida", siis laetakse kogu
	leht uuesti.</p>
	<?php
		echo "<p>Lehe autori täisnimi on: " .$myName ." " .$myFamilyName ."!</p>";
	?>
	<h2>Vanus</h2>
	<p>Järgnevalt palume sisestada oma sünniaasta!</p>
	<form method="POST">
		<label>Teie sünniaasta: </label>
		<input id="yearBirth" name="yearBirth" type="number" min="1900" max="2017"
		value="<?php echo $myBirthYear; ?>">
		<input id="submitYearBirth" name="submitYearBirth" type="submit" value=
		"Kinnita">
	</form>
	<p>Teie vanus on <?php echo $myAge; ?> aastat.</p>
	<?php 
		if ($myLivedYearsList != ""){
			echo "<h3>Oled elanud järgnevatel aastatel</h3> \n";
			echo $myLivedYearsList;
		}	
	?>
	<h2>Paar linki</h2>
	<p>Õpime <a href="http://www.tlu.ee" target="_blank">Tallinna Ülikoolis</a>.</p>
	<p>Minu esimene PHP leht on <a href="../esimene.php" target ="_blank">siin</a></p>
	<p>Minu sõber Krislyn teeb veebi <a href="../../../~lukskris/veebiprogrammeerimine" target="_blank">siin</a></p>
	<p>Pilte ülikoolist näeb <a href="FOTO.php" target="_blank">siin</a>.</p>
</body>
</html>












