<!DOCTYPE HTML>  
<html>
<head>
  <style>
  

  </style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $phone_no=$address=$gender = $languages_known=$comment = $website = "";
$nameErr = $emailErr = $phone_noErr=$addressErr=$genderErr = $languages_knownErr=$commentErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["name"])){
    $nameErr="name is requird";
  }
  else{
    $name = test_input($_POST["name"]);

    // check if name only contains letters and whitespace
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
  }
  }
  $email = test_input($_POST["email"]);
  $phone_no=test_input($_POST["phone_no"]);
  $address=test_input($_POST["address"]);
  $languages_known=test_input($_POST["languages_known"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
<h2>PHP Form Validation </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" placeholder="name should be caps">
  <br><br>
  E-mail: <input type="text" name="email" placeholder="enter valid mail id">
  <br><br>
  Phone No:<input type="text" name="phone_no" placeholder="enter phone_no">
  <br><br>
  Address:<textarea name="address" rows="5" coloumn="30" placeholder="enter prmanent address"></textarea>
  <br><br>
Languages Known:<input type="radio" name="languages_known" value="bengali">bengali
<input type="radio" name="languages_known" value="hindi">Hindi
<input type="radio" name="languages_known" value="english">English
<br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</center>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo$phone_no;
echo"<br>";
echo$address;
echo"<br>";
echo$languages_known;
echo"<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>