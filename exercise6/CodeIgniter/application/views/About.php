<!DOCTYPE html>
<html>
<head>
<title>All about me</title>
<style>

h1 {color: rgb(203,183,76);
    font-family: "Comic Sans MS", cursive, sans-serif; }
p,h2 { color: rgb(239,233,201);
    font-family: "Courier New", Courier, monospace; }

#title {background-color:black;}
#intro {background-color:black;}
#hobbies-interests {background-color:black;}
#hobbies-interests2 {background-color:black;}
#fav {background-color:black;}
#funny {background-color:black;}

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
				#nav {
					position: absolute;
					width: 100%;
					height: 50px;
				}
</style>
</head>
<body background="assets/img/bg.jpg">
	<div id="header">
		<div id="nav">
			<img src="assets/img/eg.jpg" id="logo" />
			<p id="logo_text">L o t s o V</p>
				<?php include 'links.php'; ?>
		</div>
<center>
<h1 id="title">WHO AM I?</h1>
</font>
<img src="assets/img/1.jpg" alt="My Picture" style="width:200px;height:200px;">

<p id="intro">I am <b>Tyrone Edward B. Fonacier</b><br>you can call me <em>Tyrone</em></p>

<h2 id="hobbies-interests">My Hobbies and Interests:</h2>

<p id="hobbies-interests2">Csgo<br>Dota 2<br>Betting<br>Watching Movies<br>Badminton<br>Basketball<br>Table Tennis</p>

<h2 id="fav">My Favorite Websites:</h2>

<a href="https://www.facebook.com/">
<img src="assets/img/f.png" alt="Facebook.com" style="width:84px;height:84px;border:0"></a>

<a href="https://www.twitch.tv/">
<img src="assets/img/t.png" alt="Twitch.tv" style="width:84px;height:84px;border:0"></a>

<a href="https://www.youtube.com/">
<img src="assets/img/y.png" alt="Youtube.com" style="width:84px;height:84px;border:0"></a>

<h2 id="funny">Funny CS:GO .GIF</h2>
<p><img src="assets/img/giphy2.gif" alt="csgofunny" style="width:200px;height:200px;"><img src="assets/img/giphy.gif" alt="assets/img/csgofunny2" style="width:200px;height:200px;"><img src="assets/img/giphy3.gif" alt="csgofunny3" style="width:200px;height:200px;"></p>

<p id="demo"></p>

<script>
var day;
switch (new Date().getDay()) {
    case 0:
        day = "Sunday :)";
        break;
    case 1:
        day = "Monday :)";
        break;
    case 2:
        day = "Tuesday :)";
        break;
    case 3:
        day = "Wednesday :)";
        break;
    case 4:
        day = "Thursday :)";
        break;
    case 5:
        day = "Friday :)";
        break;
    case  6:
        day = "Saturday :)";
}
document.getElementById("demo").innerHTML = "Hi, I just want to tell you that today is " + day;
</script>


</font>
</center>
</body>
</html>