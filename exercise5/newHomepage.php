<!DOCTYPE html>
<html>
	<head>
		<title>HomePage</title>
			<style>
				body {
					margin: 0;
				}
				
				#header {
					position: relative;
					width: 100%;
					height: 1000px;
					background-image: url('dota2.jpg');
					background-repeat: no-repeat;
					background-size: 100% 100%;
					background-color: gray;
					
				}
				
				#nav {
					position: absolute;
					width: 100%;
					height: 50px;
				}
				
				
				#logo {
					width: 30px;
					height: 30px;
					margin-top: 15px;
					margin-left: 15px;
				}
				
				#logo_text {
					position: absolute;
					display: inline;
					top: 5px;
					left: 55px;
					font-size: 22px
					font-family: Georgia;
					color: white;
					font-weight: bold;
				}
				
				#welcome_text_div {
					position: absolute;

					width: 800px;
					height: 200px;
					top: 25%;
					margin-top -150px;
					left: 50%;
					margin-left: -400px;

				}
				
				#welcome_text {
					color: white;
					font-family: Georgia;
					text-transform: uppercase;
					font-weight: bold;
					font-size: 55px;
					text-align: center;

				}
				
				#table {
					color: white;
				}
				
				.button {
					-webkit-border-radius: 6;
					-moz-border-radius: 6;
					border-radius: 6px;
					font-family: Georgia;
					color: #ffffff;
					font-size: 12px;
					padding: 6px;
					background: #000000;
					border: solid #ffffff 2px;
					text-decoration: none;
					float: right;
					margin: 5px;
					margin-top: 15px
				}

				.button:hover {
					  background: #d42020;
					  background-image: -webkit-linear-gradient(top, #d42020, #000000);
					  background-image: -moz-linear-gradient(top, #d42020, #000000);
					  background-image: -ms-linear-gradient(top, #d42020, #000000);
					  background-image: -o-linear-gradient(top, #d42020, #000000);
					  background-image: linear-gradient(to bottom, #d42020, #000000);
					  text-decoration: none;
				}
			</style>
	</head>
<body>
	<div id="header">
		<div id="nav">
			<img src="eg.jpg" id="logo" />
			<p id="logo_text">L o t s o V</p>
			<input type="button" class="button" value="Leave a Comment" onclick="location.href='edit_data.php'">
			<input type="button" class="button" value="Q&A" onclick="location.href='javascript.html'">
			<input type="button" class="button" value="About Me" onclick="location.href='myhomepage.html'">
			<input type="button" class="button" value="Home" onclick="location.href='newHomepage.html'">
		</div>
		<div id="welcome_text_div">
			<p id="welcome_text">Welcome Home</p>
		</div>
</body>
</html>

<?php
 include_once 'dbconfig.php';
 
 // delete condition
 if(isset($_GET['delete_id']))
 {
  $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
  mysqli_query($con,$sql_query);
  header("Location: $_SERVER[PHP_SELF]");
  }
 // delete condition
 ?>
  

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <style>
 th, td {
    padding: 15px;
	}
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Thomas</title>
 
 <script type="text/javascript">
 function edt_id(id)
 {
  if(confirm('Sure to edit ?'))
  {
   window.location.href='edit_data.php?edit_id='+id;
  }
  }
 function delete_id(id)
 {
  if(confirm('Sure to Delete ?'))
  {
   window.location.href='homepage.php?delete_id='+id;
  }
  }
 
 </script>
  </head>
  </style>
 <center>
  <body>

  
 <div id="table">
  
     <table align="center">
	 
	 
     <tr>
	 
     <th colspan="9"><a  href="add_data.php">add data here.</a></th>
	 
     </tr>
	
    <th>Name</th>
    <th>Nickname</th>
     <th>Email</th>
 	<th>Phone</th>
 	<th>Home Address</th>
 	<th>Comment</th>
 	<th>Gender</th>
	
 	
   <th colspan="2">Operations</th>
     </tr>
     <?php
  $sql_query="SELECT * FROM users";
  $result_set=mysqli_query($con,$sql_query);
  while($row=mysqli_fetch_row($result_set))
  {
   ?>
   
         <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
 		<td><?php echo $row[4]; ?></td>
 		<td><?php echo $row[5]; ?></td>
 		<td><?php echo $row[6]; ?></td>
 		<td><?php echo $row[7]; ?></td>
 		
		 <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
         <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
         </tr>
   <?php     
  }
  ?>
     </table>
     </div>
 </div>
  
 <center>
 <?php
 
 
 // define variables and set to empty values
 $nameErr = $nicknameErr = $emailErr = $genderErr = $phoneErr = $homeadErr = "";
 $name =$nickname= $email = $gender = $comment = $phone = $homead = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z-0-9]*$/",$name)) {
       $nameErr = "Only letters,numbers and white space allowed"; 
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
 </center>
  </body>
  </html>