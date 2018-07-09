<!DOCTYPE html>
<html>
	<head>
		<title>STAGE 1</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<?php
	session_start();
	?>
		<h3>PASSPORT APPLICATION STAGE-1</h3>
		<p style="color:red;"><i> Before filling up the form application form read the <ins style="color:blue">gunameelines</ins> carefully. </i></p>
		<p class= "error">Fields marked with <i style="color:red">(*)</i> are mandoraty.</p>
		<hr style="color:grey">
		<span id="error">
		<?php
 			if (!empty($_SESSION['error'])) {
 			echo $_SESSION['error'];
 			unset($_SESSION['error']);
 		}
 		?>
		</span>
		<form name = "login" method="POST" action="stage2.php">
			<div class="tables">
			    <table>
				    <tr>
					    <td>
					    <div class="table1">
							
							<table>
								<col wnameth="190">
								<tr>
									<td colspan="2"><h4 style="color:grey">Passport Application Information</h4></td>
								</tr>
								<tr>
									<td>Applying in:<i style="color:red" class="error">*</i></td>
									<td>
										<select class="selections" name="ApplyingIn">
												<option value="Bangladesh"> BANGLADESH</option>
												<option value="India"> India</option>
												<option value="Japan"> Japan</option>
												<option value="China"> China</option>
										</select>
									</td>
									
								</tr>
								<tr>
									<td>Application Type:</td>
									<td>NEW APPLICATION</td>
											
								</tr>
								
								<tr>
									<td>Passport Type:<i style="color:red" class="error">*</i>
									<br></td>
									
									
									<td>
										<select class="selections" name="passportType">
											<option value="Type1">Type1</option>
											<option value="Type2">Type2</option>
											<option value="Type2">Type3</option>
											<option value="Type2">Type4</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Delivery Type:</td>
									<td><input type="radio" name="DeliveryType[<?php echo $i; ?>]" value="Regular">Regular
									<br>
									<input type="radio" name="DeliveryType[<?php echo $i; ?>]" value="Express">Express</td>
								
								</tr>
								
								<tr>
									<td colspan="2"><h4 style="color:grey">Passport Application Information</h4></td>
								</tr>
								<tr>
									<td>Name of <br>
									applicant:<i style="color:red" class="error">*</i><span>*</span>
									</td>
									<td>
									<input type="text" name="Name" value="<?php if(isset($_SESSION['usr'][2])) {echo $_SESSION['usr'][2];}?>" placeholder="Ex-James Anderson" required>
									</td>
								
								</tr>
								<tr>
									<td>First Part(Given <br>Name):</td>
									<td>
									<input type="text" name="FirstName" value="<?php if(isset($_SESSION['usr'][3])) {echo $_SESSION['usr'][3];}?>" placeholder="Ex-James Anderson" required>
									</td>
								</tr>
								<tr>
									<td>Second Part <br>
									(Surname):<i style="color:red" class="error">*</i>
									</td>
									<td>
									<input type="text" name="Surname" value="<?php if(isset($_SESSION['usr'][4])) {echo $_SESSION['usr'][4];}?>" placeholder="Ex-James Anderson" required>
									</td>
								
								</tr>
								<tr>
								<td colspan="2">Guardian<input type="checkbox" name="Guardianinfo" value="Guardian"><i style="color:red">"Tick"</i>only if the Applicant is legally adapted 
								</tr>
								<tr>
								<td>Father's name:<i style="color:red" class="error">*</i>
									</td>
									<td>
									<input type="text" name="Fathername" value="<?php if(isset($_SESSION['usr'][5])) {echo $_SESSION['usr'][5];}?>" placeholder="Ex-James Anderson" required>
									</td>
								</tr>
								<tr>
								<td>Father's <br> Nationality:<i style="color:red" class="error">*</i>
								
									</td>
									<td>
										<select class="selections" name="fNationality">
												<option value="BB"> BANGLADESH</option>
												<option value="BB"> BANGLADESH</option>
												<option value="BB"> BANGLADESH</option>
												<option value="BB"> BANGLADESH</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Mother's name:<i style="color:red" class="error">*</i>
									</td>
									<td>
									<input type="text" name="Mothername" value="<?php if(isset($_SESSION['usr'][7])) {echo $_SESSION['usr'][7];}?>" placeholder="Ex-James Anderson" required>
									</td>
								</tr>
								<tr>
								<td>Father's <br> Profession:<i style="color:red" class="error">*</i>
								
									</td>
									<td>
										<select class="selections" name="fProfession">
												<option value="Student">Student</option>
												<option value="Service">Service</option>
												<option value="Business">Business</option>
												<option value="None">None</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Mother's <br> Nationality:<i style="color:red" class="error">*</i>
								
									</td>
									<td>
										<select class="selections" name="mNationality">
												<option value="None"> BANGLADESH</option>
												<option value="None"> BANGLADESH</option>
												<option value="None"> BANGLADESH</option>
												<option value="None"> BANGLADESH</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Mothers's <br> Profession:<i style="color:red" class="error">*</i>
								
									</td>
									<td>
										<select class="selections" name="mProfession">
												<option value="None">aa</option>
												<option value="None">bb</option>
												<option value="None">cc</option>
												<option value="None">dd</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Spouse's name:
									</td>
									<td>
									<input type="text" name="Spousename" value="<?php if(isset($_SESSION['usr'][11])) {echo $_SESSION['usr'][11];}?>" placeholder="Ex-James Anderson" required>
									</td>
								</tr>
								
								
								<tr>
								<td>Spouse's <br> Nationality:
								
									</td>
									<td>
										<select class="selections" name="spNationality">
												<option value="None"> BANGLADESH</option>
												<option value="None"> BANGLADESH</option>
												<option value="None"> BANGLADESH</option>
												<option value="None"> BANGLADESH</option>
										</select>
									</td>
								</tr>
								<tr>
								<td>Spouse's <br> Profession:
								
									</td>
									<td>
										<select class="selections" name="spProfession">
												<option value="None">AA</option>
												<option value="None">BB</option>
												<option value="None">CC </option>
												<option value="None">DD</option>
										</select>
									</td>
								
								</tr>
								<tr>
								<td>Martial Status:<i style="color:red" class="error">*</i></td>
								<td>
									<select class="selections" name="MartialSt">
												<option value="Married">Married</option>
												<option value="Unmarried">Unmarried</option>
									</select></td>
								</tr>
								<tr>
								<td>Applicant's<br>
								Profession:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="appProfession">
										<option value="None">AA</option>
										<option value="None">BB</option>
										<option value="None">CC </option>
										<option value="None">DD</option>
										</select>
								</td>
								</tr>
								<tr>
									<td>Country of <br>
								      Birth:<i style="color:red" class="error">*
									</td>
									<td>
										<select class="selections" name="cbirth">
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Birth <br>
								      District:<i style="color:red" class="error">*
									</td>
									<td>
										<select class="selections" name="dBirth">
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
										</select>
									</td>
								</tr>
							</table>
							
							</div>
					    </td>
					    <td>
					    <div class="table2">
						<table>
							<col wnameth="190">
							<tr>
								<td>
								Date of Birth:<i style="color:red" class="error">*
								</td>
								<td><input type="text" name="DOB" value="<?php if(isset($_SESSION['usr'][18])) {echo $_SESSION['usr'][18];}?>" placeholder="dd-mm-yy" required>
								</td>
							</tr>
							<tr>
								<td>
								Gender:<i style="color:red" class="error">*
								</td>
								<td>
									<input type="radio" name="Gender" value="Male">Male <br>
									<input type="radio" name="Gender" value="Female">Female <br>
									<input type="radio" name="Gender" value="Other">Other <br>
								</td>

							</tr>
							<tr>
								<td>
									Birth name No:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<input type:"text" name:"aa">
								</td>
							</tr>
							<tr>
								<td>
									National name No:
								</td>
								<td>
									<input type:"text" name:"NationalnameNo">
								</td>
							</tr>
							<tr>
								<td>
									Tax name No:
								</td>
								<td>
									<input type:"text" name:"TaxnameNo">
								</td>
							</tr>
							<tr>
								<td>
								Height:<i style="color:red" class="error">*</i>

								</td>
								<td>
								<input type="text" name="cm" class="cm" value="<?php if(isset($_SESSION['usr'][19])) {echo $_SESSION['usr'][19];}?>" placeholder="Ex-20" required>cm
								</td>
								<td>
								<input type="text" name="inch" class="inch" value="<?php if(isset($_SESSION['usr'][20])) {echo $_SESSION['usr'][20];}?>" placeholder="Ex-20" required> inch
								</td>
							</tr>
							<tr>
								<td>
								Religion:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="aReligion">
										<option value="None">AA</option>
										<option value="None">BB</option>
										<option value="None">CC</option>
										<option value="None">DD</option>
									</select>

								</td>

							</tr>
							<tr>
								<td>
								Email:<i style="color:red" class="error" >*</i>
								</td>

								<td>
								<input type="text" name="Email" value="<?php if(isset($_SESSION['usr'][22])) {echo $_SESSION['usr'][22];}?>" placeholder="Ex-xyz@domain.com" required>
								</td>

							</tr>
							<tr>
							<td colspan="2"><h4 style="color:grey">Citizenship Information</h4></td>
							</tr>
							<tr>
								<td>Nationality:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="aNationality">
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
											<option value="None"> BANGLADESH</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Citizenship Status:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="citiStatus">
											<option value="None"> Birth</option>
											<option value="None">MM </option>
											<option value="None">MM </option>
											<option value="None"> MM</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
								Dual Citizenship:<i style="color:red" class="error">*
								</td>
								<td>
									<input type="radio" name="dualcitizenship" value="Yes">Yes <br>
									<input type="radio" name="dualcitizenship" value="No">No <br>
								
								</td>

							</tr>
							<tr>
							<td colspan="2"><h4 style="color:grey">Present Address</h4></td>
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="V/H_present" value="<?php if(isset($_SESSION['usr'][25])) {echo $_SESSION['usr'][25];}?>" placeholder="Ex-James Anderson" required>
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="R/B/S_present" value="<?php if(isset($_SESSION['usr'][26])) {echo $_SESSION['usr'][26];}?>" placeholder="Ex-James Anderson" required>
								</td>
							</tr>
							<tr>
								<td>District:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="aDistrict">
											<option value="None">DD</option>
											<option value="None"> DD</option>
											<option value="None"> DD</option>
											<option value="None">DD </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Police Station:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="policeStat">
											<option value="None">PS</option>
											<option value="None"> PS</option>
											<option value="None"> PS</option>
											<option value="None"> PS</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Post Office:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="postOffice">
											<option value="None">PP</option>
											<option value="None">PP</option>
											<option value="None">PP</option>
											<option value="None">PP</option>
									</select>
								</td>
							</tr>

							<tr>
							<td colspan="2"><h4 style="color:grey">Permanent Address</h4></td>
							</tr>
							<tr>
								<td colspan="2"><input type="checkbox" name="Permanent_Address" value="Per_Add">  Same as above
							</tr>
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type="text" name="PV/H_permanent" value="<?php if(isset($_SESSION['usr'][30])) {echo $_SESSION['usr'][30];}?>" placeholder="Ex-James Anderson" required>
								</td>

							</tr>
							<tr>
								<td>Road/Block/Sector:
								</td>
								<td>
								  <input type="text" name="PR/B/S_permanent" value="<?php if(isset($_SESSION['usr'][31])) {echo $_SESSION['usr'][31];}?>" placeholder="Ex-James Anderson" required>
								</td>
							</tr>
							<tr>
								<td>District:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="perDistrict">
											<option value="None">DD</option>
											<option value="None">DD </option>
											<option value="None">DD </option>
											<option value="None">DD </option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Police Station:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="perPoliceStat">
											<option value="None">PS</option>
											<option value="None">PS</option>
											<option value="None">PS</option>
											<option value="None">PS</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Post Office:<i style="color:red" class="error">*</i>
								</td>
								<td>
									<select class="selections" name="perPostOffice">
											<option value="None">PO</option>
											<option value="None">PO</option>
											<option value="None">PO</option>
											<option value="None">PO</option>
									</select>
								</td>
							</tr>

							<tr>
							<td>
							<input type="Submit" name="Submit" Value="Save & Next" formaction="stage2.php">	
							</td>
							</tr>
						</table>
						</div>
					    </td>
				    </tr>
			    </table>
			</div>
		</form>
<?php

if(exit()){
	session_destroy();
}
?>
	</body>
</html>