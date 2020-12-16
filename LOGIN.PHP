<!DOCTYPE HTML>
<html>
<head> 
<style>
//.blink {
-webkit-animation-name: blinker;
-webkit-animation-duration: 1.5s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 1s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color:maroon;
 font-size:16px;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 } 
</style> 
<title>SIGNUP PAGE</title>
<link rel = "stylesheet" href = "style.css">
</head>
<center><strong><h1 id="sty" style="font-size: 50px; color:white";>Employee Attendance Tracking System</h1></strong></center>
<body>
	<marquee><a href="LOGIN.PHP"><img src = "crowe.jpeg" width = "250x" height = "150px" class="crowe"/></a></marquee>
	<p class="blink" id="sty" style="text-align: center">CREATE ACCOUNT OR SIGNIN</p>
			
	<br \>

<h2>signin here!</h2>
<form action="signin.php" method="POST">
<label style="font-size: 20px" id="clr">Email:</label>
<input type="text" name="email" placeholder="Enter your email" />

<label style="font-size: 20px" id="clr">Password:</label>
<input type="password"  name="passwords" placeholder="Enter your password" />
<input type="submit" id="btn" value="Signin"> </form>

<div id="frm">
<form action="send.php" method="POST">
<p>
<label style="font-size: 20px">Employee Name:</label>
<input type="text" name="employeename" placeholder="Enter your name" /></p>

<p>
<label style="font-size: 20px">Email:</label>
<input type="text" name="email" placeholder="Enter email id" />
</p>
<p>
<label style="font-size: 20px">Password:</label>
<input type="password" name="passwords" placeholder="Enter your password" />
</p>
<br>
<BUTTON type="SUBMIT" VALUE="SUBMIT">SUBMIT</BUTTON>

</form>
</div>
</body>

</html>

<?php include 'sqlquery.php'; ?>
<html>
<marquee>developed by Fassou <br> @scorpioncoder<marquee>
    </html>