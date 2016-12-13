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