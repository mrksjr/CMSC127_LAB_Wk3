<html>
	<head>
		<title>Applicant Information</title>
		<link href="assets/LAB01_Styles.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<a id = "back" href = "javascript:history.back()">⮜</a>
		<div id="title"><h1>Applicant Information</h1></div>
		
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
			
			// display applicant information
			$id = $_POST['csid'];
			$result = mysqli_query( $GLOBALS['conn'], "SELECT * FROM pdsData WHERE csid='$id'" );
			$all_property = array();
			
			$row = mysqli_fetch_array($result);
	?>
		<div id = "appinfo">	
			<table>
				<tr>
					<td class = "h" width = "210px">NAME</td>
					<td><?php echo "&nbsp".$row['fname']." ".$row['mname']." ".$row['lname']." ".$row['nmext'] ?></td>
				</tr>
				<tr>
					<td class = "h">DATE OF BIRTH</td>
					<td><?php echo "&nbsp".$row['bdate'] ?></td>
				</tr>
				<tr>
					<td class = "h">PLACE OF BIRTH</td>
					<td><?php echo "&nbsp".$row['pbirth'] ?></td>
				</tr>
				<tr>
					<td class = "h">SEX</td>
					<td><?php echo "&nbsp".$row['sex'] ?></td>
				</tr>
				
				<tr><td colspan = '2'><hr></td></tr>
				
				<tr>
					<td class = "h">CIVIL STATUS</td>
					<td><?php echo "&nbsp".$row['cstat'] ?></td>
				</tr>
				<tr>
					<td class = "h">CITIZENSHIP </td>
					<td><?php echo "&nbsp".$row['ctz'] ?></td>
				</tr>				
				<tr><td colspan = '2'><hr></td></tr>
				
				<tr>
					<td class = "h">HEIGHT</td>
					<td><?php echo "&nbsp".$row['height'] ?></td>
				</tr>
				<tr>
					<td class = "h">WEIGHT</td>
					<td><?php echo "&nbsp".$row['weight'] ?></td>
				</tr>
				<tr>
					<td class = "h">BLOOD TYPE </td>
					<td><?php echo "&nbsp".$row['btype'] ?></td>
				</tr>
				
				<tr><td colspan = '2'><hr></td></tr>
				
				<tr>
					<td class = "h">GSIS ID NO. </td>
					<td><?php echo "&nbsp".$row['gsisno'] ?></td>
				</tr>
				<tr>
					<td class = "h">PAG-IBIG ID NO. </td>
					<td><?php echo "&nbsp".$row['pibigno'] ?></td>
				</tr>
				<tr>
					<td class = "h">PHILHEALTH NO. </td>
					<td><?php echo "&nbsp".$row['phno'] ?></td>
				</tr>
				<tr>
					<td class = "h">SSS NO. </td>
					<td><?php echo "&nbsp".$row['sssno'] ?></td>
				</tr>
				<tr>
					<td class = "h">TIN NO. </td>
					<td><?php echo "&nbsp".$row['tinno'] ?></td>
				</tr>
				<tr>
					<td class = "h">AGENCY EMPLOYEE NO. </td>
					<td><?php echo "&nbsp".$row['agemno'] ?></td>
				</tr>
				
				<tr><td colspan = '2'><hr></td></tr>
				
				<tr>
					<td class = "h">RESIDENTIAL ADDRESS </td>
					<td><?php echo "&nbsp".$row['bhno'].", ".$row['strt'].", ".$row['subd'].", ".$row['brgy'].", ".$row['city'].", ".$row['prov'] ?></td>
				</tr>
				<tr>
					<td class = "h">ZIP CODE </td>
					<td><?php echo "&nbsp".$row['zip'] ?></td>
				</tr>
				
				<tr>
					<td class = "h">PERMANENT ADDRESS </td>
					<td><?php echo "&nbsp".$row['pbhno'].", ".$row['pstrt'].", ".$row['psubd'].", ".$row['pbrgy'].", ".$row['pcity'].", ".$row['pprov'] ?></td>
				</tr>
				<tr>
					<td class = "h">ZIP CODE</td>
					<td><?php echo "&nbsp".$row['pzip'] ?></td>
				</tr>
				
				<tr><td colspan = '2'><hr></td></tr>
				
				<tr>
					<td class = "h">TELEPHONE NO. </td>
					<td><?php echo "&nbsp".$row['telno'] ?></td>
				</tr>
				<tr>
					<td class = "h">MOBILE NO. </td>
					<td><?php echo "&nbsp".$row['mobno'] ?></td>
				</tr>
				<tr>
					<td class = "h">E-MAIL ADDRESS </td>
					<td><?php echo "&nbsp".$row['email'] ?></td>
				</tr>
			</table>
		</div>
			
	<?php		
		} else echo "<p class = 'record'>You must be logged in.";
	?>
	
	</body>
</html>