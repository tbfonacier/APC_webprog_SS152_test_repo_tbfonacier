<!DOCTYPE HTML>  
<html>
<head>
<style>
h1 {color: rgb(203,183,76);
    font-family: "Comic Sans MS", cursive, sans-serif; }
p,h2,form { color: rgb(239,233,201);
    font-family: "Courier New", Courier, monospace; }
    .button {
     display: inline;
     font-family: sans-serif;
     font-weight: bold;
     float: left;
     margin: 12px;
     margin-top: -10px;
     padding: 8px;
    }
.error {color: rgb(239,233,201); }
body {background-image: url("bg.jpg");}

p{
    margin-bottom: 20px;
}
</style>
</head>
<body>

  <div>
   <input type="button" class="button" value="Leave a Comment" onclick="location.href='php.html'">
   <input type="button" class="button" value="Q&A" onclick="location.href='javascript.html'">
   <input type="button" class="button" value="About Me" onclick="location.href='myhomepage.html'">
   <input type="button" class="button" value="Home" onclick="location.href='newHomepage.html'">
  </div>



<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $genderErr = $phoneErr = $homeadErr = "";
$name =$nickname= $email = $gender = $comment = $phone = $homead = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
    if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    if (empty($_POST["phone"])) {
    $phoneErr = "Phonenumber is required";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^([0-9]*)$/",$phone)) {
      $phoneErr = "Only numbers allowed"; 
    }
  }
    
  if (empty($_POST["homead"])) {
    $homead = "";
  } else {
    $homead = test_input($_POST["homead"]);
    }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
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
<br><br>
<center><h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:<input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname:<input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Phonenumber: <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Home Address: <input type="text" name="homead" value="<?php echo $homead;?>">
  <span class="error"><?php echo $homeadErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit"></center> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $homead;
echo "<br>";
echo $comment;
echo "<br>";
echo $phone;
echo "<br>";
echo $gender;
?>

</body>
</html>