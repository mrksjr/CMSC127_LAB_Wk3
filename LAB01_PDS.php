<!DOCTYPE html>

<html>
	<head>
		<title>Personal Data Sheet</title>
		<link href="assets/LAB01_Styles.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	</head>
		
	
	<body>
		<a id = "back" href = "LAB01_Home.html">⮜</a>
		<div id="title"><h1>PERSONAL DATA SHEET</h1></div>
		<div id = "bgpic"></div>
		
		<form id = "appform" method = "POST" action = "LAB01_ApplicantRecords.php">
			<fieldset>
				<legend>I. PERSONAL INFORMATION</legend>
				<table>
					<tr>
						<td width = "30%">Surname</td>
						<td width = "40%">First Name</td>
						<td width = "30%">Middle Name</td>
					</tr>
					
					<tr>
						<td><input type = "text" name = "lname" maxlength = "30" style = "width: 100%;" required></td>
						<td>
							<input type = "text" name = "fname" maxlength = "30" style = "width: 75%;" required>
							<input type = "text" name = "nmext" maxlength = "5" style = "width: 22%;" placeholder = " Sr., Jr., III">
						</td>
						<td><input type = "text" name = "mname" maxlength = "30" style = "width: 100%;" required></td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td width = "125px">Date of Birth</td>
						<td width = "25%">
							<input type = "text" name = "bdate" placeholder = " MM/DD/YYYY"
							pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
							title = "Enter a date in this format MM/DD/YYYY" maxlength = "10" style = "width: 100%;" />
						</td>
						<td width = "120px">Place of Birth</td>
						<td><input type = "text" name = "pbirth" maxlength = "30" style = "width: 100%;"></td>
						<td>Sex</td>
						<td width = "150px">
							<label><input type = "radio" name = "sex" value = "Male" required> Male</label>
							&nbsp
							<label><input type = "radio" name = "sex" value = "Female" required> Female</label>
						</td>
					</tr>
					
					<tr>
						<td>Weight (kg)</td>
						<td><input type = "text" name = "weight" style = "width: 100%;"></td>
						<td>Height (m)</td>
						<td><input type = "text" name = "height" style = "width: 100%;"></td>
						<td>Blood Type</td>
						<td><input type = "text" name = "btype" maxlength = "3"  style = "width: 100%;"></td>
					</tr>
					<tr>
						<td>Civil Status</td>
						<td>
							&nbsp
							<label><input type = "radio" name = "cstatC" value = "0" onclick = "cstatS(this)"> Single</label>
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<label><input type = "radio" name = "cstatC" value = "1" onclick = "cstatS(this)"> Married</label>
							<br>
							&nbsp
							<label><input type = "radio" name = "cstatC" value = "2" onclick = "cstatS(this)"> Widowed</label>
							&nbsp&nbsp&nbsp&nbsp
							<label><input type = "radio" name = "cstatC" value = "3" onclick = "cstatS(this)"> Separated</label>
							<br>
							&nbsp
							<label><input type = "radio" name = "cstatC" value = "4" onclick = "cstatS(this)"> Other/s:</label>
							<input id = "cstatField" type = "text" style = "width: 137px;" oninput = "cstatchange(this)">
							
							<input id = "cstatOut" type = "hidden" name = "cstat">
						</td>
						<td>Citizenship</td>
						<td colspan = "3">
							<label>&nbsp <input type = "radio" name = "ctzC" value = "0" onclick = "ctzS(this)"> Filipino</label>
							
							&nbsp&nbsp&nbsp&nbsp&nbspDual Citizenship:
							<label><input id = "dc0" type = "radio" name = "ctzC" value = "1" onclick = "ctzS(this)"> by birth</label>
							&nbsp&nbsp
							<label><input id = "dc1" type = "radio" name = "ctzC" value = "2" onclick = "ctzS(this)"> by naturalization</label>	
							
							<p style = "padding-left: 95px;">
								Please indicate country:
								<input id = "ctzField" type = "text" name = "cntry" style = "width: 170px;" oninput = "ctzChange(this)">
							</p>
							
							<input id = "ctzOut" type = "hidden" name = "ctz">
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>GSIS ID No.<input type = "text" name = "gsisno" maxlength = "15" placeholder = " XXXXXXXXXXXXXXXX" style = "float: right; width: 150px;"></td>
						<td>PAG-IBIG ID No.<input type = "text" name = "pibigno" maxlength = "15" placeholder = " XXXXXXXXXXXXXXXX" style = "float: right; width: 150px;"></td>
						<td>PhilHealth No.<input type = "text" name = "phno" maxlength = "15" placeholder = " XXXXXXXXXXXXXXXX" style = "float: right; width: 150px;"></td>
					</tr>
					<tr>
						<td>SSS No.<input type = "text" name = "sssno" maxlength = "15" placeholder = " XXXXXXXXXXXXXXXX" style = "float: right; width: 150px;"></td>
						<td>TIN No.<input type = "text" name = "tinno" maxlength = "15" placeholder = " XXXXXXXXXXXXXXXX" style = "float: right; width: 150px;"></td>
						<td>Agency Employee No.<input type = "text" name = "agemno" maxlength = "15" placeholder = " XXXXXXXXXXXXXXXX" style = "float: right; width: 150px;"></td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>
							<fieldset>
								<legend>Residential Address</legend>
								<table>
									<tr>
										<td>Block No./House No.</td>
										<td>Street</td>
										<td>Subdivision</td>
									</tr>
									
									<tr>
										<td><input type = "text" name = "bhno" style = "width: 100%;"></td>
										<td><input type = "text" name = "strt" style = "width: 100%;"></td>
										<td><input type = "text" name = "subd" style = "width: 100%;"></td>
									</tr>
									
									<tr>
										<td>Barangay</td>
										<td>City</td>
										<td>Province</td>
									</tr>
									
									<tr>
										<td><input type = "text" name = "brgy" style = "width: 100%;"></td>
										<td><input type = "text" name = "city" style = "width: 100%;"></td>
										<td><input type = "text" name = "prov" style = "width: 100%;"></td>
									</tr>
									
									<tr>
										<td colspan = "3">ZIP Code: <input type = "text" name = "zip" maxlength = "5" style = "width: 218px;"></td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
					
					<tr>
						<td>
							<fieldset>
								<legend>Permanent Address</legend>
								<table>
									<tr>
										<td>Block No./House No.</td>
										<td>Street</td>
										<td>Subdivision</td>
									</tr>
									
									<tr>
										<td><input type = "text" name = "pbhno" style = "width: 100%;"></td>
										<td><input type = "text" name = "pstrt" style = "width: 100%;"></td>
										<td><input type = "text" name = "psubd" style = "width: 100%;"></td>
									</tr>
									
									<tr>
										<td>Barangay</td>
										<td>City</td>
										<td>Province</td>
									</tr>
									
									<tr>
										<td><input type = "text" name = "pbrgy" style = "width: 100%;"></td>
										<td><input type = "text" name = "pcity" style = "width: 100%;"></td>
										<td><input type = "text" name = "pprov" style = "width: 100%;"></td>
									</tr>
									
									<tr>
										<td colspan = "3">ZIP Code: <input type = "text" name = "pzip" maxlength = "5" style = "width: 218px;"></td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>Telephone No.: <input type = "text" name = "telno" maxlength = "15" style = "float: right; width: 200px;"></td>
						<td>Mobile No.: <input type = "text" name = "mobno" maxlength = "15" style = "float: right; width: 200px;"></td>
						<td>E-mail Address: <input type = "email" name = "email" style = "float: right; width: 200px;"></td>
					</tr>
				</table>
			</fieldset>
			
			<fieldset>
				<legend>II. FAMILY BACKGROUND</legend>
				<table>
					<tr>
						<td>
							<fieldset>
								<legend>Spouse</legend>
									<table>
										<tr>
											<td width = "30%">Surname</td>
											<td width = "40%">First Name</td>
											<td width = "30%">Middle Name</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "splname" maxlength = "30" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "spfname" maxlength = "30" style = "width: 75%;">
												<input type = "text" name = "spnmext" maxlength = "10" style = "width: 22%;" placeholder = " Sr., Jr., III">
											</td>
											<td><input type = "text" name = "spmname" maxlength = "30" style = "width: 100%;"></td>
										</tr>
									</table>
									
									<table>
										<tr>
											<td width = "32%">Occupation: <input type = "text" name = "spoccup" maxlength = "30" style = "float: right; width: 170px;"></td>
											<td width = "68%">Employer/Business Name: <input type = "text" name = "spempnm" maxlength = "15" style = "float: right; width: 400px;"></td>
										</tr>
											<td width = "32%">Telephone No.: <input type = "text" name = "sptelno" maxlength = "15" style = "float: right; width: 170px;"></td>
											<td width = "68%">Business Address: <input type = "text" name = "spbusadd" maxlength = "30" style = "float: right; width: 450px;"></td>
										<tr>
											
										</tr>
									</table>
							</fieldset>
						</td>
					</tr>
					
					<tr>
						<td>
							<fieldset>
								<legend>Father</legend>
									<table>
										<tr>
											<td width = "30%">Surname</td>
											<td width = "40%">First Name</td>
											<td width = "30%">Middle Name</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "flname" maxlength = "30" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "ffname" maxlength = "30" style = "width: 75%;">
												<input type = "text" name = "fnmext" maxlength = "10" style = "width: 22%;" placeholder = " Sr., Jr., III">
											</td>
											<td><input type = "text" name = "fmname" maxlength = "30" style = "width: 100%;"></td>
										</tr>
									</table>
							</fieldset>
						</td>
					</tr>
					
					<tr>
						<td>
							<fieldset>
								<legend>Mother</legend>
									<table>
										<tr>
											<td width = "25%">Maiden Name</td>
											<td width = "25%">Surname</td>
											<td width = "25%">First Name</td>
											<td width = "25%">Middle Name</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "mmdname" maxlength = "30" style = "width: 100%;"></td>
											<td><input type = "text" name = "mlname" maxlength = "30" style = "width: 100%;"></td>
											<td><input type = "text" name = "mfname" maxlength = "30" style = "width: 100%;"></td>
											<td><input type = "text" name = "mmname" maxlength = "30" style = "width: 100%;"></td>
										</tr>
									</table>
							</fieldset>
						</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td>
							<fieldset>
								<legend>Children</legend>
									<table>
										<tr>
											<td>Full Name</td>
											<td width = "100px">Date of Birth</td>
											<td>Full Name</td>
											<td width = "100px">Date of Birth</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "chname0" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob0" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
											<td><input type = "text" name = "chname1" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob1" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "chname2" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob2" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
											<td><input type = "text" name = "chname3" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob3" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "chname4" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob4" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
											<td><input type = "text" name = "chname5" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob5" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "chname6" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob6" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
											<td><input type = "text" name = "chname7" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob7" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "chname8" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob8" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
											<td><input type = "text" name = "chname9" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob9" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
										</tr>
										
										<tr>
											<td><input type = "text" name = "chname10" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob10" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
											<td><input type = "text" name = "chname11" maxlength = "60" style = "width: 100%;"></td>
											<td>
												<input type = "text" name = "chdob11" placeholder = " MM/DD/YYYY" style = "width: 100px;"
												pattern = "(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))/(?:19|20)[0-9]{2}"
												title = "Enter a date in this format MM/DD/YYYY" maxlength = "10">
											</td>
										</tr>
									</table>
							</fieldset>
						</td>
					</tr>
				</table>
			</fieldset>
			</td>
			</tr>
			
			<fieldset>
				<legend>III. EDUCATIONAL BACKGROUND</legend>
				
				<table>
					<tr>
						<td class = "educ" rowspan = "2" style = "font-size: 16px;">Level</td>
						<td class = "educ" rowspan = "2">Name of School<br>(Write in full)</td>
						<td class = "educ" rowspan = "2">Basic Education/<br>Degree/Course<br>(Write in full)</td>
						<td class = "educ" colspan="2">Period of Attendance</td>
						<td class = "educ" rowspan = "2">Hightest Level/<br>Units Earned<br>(if not graduated)</td>
						<td class = "educ"" rowspan = "2">Year Graduated</td>
						<td class = "educ" rowspan = "2">Scholarship/Academic<br>Honors Received</td>
					</tr>
					<tr>
						<td class = "educ">From</td>
						<td class = "educ">To</td>
					</tr>
					<tr>
						<td class = "lvl">Elementay</td>
						<td><input name="elemsch" type="text"></td>
						<td><input name="elemdeg" type="text"></td>
						<td class = "frto"><input name="elemdate0" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "frto"><input name="elemdate1" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td><input name="elemlvl" type="text"></td>
						<td class = "yrgr"><input name="elemgrad" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "hon"><input name="elemhon" type="text"></td>
					</tr>
					<tr>
						<td class = "lvl">Secondary</td>
						<td><input name="secsch" type="text"></td>
						<td><input name="secdeg" type="text"></td>
						<td class = "frto"><input name="secdate0" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "frto"><input name="secdate1" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td><input name="seclvl" type="text"></td>
						<td class = "yrgr"><input name="secgrad" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "hon"><input name="sechon" type="text"></td>
					</tr>
					<tr>
						<td class = "lvl">Vocational/Trade Courses</td>
						<td><input name="vocsch" type="text"></td>
						<td><input name="vocdeg" type="text"></td>
						<td class = "frto"><input name="vocdate0" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "frto"><input name="vocdate1" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td><input name="voclvl" type="text"></td>
						<td class = "yrgr"><input name="vocgrad" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "hon"><input name="vochon" type="text"></td>
					</tr>
					<tr>
						<td class = "lvl">College</td>
						<td><input name="collsch" type="text"></td>
						<td><input name="colldeg" type="text"></td>
						<td class = "frto"><input name="colldate0" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "frto"><input name="colldate1" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td><input name="colllvl" type="text"></td>
						<td class = "yrgr"><input name="collgrad" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "hon"><input name="collhon" type="text"></td>
					</tr>
					<tr>
						<td class = "lvl">Graduate Studies</td>
						<td><input name="gradsch" type="text"></td>
						<td><input name="graddeg" type="text"></td>
						<td class = "frto"><input name="graddate0" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "frto"><input name="graddate1" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td><input name="gradlvl" type="text"></td>
						<td class = "yrgr"><input name="gradgrad" type="text" maxlength = "4" placeholder = " YYYY"></td>
						<td class = "hon"><input name="gradhon" type="text"></td>
					</tr>
				</table>
			</fieldset>
			<br>

			<input name = "flag" type = "hidden" value = "0">
			<input id="submitBtn" type="submit">
		</form>
	</body>
	
	<script>
		const cstatOut = document.getElementById('cstatOut');
		const cstatfield = document.getElementById('cstatField');
		
		const ctzOut = document.getElementById('ctzOut');
		const ctzfield = document.getElementById('ctzField');
		
		function cstatS(rad) {
			switch( rad.value ) {
				case "0":
					cstatOut.value = "Single";
			console.log(cstatOut.value);
				break;
				
				case "1":
					cstatOut.value = "Married";
			console.log(cstatOut.value);
				break;
				
				case "2":
					cstatOut.value = "Widowed";
			console.log(cstatOut.value);
				break;
				
				case "3":
					cstatOut.value = "Separated";
			console.log(cstatOut.value);
				break;
				
				case "4":
					cstatOut.value = cstatfield.value;
			console.log(cstatOut.value);
				break;
			}
		}
		
		function cstatchange(a) {
			cstatOut.value = a.value;
			console.log(cstatOut.value);
		}
		
		function ctzS(rad) {
			switch( rad.value ) {
				case "0":
					ctzOut.value = "Filipino";
					ctzfield.value = "Philippines";
					console.log(ctzOut.value + " " + ctzfield.value);
				break;
				
				case "1":
					ctzOut.value = "Dual Citizen (" + ctzfield.value + ")";
					console.log(ctzOut.value);
				break;
				
				case "2":
					ctzOut.value = "Naturalized Citizen (" + ctzfield.value + ")";
					console.log(ctzOut.value);
				break;
			}
		}
		
		function ctzChange(a) {			
			const dc0 = document.getElementById('dc0');
			const dc1 = document.getElementById('dc1');
			
			if ( !dc0.checked && !dc1.checked )
				dc0.checked = true;
			
			if ( dc0.checked )
				ctzOut.value = "Dual Citizen (" + a.value + ")";
			
			if ( dc1.checked )
				ctzOut.value = "Naturalized Citizen (" + ctzfield.value + ")";
			
			console.log(ctzOut.value);
		}
	</script>
</html>