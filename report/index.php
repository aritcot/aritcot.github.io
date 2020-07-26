<?php
	include_once ('link_db.php');

?>

<!doctype html>
<html>
	<head>
		<title> Reports in PHP </title>
		<link rel = "stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<div class = "container">
			<div class ="wrapper">
				<h1> Reports Tutorial in PHP</h1>
			</div>
			<div class ="data">
			<form action="index.php" method="POST">
				<select name="standards">
					<option>Select</option>
					<option>3 PUC</option>
					<option>4 PUC</option>
					<?php
						$query1 = "SELECT * FROM compost";
						$result1 = mysql_query ($query1);
						while($rows1 = mysql_fetch_array($result1)){
							$standardID = $rows1['id'];
							$rowsData1 = $rows1['standardName'];
						?>	
							<option value=""><?php echo $standardID; ?><?php echo $rowsData1; ?></option>
							
						<?php
						}
						
					?>
					
				</select>
				<select name="courses">
					<option>Select</option>
					<option>3 PUC</option>
					<option>4 PUC</option>
					<?php
						$query2 = "SELECT * FROM compost";
						$result2 = mysql_query ($query2);
						while($rows2 = mysql_fetch_array($result2)){
							$standardID = $rows2['id'];
							$rowsData2 = $rows2['standardName'];
						?>
							<option value=""><?php echo $standardID; ?><?php echo $rowsData2; ?></option>
							
						<?php
						}
						
				</select>
				<input type="submit" name="submit" class="submit"/>
				<table boarder="1" class="table">
					
					<tr>
						<th>Student Name</th>
						<th>Gender</th>
					</tr>
					<?php
						$standardName = $_POST ['id'];
						$courseName = $_POST ['id'];
						$query3 = "SELECT students.Fname, students.gender
								FROM students
								WHERE students.standardID = '$standardName'
								AND students.courseID = '$courseName';
						$result3 = mysql_query ($query3);
						while($rows3 = mysql_fetch_array($result3)){
							$dataID = $rows3['id'];
							$studentName = $rows3['FName'];
							$gender = $rows3['gender'];
						?>
							
					
						<?php
						}
				
		
					?>
					<tr>
					
					<?php
						$standardName = $_POST ['id'];
						$courseName = $_POST ['id'];
						$query3 = "SELECT students.Fname, students.gender
								FROM students
								WHERE students.standardID = '$standardName'
								AND students.courseID = '$courseName';
						$result3 = mysql_query ($query3);
						while($rows3 = mysql_fetch_array($result3)){
							$dataID = $rows3['id'];
							$studentName = $rows3['FName'];
							$gender = $rows3['gender'];
						?>
							<td><?php echo $studentName; ?></td>
							<td><?php echo $gender; ?></td>
					
						<?php
						}
				
		
					?>
					</tr>
				
				
					</table>
				</form>
			</div>
		</div>
	</body>
</html>