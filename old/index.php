<!DOCTYPE html>
<html>
	<head>
		<title>CPSC 332 Database Project</title>
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="indexStyle.css"/>
		<script src="indexScript.js"></script>

	</head>

	<body>
	
		<div class="container">
		
			<div class="header">
				<h1>CPSC 332 Database Project</h1>
				<h2>By Javier Canedo, Danah Mohammad, and Ashley Thorlin</h2>
			</div>
			
			<div class="tab">
				<button class="tablinks active" onclick="openTab(event, 'Homepage')">Home</button>
				<button class="tablinks" onclick="openTab(event, 'Professor')">Professor</button>
				<button class="tablinks" onclick="openTab(event, 'Student')">Student</button>
			</div>
			
			<! tab content>
			<div id="Homepage" class="tabcontent" style = "display:block">
			
				<div id="home-data" class="tabdata">
					<h3>Please choose Professor or Student to access the database.</h3>
				</div>
				
			</div>
			
			<div id="Professor" class="tabcontent">
			
				<div id="class-data" class="tabdata">
				
					<h3>Class Data</h3>
					<form class="entry-form" action="professordata.php" method="post">
						<div class="input-form">
							<label id="ssn-label" for="ssn">SSN:</label>
							<input type="text" id="ssn" name="ssn" value=""><br>
						</div>
						
						<div class="submit-form">
							<input class="submit" name="submit-ssn" type="submit" value="Submit">
						</div>
						
					</form>
				
					<p>insert class data table here</p>
				
				</div>
				
				<div id="grades-data" class="tabdata">
				
					<h3>Grades per Class</h3>
					<form class="entry-form" action="professordata.php" method="post">
						<div class="input-form">
							<label id="cnump-label" for="cnum">Course Number:</label>
							<input type="text" id="cnum" name="cnum" value=""><br>
					
							<label id="snum-label" for="snum">Section Number:</label>
							<input type="text" id="snum" name="snum" value=""><br>
						</div>
						
						<div class="submit-form">
							<input class="submit" name="submit-nums" type="submit" value="Submit">
						</div>
						
					</form>
				
					<p>insert grade table here</p>
				
				</div>
				
			</div>
			
			<div id="Student" class="tabcontent">
				<div id="course-data" class="tabdata">
				
					<h3>Course Data</h3>
					<form class="entry-form" action="studentdata.php" method="post">
						<div class="input-form">
							<label id="cnum-stu-label" for="cnum-stu">Course Number:</label>
							<input type="text" id="cnum-stu" name="cnum-stu" value=""><br>
						</div>
						
						<div class="submit-form">
							<input class="submit" name="submit-cnum-stu" type="submit" value="Submit">
						</div>
						
					</form>
				
					<p>insert course data table here</p>
					
				</div>
				
				<div id="student-data" class="tabdata">
				
					<h3>Course History</h3>
					<form class="entry-form" action="studentdata.php" method="post">
						<div class="input-form">
							<label id="cwid-label" for="cwid">CWID:</label>
							<input type="text" id="cwid" name="cwid" value=""><br>
						</div>
						
						<div class="submit-form">
							<input class="submit" name="submit-cwid" type="submit" value="Submit">
						</div>
						
					</form>
				
					<p>insert course history table here</p>
					
				</div>
				
			</div>
			
		</div>
		
	</body>
	
</html>	