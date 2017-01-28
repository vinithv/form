<!DOCTYPE HTML> 
<html>
<head>
<style >
form#f1
   {
    border:5px ridge black;
   
    margin:30px;

    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=tel]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.error {color: #FF0000;}

</style>
</head>
<body> 



<h1 style="font-style: italic;text-align: center;text-shadow: 2px 2px #FF0000;" >CREATIVE CODING</h1>
<h3 style="text-align:center;" >workshop registration</h3>
<?php
$name = $email = $gender = $comment = $colname =$dept= $telnum = "";
?>


<form method="post" action="process.php" id="f1">
   <span class="error">*</span>required field<br><BR>
  <strong> Name:<span class="error">*</span></strong> <input type="text" name="name" value="<?php echo $name;?>">
   <br><br>
   <strong>E-mail:</strong> <input type="email" name="email" value="<?php echo $email;?>">
   
   <br><br>
   <strong>Phone number :<span class="error"> *</span></strong> <input type="tel" name="telnum" value="<?php echo $telnum;?>">
   
   <br><br> 
   <strong>Gender : <span class="error">*</span></strong>&nbsp;   &nbsp;
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
       <br><br>
   <strong> college name :<span class="error"> *</span> </strong><input type="text" name="colname" value="<?php echo $colname;?>">
      <br><br>
   <strong>Department : </strong><input type="text" name="dept" value="<?php echo $dept;?>">
  
   <br><br>
   <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>
