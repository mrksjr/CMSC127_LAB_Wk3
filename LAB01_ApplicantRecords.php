<html>
	<head>
		<title>Applicant List</title>
		<link href="assets/LAB01_Styles.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<a id = "back" href = "LAB01_Home.html">⮜</a>
		<div id="title"><h1>APPLICANT LIST</h1></div>
		
	<?php
		if ( $_SERVER["REQUEST_METHOD"] == 'POST' ) {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "applicants";
			
			$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ( $GLOBALS['conn']->connect_error )
				die("Connection failed: ".$GLOBALS['conn']->connect_error);
			
			if ( $_POST['flag'] == 0 ) register();
			if ( $_POST['flag'] == 1 ) deleteApplicant();
			
			// display applicant information
			
			if ( $_POST['flag'] != 0 ) {
				$result = mysqli_query( $GLOBALS['conn'], "SELECT * FROM pdsData ORDER BY csid" );
				$all_property = array();
				
				if( $result->num_rows > 0 ){
				$i = 1;
	?>
				<div id = "applist">
					<table>
					<?php
						while ( $row = mysqli_fetch_array($result) ){
					?>
						<tr>
							<td width = "85%">
								<form method = "POST" action = "LAB01_ApplicantInfoPage.php">
									<?php
										if ( !empty($row['mname']) )
											echo "<input type = 'submit' name = 'applicname' value = '".$i.'. '.$row['lname'].', '.$row['fname'].' '.$row['mname'][0].'. '.$row['nmext']."'>";
										else
											echo "<input type = 'submit' name = 'applicname' value = '".$i.'. '.$row['lname'].', '.$row['fname'].' '.$row['nmext']."'>";
									?>
									<?php echo "<input name = 'csid' type = 'hidden' value = '".$row['csid']."'></input>" ?>
								</form>
							</td>
							<td>
								<form method = "POST" action = "LAB01_ApplicantRecords.php">
									<?php echo "<input name = 'csid' type = 'hidden' value = '".$row['csid']."'></input>" ?>
									<input name = "flag" type = "hidden" value = "1">
									<input type = "submit" name = "delete" value = "✗">
								</form>
							</td>
						</tr>
					<?php
							$i++;
						}
					?>
					</table>
				</div>
	<?php
				} else echo "<p class = 'record'>Database is empty.</p>";
			}
		} else echo "<p class = 'record'>You must be logged in.";
		
		function register() {
			// personal information
			$lname = $_POST["lname"];
			$fname = $_POST["fname"];
			$nmext = $_POST["nmext"];
			$mname = $_POST["mname"];
			
			$bdate = $_POST["bdate"];
			$pbirth = $_POST["pbirth"];
			$sex = $_POST["sex"];
			$cstat = $_POST["cstat"];
			
			$height = $_POST["height"];
			$weight = $_POST["weight"];
			$btype = $_POST["btype"];
			
			$gsisno = $_POST["gsisno"];
			$pibigno = $_POST["pibigno"];
			$phno = $_POST["phno"];
			$sssno = $_POST["sssno"];
			$tinno = $_POST["tinno"];
			$agemno = $_POST["agemno"];
			
			$ctz = $_POST["ctz"];
			$cntry = $_POST["cntry"];
			
			$bhno = $_POST["bhno"];
			$strt = $_POST["strt"];
			$subd = $_POST["subd"];
			$brgy = $_POST["brgy"];
			$city = $_POST["city"];
			$prov = $_POST["prov"];
			$zip = $_POST["zip"];
			
			$pbhno = $_POST["pbhno"];
			$pstrt = $_POST["pstrt"];
			$psubd = $_POST["psubd"];
			$pbrgy = $_POST["pbrgy"];
			$pcity = $_POST["pcity"];
			$pprov = $_POST["pprov"];
			$pzip = $_POST["pzip"];
			
			$telno = $_POST["telno"];
			$mobno = $_POST["mobno"];
			$email = $_POST["email"];
			
			// family background
			$splname = $_POST["splname"];
			$spfname = $_POST["spfname"];
			$spnmext = $_POST["spnmext"];
			$spmname = $_POST["spmname"];
			
			$spoccup = $_POST["spoccup"];
			$spempnm = $_POST["spempnm"];
			$spbusadd = $_POST["spbusadd"];
			$sptelno = $_POST["sptelno"];
			
			$flname = $_POST["flname"];
			$ffname = $_POST["ffname"];
			$fnmext = $_POST["fnmext"];
			$fmname = $_POST["fmname"];
			
			$mmdname = $_POST["mmdname"];
			$mlname = $_POST["mlname"];
			$mfname = $_POST["mfname"];
			$mmname = $_POST["mmname"];
			
			$chname0 = $_POST["chname0"];
			$chdob0 = $_POST["chdob0"];
			$chname1 = $_POST["chname1"];
			$chdob1 = $_POST["chdob1"];
			$chname2 = $_POST["chname2"];
			$chdob2 = $_POST["chdob2"];
			$chname3 = $_POST["chname3"];
			$chdob3 = $_POST["chdob3"];
			$chname4 = $_POST["chname4"];
			$chdob4 = $_POST["chdob4"];
			$chname5 = $_POST["chname5"];
			$chdob5 = $_POST["chdob5"];
			$chname6 = $_POST["chname6"];
			$chdob6 = $_POST["chdob6"];
			$chname7 = $_POST["chname7"];
			$chdob7 = $_POST["chdob7"];
			$chname8 = $_POST["chname8"];
			$chdob8 = $_POST["chdob8"];
			$chname9 = $_POST["chname9"];
			$chdob9 = $_POST["chdob9"];
			$chname10 = $_POST["chname10"];
			$chdob10 = $_POST["chdob10"];
			$chname11 = $_POST["chname11"];
			$chdob11 = $_POST["chdob11"];
			
			// educational background
			$elemsch = $_POST["elemsch"];
			$secsch = $_POST["secsch"];
			$vocsch = $_POST["vocsch"];
			$collsch = $_POST["collsch"];
			$gradsch = $_POST["gradsch"];
			
			$elemdeg = $_POST["elemdeg"];
			$secdeg = $_POST["secdeg"];
			$vocdeg = $_POST["vocdeg"];
			$colldeg = $_POST["colldeg"];
			$graddeg = $_POST["graddeg"];
			
			$elemdate0 = $_POST["elemdate0"];
			$secdate0 = $_POST["secdate0"];
			$vocdate0 = $_POST["vocdate0"];
			$colldate0 = $_POST["colldate0"];
			$graddate0 = $_POST["graddate0"];
			
			$elemdate1 = $_POST["elemdate1"];
			$secdate1 = $_POST["secdate1"];
			$vocdate1 = $_POST["vocdate1"];
			$colldate1 = $_POST["colldate1"];
			$graddate1 = $_POST["graddate1"];
			
			$elemlvl = $_POST["elemlvl"];
			$seclvl = $_POST["seclvl"];
			$voclvl = $_POST["voclvl"];
			$colllvl = $_POST["colllvl"];
			$gradlvl = $_POST["gradlvl"];
			
			$elemgrad = $_POST["elemgrad"];
			$secgrad = $_POST["secgrad"];
			$vocgrad = $_POST["vocgrad"];
			$collgrad = $_POST["collgrad"];
			$gradgrad = $_POST["gradgrad"];
			
			$elemhon = $_POST["elemhon"];
			$sechon = $_POST["sechon"];
			$vochon = $_POST["vochon"];
			$collhon = $_POST["collhon"];
			$gradhon = $_POST["gradhon"];
			
			// sql to create table
			$sql = "INSERT INTO pdsData ( lname, fname, nmext, mname, bdate, pbirth, sex, cstat, height, weight, btype, bhno, strt, subd, brgy,
			city, prov, zip, gsisno, pibigno, phno, sssno, tinno, agemno, ctz, cntry, pbhno, pstrt, psubd, pbrgy, pcity, pprov, pzip, telno,
			mobno, email,splname, spfname, spnmext, spmname, spoccup, spempnm, spbusadd, sptelno, flname, ffname, fnmext, fmname, mmdname,
			mlname, mfname, mmname, chname0, chdob0, chname1, chdob1, chname2, chdob2, chname3, chdob3, chname4, chdob4, chname5, chdob5, chname6,
			chdob6, chname7, chdob7, chname8, chdob8, chname9, chdob9, chname10, chdob10, chname11, chdob11, elemsch, secsch, vocsch, collsch,
			gradsch, elemdeg, secdeg, vocdeg, colldeg, graddeg,elemdate0, secdate0, vocdate0, colldate0, graddate0, elemdate1, secdate1, vocdate1,
			colldate1, graddate1, elemlvl, seclvl, voclvl,colllvl, gradlvl, elemgrad, secgrad, vocgrad, collgrad, gradgrad, elemhon, sechon,
			vochon, collhon, gradhon)
			
			VALUES ('$lname', '$fname', '$nmext', '$mname', '$bdate', '$pbirth', '$sex', '$cstat', '$height', '$weight', '$btype', '$bhno',
			'$strt', '$subd', '$brgy', '$city', '$prov', '$zip', '$gsisno', '$pibigno', '$phno', '$sssno', '$tinno', '$agemno', '$ctz', '$cntry',
			'$pbhno', '$pstrt', '$psubd', '$pbrgy', '$pcity', '$pprov', '$pzip', '$telno', '$mobno', '$email', '$splname', '$spfname', '$spnmext',
			'$spmname', '$spoccup', '$spempnm', '$spbusadd', '$sptelno', '$flname', '$ffname', '$fnmext', '$fmname', '$mmdname', '$mlname',
			'$mfname', '$mmname', '$chname0', '$chdob0', '$chname1', '$chdob1', '$chname2', '$chdob2', '$chname3', '$chdob3', '$chname4',
			'$chdob4', '$chname5', '$chdob5', '$chname6', '$chdob6', '$chname7','$chdob7', '$chname8', '$chdob8', '$chname9', '$chdob9',
			'$chname10', '$chdob10', '$chname11', '$chdob11', '$elemsch', '$secsch', '$vocsch', '$collsch', '$gradsch', '$elemdeg', '$secdeg',
			'$vocdeg', '$colldeg', '$graddeg','$elemdate0', '$secdate0', '$vocdate0', '$colldate0', '$graddate0','$elemdate1', '$secdate1',
			'$vocdate1', '$colldate1', '$graddate1', '$elemlvl', '$seclvl', '$voclvl', '$colllvl', '$gradlvl', '$elemgrad', '$secgrad',
			'$vocgrad', '$collgrad', '$gradgrad', '$elemhon', '$sechon', '$vochon', '$collhon', '$gradhon')";
													 
			
			if ($GLOBALS['conn']->query($sql) === TRUE)
				echo "<p class = 'record'>Applicant successfully registered.</p>";
			else
				echo "<p class = 'record' id = 'fail'>Error occured upon registration.<br>Please retry again.</p>";
			
			$GLOBALS['conn']->close();
		}
		
		function deleteApplicant() {
			$id = $_POST['csid']; // determines the primary key of the row
			
			$sql = "DELETE FROM `pdsData` WHERE `csid` = '$id'";
			
			if ($GLOBALS['conn']->query($sql) != TRUE) {
				?>
					<script>alert("Error deleting record.")</script>
				<?php
			}
		}
	?>
	
	</body>
</html>
