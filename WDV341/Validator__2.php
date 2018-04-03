<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #CC0000;}
</style>
</head>
<body>  

<?php
// defining variables and set them to empty values
$nameError= $emailError = $genderError ="";
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
   $nameError = "Name is required";
  } else {
   $name = test_input($_POST["name"]);
   // check if name only contains letters and whitespace
   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
   $nameError = "Only letters and white space are allowed";
   }
  }
  
  if (empty($_POST["email"])) {
   $emailErr = "Email is required";
  } else {
   $email = test_input($_POST["email"]);
   // email validation
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $emailError= " Email is in invalid format";
   }
  }
  
if (empty($_POST["gender"])) {
   $genderErr = "Gender is required";
  } else {
   $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form </h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echohtmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameError;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailError;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderError;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Input</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";

echo $gender;
?>

</body>
</html>