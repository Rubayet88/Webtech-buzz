<!DOCTYPE html>
<html>
<head>
	<title>
		Print Page
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
		session_start();
		$_SESSION['three'] = array();
		$_SESSION['three'][] = $_POST['currecy'];
		$_SESSION['three'][] = $_POST['DateofPayment'];
		$_SESSION['three'][] = $_POST['ReceiptNo'];
	?>
    <form method="POST">
    <input type="Submit" name="stage3" Class="Buttons" value="Back" formaction="stage3.php">
    </form>
<?php
$one = array();
$onePrint = array("Applicant Applying In:", "Passport type:",  "Name:", "First Name:", "Surname:",
					"Father Name:", "Father Nationality: ", "Mother Name:", "Father Profession: ", "Mother Nationality",
				"Mother Profession: ", "Spouse Name: ", "Spouse Nationality: ", "Spouse Profession: ", "Martial Status: ",
			"Applicant Profession: ", "Country of Birth: ",  "Birth District: ","Date of Birth:", "Height:CM",
			"Height:Inch", "Religion: ", "Email: ", "Applicant Nationality:", "Citizenship Status: ", "Village Present ADD: ",
			"Road No Present: ", "District: ", "Police Station: ", "Post office: ", "Parmanent Village Add:", "Road no Parmanent",
			"Parmanent District:", "Parmanent Police  Station: ", "Parmanent Post office: ");

$i=0;

$two = array();
$twoPrint = array("Currecy:","Date Of Payment:","ReceiptNo:");
$i=0;
//echo sizeof($onePrint);
foreach($_SESSION['usr'] as $item)
{
	$temmm[] = $item;
	$i = $i+1;
	//echo $item;
    //echo "<br>";
}
$lengthoo = sizeof($temmm);
//echo $lengthoo;
for($a=0; $a<$lengthoo;$a++){
	echo "<strong>".$onePrint[$a]."</strong>";
	echo "\t";
	echo $temmm[$a];
	echo "<br>";
}
foreach($_SESSION['usr'] as $item2)
{
	$temmm2[] = $item2;
	$i = $i+1;
	//echo $item;
    //echo "<br>";
}
$lengthoo2 = sizeof($temmm2);
//echo $lengthoo;
for($b=0; $b<$lengthoo2;$b++){
	echo "<strong>".$twoPrint[$b]."</strong>";
	echo "\t";
	echo $temmm[$b];
	echo "<br>";
}
?>

</body>
</html>