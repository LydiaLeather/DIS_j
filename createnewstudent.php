    <?php
$servername = "mysql.cs.nott.ac.uk";
$username = "mbylcl";
$password = "lydiasmells";
$dbname = "mbylcl";

// creating connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        body {
            background-color: lightblue;
        }

        h1 {
            color: black;
            text-align center;
        }

        p {
            color: blue;
        }

       
        table, th, td {
            border: 1px solid black;
        }

        table.MsoTableGrid {
            border: solid windowtext 1.0pt;
            font-size: 11.0pt;
            font-family: "Calibri",sans-serif;
        }

        p.MsoNormal {
            margin-top: 0cm;
            margin-right: 0cm;
            margin-bottom: 8.0pt;
            margin-left: 0cm;
            line-height: 107%;
            font-size: 11.0pt;
            font-family: "Calibri",sans-serif;
        }

        .auto-style1 {
            width: 406px;
        }
  
</style>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
        <fieldset>
		<form action ="createnewstudent.php" method = "post">
		    <legend>Student ID:<legend>
            <input type="text" name = "Student_ID"/>
           
		</fieldset>

		        <fieldset>
		<form action ="createnewstudent.php" method = "post">
		    <legend>Name:<legend>
            <input type="text" name = "Name"/>
         
		</fieldset>
		        <fieldset>
		<form action ="createnewstudent.php" method = "post">
		    <legend>Degree:<legend>
            <input type="text" name = "Degree"/>
          
		</fieldset>
		        <fieldset>
		<form action ="createnewstudent.php" method = "post">
		    <legend>Year:<legend>
            <input type="text" name = "Year"/>
            <input type = "submit" value = "submit">
		</fieldset>



<?php
$Student_ID = $_POST['Student_ID'];
$Name = $_POST['Name'];
$Degree = $_POST['Degree'];
$Year = $_POST['Year'];
$sql = "Insert into student (Student_ID, Name, Degree, Year)
VALUES ('" .$Student_ID. "','" .$Name. "','" .$Degree. "','" .$Year. "')";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    echo "New record created successfully";
}
$conn->close(); 

?>
<p><a href = "homepage.php">Back</a></p>
</body>
</html>