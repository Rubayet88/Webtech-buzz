<!DOCTYPE html>
<html>
<head>
	<title>
		STAGE 3
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		session_start();
		if(!isset($_POST['stage3']))
		{
		$_SESSION['two'] = array();
		$_SESSION['two'][] = test_input($_POST['officeNo']);
		$_SESSION['two'][] = test_input($_POST['ResidenceNo']);
		$_SESSION['two'][] = test_input($_POST['MobileNo']);
		$_SESSION['two'][] = test_input($_POST['EmergencyName']);
		$_SESSION['two'][] = test_input($_POST['country']);
		//$_SESSION['two'][] = test_input($_POST['Permanent_Address']);
		//$_SESSION['two'][] = test_input($_POST['Persent_Address']);
		$_SESSION['two'][] = test_input($_POST['EV/H_permanent']);
		$_SESSION['two'][] = test_input($_POST['ER/B/S_permanent']);
		$_SESSION['two'][] = test_input($_POST['District']);
		$_SESSION['two'][] = test_input($_POST['pstation']);
		$_SESSION['two'][] = test_input($_POST['poffice']);
		$_SESSION['two'][] = test_input($_POST['ContactNo']);
		$_SESSION['two'][] = test_input($_POST['EEmail']);
		$_SESSION['two'][] = test_input($_POST['relation']);
		$_SESSION['two'][] = test_input($_POST['OldPassNo']);
		$_SESSION['two'][] = test_input($_POST['OldPlaceofIssue']);
		$_SESSION['two'][] = test_input($_POST['OldPassDateofIssue']);
		$_SESSION['two'][] = test_input($_POST['reissuereason']);
		}
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
	?>
	<h3>PASSPORT APPLICATION STAGE-3</h3>
		
		<p class= "error">Fields marked with <i style="color:red">(*)</i> are mandoraty.</p>
		<hr style="color:grey">
	<form method="POST" action="">
		<div class="tables">
		<table>
				<tr>
					<td>
						<div class="table1">
							<table>
								<tr>
									<td colspan="2"><h4 style="color:grey">Payment Information</h4>

									</td>
								</tr>
								<tr>
								  <td>Payment Type:
								  </td>
								   <td>
								      <input type="radio" name="fees" value="Online">Online<br>
									  <input type="radio" name="fees" value="Non Online"> Non Online<br>
								    </td>
								</tr>	
								<tr>
								   <td>
								      <input type="checkbox" id="fees">Skip Payment
								    </td>
								</tr>
								<tr>
								 	<td>Ammount:<i style="color:red" class="error">*</i>
								 	</td>
								 	<td>
								 	<select class ="selections" name="ammount">
									    <option value="BDT">BDT</option>
										<option value="CAD">CAD</option>
										<option value="INR">INR</option>
										<option value="USD">USD</option>
									</select>
									<input type="text" name="currecy">
								 	</td>
								 </tr>
								 <tr>
								 <td>Date Of Payment:<i style="color:red" class="error">*</i>
								 </td>
								 <td>
								  <input type="text" name="DateofPayment" value="<?php if(isset($_SESSION['three'][1])) {echo $_SESSION['three'][1];}?>" required>
								 </td>
							    </tr>
							    <tr>
								 <td>Receipt No:<i style="color:red" class="error">*</i>
								 </td>
								 <td>
								  <input type="text" name="ReceiptNo" value="<?php if(isset($_SESSION['three'][2])) {echo $_SESSION['three'][2];}?>" required>
								 </td>
							    </tr>
							    <tr>
								 <td>Name Of the Bank:
								 </td>
								 <td>
									<select class="selections" name="nameofbank">
											<option value="Modhumoti">Modhumoti</option>
											<option value="Brack">Brack</option>
											<option value="EBL">EBL</option>
											<option value="UCBL">UCBL</option>
									</select>
								 </td>
							    </tr>
								<tr>
								 <td>Name Of the Branch:
								 </td>
								 <td>
									<select class="selections" name="nameofbranch">
											<option value="Barnch1">Barnch1</option>
											<option value="Barnch2">Barnch2</option>
											<option value="Barnch3">Barnch3</option>
											<option value="Barnch4">Barnch4</option>
									</select>
								 </td>
							    </tr>
								<tr>
								 <td>
								 <br>
								  <input type="Submit" name="stageTwo" Class="Buttons" Value="Previous Page" formaction="stage2.php">
								 </br>
								 </td>
								 <td>
								 <br>
								  <input type="Submit" name="NextPageSave" Class="Buttons" value="Save & Next" formaction="show.php">
								 </br>
								 </td>
								</tr>
							</table>
						</div>
					            </td>
							</table>
					</td>
				</tr>
	</form>
<?php
echo $_SESSION['usr'][1];
?>
<br>
<?php
	foreach($_SESSION['two'] as $item)
	{
		echo $item;
		echo "<br>";
	}

	?>
</body>
</html>