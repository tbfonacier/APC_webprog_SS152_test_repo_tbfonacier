<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $First_name = $_POST['first_name'];
 $Last_name = $_POST['last_name'];
 $Nickname = $_POST['nickname'];
 $Email = $_POST['email'];
 $Phone_number = $_POST['phone_number'];
 $Home_address = $_POST['home_address'];
 $Comment = $_POST['comment'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(First_name,Last_name,Nickname,Email,Phone_number,Home_address,Comment) VALUES('$First_name','$Last_name','$Nickname','$Email','$Phone_number,'$Home_address','$Comment')";
 $con=mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
		// sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occurred');
  </script>
  <?php
 }
 // sql query execution function
}
?>
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>asdf</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
    </tr>
	    <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
	    <tr>
    <td><input type="text" name="phone_number" placeholder="Phone Number" required /></td>
    </tr>
	    <tr>
    <td><input type="text" name="home_address" placeholder="Home Address" required /></td>
    </tr>
	    <tr>
    <td><input type="text" name="comment" placeholder="Comments" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>