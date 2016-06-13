<!DOCTYPE html>
<html>
<head>
	<title>
		registration success!
	</title>
	<style>

 body
 {
    border:5px ridge black;
    width: 500px;
    height:500px;
    margin:30px;

   margin-left: 360px;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 30px;
}
.error {color: #FF0000;}
	</style>
</head>
<body>
<h1 style="font-style: italic;text-align: center;text-shadow: 2px 2px #FF0000;" >CREATIVE CODING</h1>
<h3 style="text-align:center;" >workshop registration</h3>
<?php
echo "<h2>student details:</h2>";
$nameErr = $emailErr = $genderErr = $colnameErr = $deptErr = $telnumErr ="";

$name = $email = $gender = $comment = $colname =$dept= $telnum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
     echo $nameErr;
   } else {
     $name = test_input($_POST["name"]);
     echo "<strong>Student name<span style=margin-right:8em ></span>:</strong>&nbsp;&nbsp;&nbsp;".$name;
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = " name error";
       echo $nameErr;
     }
   }
  echo "<br><br>";
   if (empty($_POST["email"])) {
     $emailErr = "E-mail is required";
     echo $emailErr;
   } else {
     $email = test_input($_POST["email"]);
     echo"<strong>E-mail<span style=margin-right:10.9em ></span>:</strong>&nbsp;&nbsp;&nbsp;".$email;

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
       echo $emailErr;
     }
   }
   echo "<br><br>";
   if (empty($_POST["colname"])) {
     $colnameErr = "College name is required";
     echo $colnameErr;
   } else {
     $colname = test_input($_POST["colname"]);
     echo"<strong>College Name<span style=margin-right:7.9em ></span>:</strong>&nbsp;&nbsp;&nbsp;". $colname;
     if (!preg_match("/^[a-zA-Z ]*$/",$colname)) {
       $colnameErr = " error in collge name";
        echo $colnameErr;
     }  
   }
   echo "<br><br>";
   if (empty($_POST["dept"])) {
     $deptErr = "Department is required";
     echo $deptErr;
   } else {
     $dept = test_input($_POST["dept"]);
     echo "<strong>Department<span style=margin-right:8.54em ></span>:</strong>&nbsp;&nbsp;&nbsp;".$dept;

     if (!preg_match("/^[a-zA-Z ]*$/",$dept)) {
       $deptErr = " error in dept name";
       echo $deptErr;
     }
   }
    echo "<br><br>";  
   if (empty($_POST["telnum"])) {
     $telnumErr= "Phone number is required";
     echo $telnumErr;
   } else {
     $telnum = test_input($_POST["telnum"]);
 echo"<strong>Phone Number<span style=margin-right:7.3em ></span>:</strong>&nbsp;&nbsp;&nbsp;".  $telnum;
     if (!preg_match("/^[0-9 ]*$/",$telnum)) {
       $telnumErr = " Only numbers allowed";
       echo $telnumErr;
     }
   }
   echo "<br><br>";
   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
     echo $genderErr;
   } else {
     $gender = test_input($_POST["gender"]);
     echo "<strong>Gender<span style=margin-right:10.6em></span>:</strong>&nbsp;&nbsp;&nbsp;".$gender;   }
}

echo "<br><br>";
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>
<strong>Note:</strong><p>students are requested to bring their college id card on the day of workshop
</p>
</body>
</html>

