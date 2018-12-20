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
		<form action ="Moduleenrol.php" method = "post">
		    <legend>Student ID:<legend>
            <input type="text" name = "Student_ID"/>
           
		</fieldset>

		        <fieldset>
		<form action ="Moduleenrol.php" method = "post">
		    <legend>Module Code:<legend>
            <input type="text" name = "module_code"/>
         
		</fieldset>
		        <fieldset>
		<form action ="Moduleenrol.php" method = "post">
		    <legend>Module Name:<legend>
            <input type="text" name = "module_name"/>
			<input type = "submit" value = "submit">




<?php
$Student_ID = $_POST['Student_ID'];
$module_code = $_POST['module_code'];
$module_name = $_POST['module_name'];
$sql = "Insert into Modules (Student_ID, module_code, module_name)
VALUES ('" .$Student_ID. "','" .$module_code. "','" .$module_name. "')";
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