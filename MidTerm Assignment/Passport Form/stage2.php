<?php

	if(isset($_POST['Name'])){
		if(empty($_POST['Name'])
		||empty($_POST['FirstName'])
		||empty($_POST['Surname'])
		||empty($_POST['Fathername'])
		||empty($_POST['Mothername'])
		||empty($_POST['Spousename'])
		||empty($_POST['DOB'])
		||empty($_POST['cm'])
		||empty($_POST['inch'])
		||empty($_POST['Email'])
		||empty($_POST['V/H_present'])
		||empty($_POST['R/B/S_present'])
		||empty($_POST['PV/H_permanent'])
		||empty($_POST['PR/B/S_permanent'])){
			$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 			header("location: index.php");
		}else{
			$_POST['Email'] = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
			if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)==false){
			}else{
				$_SESSION['error'] = "Invalid Email Address";
				header("location: index.php");//redirecting to first page
			}
		}
	}/*else{
		if (empty($_SESSION['error_page2'])) {
			header("location: page1_form.php");//redirecting to first page
			}	
	}*/


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		STAGE 2
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	
	session_start();
	

	if(!isset($_POST['stageTwo'])){
	$_SESSION['usr'] = array();
	$_SESSION['usr'][] = test_input($_POST['ApplyingIn']);//0
	$_SESSION['usr'][] = test_input($_POST['passportType']);//1
	//$_SESSION['usr'][] = test_input($_POST['DeliveryType']);//2
	$_SESSION['usr'][] = test_input($_POST['Name']);//2
	$_SESSION['usr'][] = test_input($_POST['FirstName']);//3
	$_SESSION['usr'][] = test_input($_POST['Surname']);//4
	//$_SESSION['usr'][] = test_input($_POST['Guardianinfo']);
	$_SESSION['usr'][] = test_input($_POST['Fathername']);//5
	$_SESSION['usr'][] = test_input($_POST['fNationality']);//6
	$_SESSION['usr'][] = test_input($_POST['Mothername']);//7
	$_SESSION['usr'][] = test_input($_POST['fProfession']);//8
	$_SESSION['usr'][] = test_input($_POST['mNationality']);//9
	$_SESSION['usr'][] = test_input($_POST['mProfession']);//10
	$_SESSION['usr'][] = test_input($_POST['Spousename']);//11
	$_SESSION['usr'][] = test_input($_POST['spNationality']);//12
	$_SESSION['usr'][] = test_input($_POST['spProfession']);//13
	$_SESSION['usr'][] = test_input($_POST['MartialSt']);//14
	$_SESSION['usr'][] = test_input($_POST['appProfession']);//15
	$_SESSION['usr'][] = test_input($_POST['cbirth']);//16
	$_SESSION['usr'][] = test_input($_POST['dBirth']);//17
	$_SESSION['usr'][] = test_input($_POST['DOB']);//18
	//$_SESSION['usr'][] = test_input($_POST['Gender']);//20
	//$_SESSION['usr'][] =($_POST['aa']);
	//$_SESSION['usr'][] = ($_POST['Nationalname']);
	//$_SESSION['usr'][] = ($_POST['TaxnameNo']);
	$_SESSION['usr'][] = test_input($_POST['cm']);//19
	$_SESSION['usr'][] = test_input($_POST['inch']);//20
	$_SESSION['usr'][] = test_input($_POST['aReligion']);//21
	$_SESSION['usr'][] = test_input($_POST['Email']);//22
	$_SESSION['usr'][] = test_input($_POST['aNationality']);//23
	$_SESSION['usr'][] = test_input($_POST['citiStatus']);//24
	//$_SESSION['usr'][] = $_POST['dualcitizenship'];//27
	$_SESSION['usr'][] = test_input($_POST['V/H_present']);//25
	$_SESSION['usr'][] = test_input($_POST['R/B/S_present']);//26
	$_SESSION['usr'][] = test_input($_POST['aDistrict']);//27
	$_SESSION['usr'][] = test_input($_POST['policeStat']);//28
	$_SESSION['usr'][] = test_input($_POST['postOffice']);//29
	$_SESSION['usr'][] = test_input($_POST['PV/H_permanent']);//30
	$_SESSION['usr'][] = test_input($_POST['PR/B/S_permanent']);//31
	$_SESSION['usr'][] = test_input($_POST['perDistrict']);//32
	$_SESSION['usr'][] = test_input($_POST['perPoliceStat']);//33
	$_SESSION['usr'][] = test_input($_POST['perPostOffice']);//34
}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
	?>
	<h3>PASSPORT APPLICATION STAGE-2</h3>
		
		<p class= "error">Fields marked with <i style="color:red">(*)</i> are mandoraty.</p>
		<hr style="color:grey">

		<?php
 			if (!empty($_SESSION['error2'])) {
 			echo $_SESSION['error2'];
 			unset($_SESSION['error2']);
 		}
 		?>
		</span>

	<form method="POST" action="">
		<div class="tables">
			<table>
				<tr>
					<td>
						<div class="table1">
							<table>
								<tr>
									<td colspan="2"><h4 style="color:grey">Applicant Contact Information</h4>

									</td>
								</tr>
								<tr>
									<td>Office No.:
									</td>
									<td>
										<input type="text" name="officeNo" value="<?php if(isset($_SESSION['two'][0])) {echo $_SESSION['two'][0];}?>" required>
									</td>
								</tr>

								<tr>
									<td>Residence No.:
									</td>
									<td>
										<input type="text" name="ResidenceNo" value="<?php if(isset($_SESSION['two'][1])) {echo $_SESSION['two'][1];}?>" required>
									</td>
								</tr>

								<tr>
									<td>Mobile No.:
									</td>
									<td>
										<input type="text" name="MobileNo" value="<?php if(isset($_SESSION['two'][2])) {echo $_SESSION['two'][2];}?>" required>
									</td>
								</tr>
								<tr>
									<td colspan="2"><h4 style="color:grey">Emergency Contact Person's Details</h4></td>
								</tr>
								 <tr>
								 	<td>Name:<i style="color:red" class="error">*</i>
								 	</td>
								 	<td>
								 	<input type="text" name="EmergencyName" value="<?php if(isset($_SESSION['two'][3])) {echo $_SESSION['two'][3];}?>" required>
								 	</td>
								 </tr>
								 <tr>
									<td>Country:<i style="color:red" class="error">*</i>
									<br></td>
									
									
									<td>
										<select class="selections" name="country">
											<option value="Bangladesh">Bangladesh</option>
											<option value="Nepal">Nepal</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Ghana">Ghana</option>
										</select>
									</td>
								</tr>
								<tr>
								<td colspan="2"><input type="checkbox" name="Permanent_Address" value="Per_Add"> <i> Same as Permanent Address</i>
							</tr>
							<br>
							<tr>
								<td colspan="2"><input type="checkbox" name="Present_Address" value="Present_Add"><i>  Same as present Address</i>
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="EV/H_permanent" value="<?php if(isset($_SESSION['two'][4])) {echo $_SESSION['two'][4];}?>" required>
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="ER/B/S_permanent" value="<?php if(isset($_SESSION['two'][5])) {echo $_SESSION['two'][5];}?>" required>
								</td>
							</tr>
							<tr>
								<td>District:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="District">
											<option value="Jessore">Jessore</option>
											<option value="Pabna">Pabna</option>
											<option value="Rangamati">Rangamati</option>
											<option value="Benapol">Benapol</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Police Station:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="pstation">
											<option value="Station1">Station1</option>
											<option value="Station2">Station2</option>
											<option value="Station3">Station3</option>
											<option value="Station4">Station4</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Post Office:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="poffice">
											<option value="office1">office1</option>
											<option value="office2">office2</option>
											<option value="office3">office3</option>
											<option value="office4">office4</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Contact No.:<i style="color:red" class="error">*</i>
								</td>
								<td>
								<input type="text" name="ContactNo" value="<?php if(isset($_SESSION['two'][6])) {echo $_SESSION['two'][6];}?>" required>
								</td>
							</tr>
							<tr>
								<td>Email:
								</td>
								<td>
								<input type="text" name="EEmail" value="<?php if(isset($_SESSION['two'][7])) {echo $_SESSION['two'][7];}?>" required>
								</td>
							</tr>
							<tr>
								<td>
								Relationship:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="relation">
											<option value="Father">Father</option>
											<option value="Mother">Mother</option>
											<option value="Brother">Brother</option>
											<option value="Sister">Sister</option>
									</select>

								</td>
							</tr>

							</table>
						</div>
					</td>


					<td>
						<div class="table2">
							<table>
							<col width="190">
								<tr>
									<td colspan="2"><h4 style="color:grey">Old Passport Information</h4></td>
								</tr>
								<tr>
									<td>Passport No:
									</td>
									<td>
									<input type="text" name="OldPassNo" value="<?php if(isset($_SESSION['two'][8])) {echo $_SESSION['two'][8];}?>" required>
									</td>
								</tr>
								<tr>
									<td>Place of Issue:
									</td>
									<td>
									<input type="text" name="OldPlaceofIssue" value="<?php if(isset($_SESSION['two'][9])) {echo $_SESSION['two'][9];}?>" required>
									</td>
								</tr>
								<tr>
									<td>Date Of Issue:
									</td>
									<td>
									<input type="text" name="OldPassDateofIssue" value="<?php if(isset($_SESSION['two'][10])) {echo $_SESSION['two'][10];}?>" required>
									</td>
								</tr>
								<tr>
									<td>Re-Issue Reason:
									</td>
									<td>
										<select class="selections" name="reissuereason">
											<option value="None">None</option>
											<option value="None">None</option>
											<option value="None">None</option>
											<option value="None">None</option>
									</select>
									
									</td>
								</tr>
								<tr>
								<td>
								<input type="Submit" name="Previous Page" Class="Buttons" value="Previous Page" formaction="index.php">
								</td>
								<td>
								<input type="Submit" name="Next" Class="Buttons" value="Save & Next" formaction="stage3.php">
								</td>

								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
		
	</form>
	<br>

	<h1>Result</h1>
	<?php
	foreach($_SESSION['usr'] as $item)
	{
		echo $item;
		echo "<br>";
	}
	?>
	

</body>
</html>
