<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <style>
div.container{border-top-right-radius: 5em;border-top-left-radius:5em;
}
.container img 
{ -webkit-border-radius: 50px; 
-khtml-border-radius: 50px;	
-moz-border-radius: 50px; 
border-radius: 90px; 
box-shadow: 2px 2px 5px #888888; 
}
label{color:wheat;font-size:20px;
}
h1{
	text-align:center;
	color:white;
	font-size:50px;
}
form{
	text-align:right;
	font-size:20px;
}
div.background {
  background: url(images/whe.jpg);
  background-size:cover;
  width:1170px;
  align:center;
  height:400px;
  border: 4px solid white;
}
div.background1
{background-color:wheat;
width:1170px;
  align:center;
  height:700px;
border: 10px solid white;
margin:auto;
}
div.content2{
height:570px; 
margin:0 auto; 
//padding:0 0 340px; 
width:1000px; 
}
div.background2
{background-color:wheat;
width:670px;
height:560px;
border: 10px solid white;
float:left;
margin:auto;
margin-right:0;
}
div.right
{
width:500px; 
margin-left:0px;
height:560px;
float:left;
background-color:snow;
}
div.content3{
height:590px; 
margin:0 auto; 
//padding:0 0 340px; 
width:1000px; 
}
div.background3
{background-color:black;
width:670px;
height:570px;
border: 10px solid white;
float:left;
margin:auto;
margin-right:0;
}
div.right1
{
width:500px; 
margin-left:0px;
height:570px;
float:left;
background-color:snow;
}
h3
{
	color:red;
	align:left;
	font-family:Times New Roman;
}
h4{
	font-family:Times New Roman;
}
span{color:red;}
div.transbox {
 padding-top:20px;
display:inline;
  margin: 30px;
  background-color: #ffffff;
  //border: 1px solid black;
  opacity: 0.6;
  
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox td{
  margin: 5%;
  font-weight: bold;
  color:white;
  
}
.transbox td{
margin:0;
border-top:30px;
//border-padding-right:60px;
//border-padding-top:60px;
background-color:black;
border-radius:50%;
border:solid #000000 3px;
width:100px;
height:100px;
text-align:center;
font-size:20px;
}
.transbox table {
    border-collapse: separate;
    border-spacing: 80px 50px;
	align:center;
}
a{color:white;
}
a:hover{
background-color:yellow;
color:blue;
}
hr{
  border-top: 2px solid maroon;
  height:5px;
}
fieldset{
align:justify;
-webkit-border-radius: 20px; 
-khtml-border-radius: 20px;	
-moz-border-radius: 20px; 
border-radius: 20px;
border:2px solid black;
width:600px;
padding-left:2em;
padding-right:28em;
border-top:5px solid black;
}
div.border{
  outline: 6px dashed yellow;
  box-shadow: 0 0 0 6px #EA3556;
  width: 210px;
  height: 100px;
}
</style>
</head>
<body style="background-color:aqua;background-image:url(images/back1.jpg);width:100%">
<div class="wrapper">
<a name="top"></a>
<div class="container" style="background-color:olivedrab">

<img src="images/logo.jpg" alt="Mountain View" style="width:304px;height:228px;">
<table align="right">
<tr>
  <td style="width:70%;vertical-align:top;padding-right:3px;text-align:left;"><h1>Jai Jawan Jai Kisan</h1></br></br>
  <table align="right">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
  <tr><td><label>Username</label></td>
  <td style="padding-right: 10px;padding-left: 10px"><label>password</label></td>
  <td></td></tr>
  <tr><td>
  <input type="text" name="name" width="20%"/></td>
  <td style="padding-right: 10px;padding-left: 10px;color:black"><input type="password" name="pass" width="20%"/></td>
  <td><button  class="btn btn-lg btn-primary btn-block" type="submit" name="submitted">Farmer Login</button></td></tr>
  <tr>
  <td style="padding-right:10px;"><button  class="btn btn-lg btn-primary btn-block" type="submit" name="submit1">Admin Login</button></td>
  <td style="padding-left:10px;padding-right:10px;"><button  class="btn btn-lg btn-primary btn-block" type="submit" name="submit2">Customer Login</button></td>
  <td style="padding-top:2px;"><button  class="btn btn-lg btn-primary btn-block" type="submit" name="submit3">Agent Login</button></td>
  </tr></table>
  <?php
session_start();
$host="localhost"; 
$username=""; 
$password=""; 
$db_name="test"; 
$tbl_name="signup"; 
$name=$pass=NULL;
if (!empty($_POST) && isset($_POST['submitted']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];
$name = stripslashes($name);
$pass = stripslashes($pass);
$name = mysql_real_escape_string($name);
$pass= mysql_real_escape_string($pass);
$_SESSION['name']=$name;
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="select * from $tbl_name where name='$name' and password='$pass'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
 header('Location:user.php');
}
else if($count==0)
{
	echo "<script type='text/javascript'>alert('Invalid Login!')</script>";
}
}
?>
 <?php
$host="localhost"; 
$username=""; 
$password=""; 
$db_name="test"; 
$tbl_name="admin"; 
$name=$pass=NULL;
if (!empty($_POST) && isset($_POST['submit1']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];
$name = stripslashes($name);
$pass = stripslashes($pass);
$name = mysql_real_escape_string($name);
$pass= mysql_real_escape_string($pass);
$_SESSION['name']=$name;
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="select * from $tbl_name where name='$name' and pass='$pass'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
 header('Location:admin.php');
}
else if($count==0)
{
	echo "<script type='text/javascript'>alert('Invalid Login!')</script>";
}
}
//else 
//{
	//echo "<script type='text/javascript'>alert('please fill the fields!')</script>";
//}
?>
<?php
$host="localhost"; 
$username=""; 
$password=""; 
$db_name="test"; 
$tbl_name="custsign"; 
$name=$pass=NULL;
if (!empty($_POST) && isset($_POST['submit2']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];
$name = stripslashes($name);
$pass = stripslashes($pass);
$name = mysql_real_escape_string($name);
$pass= mysql_real_escape_string($pass);
$_SESSION['name']=$name;
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="select * from $tbl_name where name='$name' and password='$pass'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
 header('Location:veget.php');
}
else if($count==0)
{
	echo "<script type='text/javascript'>alert('Invalid Login!')</script>";
}
}
?>
<?php
$host="localhost"; 
$username=""; 
$password=""; 
$db_name="test"; 
$tbl_name="agentlogin"; 
$name=$pass=NULL;
if (!empty($_POST) && isset($_POST['submit3']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];
$name = stripslashes($name);
$pass = stripslashes($pass);
$name = mysql_real_escape_string($name);
$pass= mysql_real_escape_string($pass);
$_SESSION['name']=$name;
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="select * from $tbl_name where user='$name' and password='$pass'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
 header('Location:agent.php');
}
else if($count==0)
{
	echo "<script type='text/javascript'>alert('Invalid Login!')</script>";
}
}
?>
</form></td></tr></table>
</div>
	<div id="content" style="padding-top:2em;padding-left: 6.5em;padding-right: 2em;margin: auto;">
	<div class="background" >
  <div class="transbox"><p>
  </p>
  </br><center>
  <table colspan=1>
  <tr style="border-top:20px">
    <td border="2" style="background-color:white;color:black"><a href="home.php" style="color:black;">Home</a></td>
	<td border=2><a href="#about">About Us</a></td>
	<td border=2><a href="#contact">Contact Us</a></td>
	<td border=2><a href="#sign">Sign Up</a></td>
	<td><a href="guest.php">Guest</a></td></tr></table>
  </center></div>
</div>
</div>
	<div class="content1" style="padding-top:5em;padding-left:-2em;margin: auto;">
	 <div class="background1">
	 <a name="about"></a>
		<h1 style="color:maroon">About us</h1>
	<!--<h3 style="color:maroon;font-size:2em"><center>&quotWe help people to maintain fitness&quot</center></h3>-->
	<img src="images/hima.jpg" align="left" width="200" height="230" style="padding-right:1em">
	<p></p></br>
	<p style="font-size:1.5em;color:black;font-family:TIMES NEW ROMAN">I am Himasree. I am doing my post graduation in VIT UNIVERSITY. </br>
	Interested in developing web applications that are very useful to people now-a-days. I am good in web development technologies like HTML,CSS,PHP,JAVASCRIPT,PYTHON</br>
	</p><br/><br/><br/><br/><br/><br/><hr height="1" ></hr>
	<img src="images/jyo.jpg" align="right" width="250" height="200" >
	<p style="font-size:1.5em;color:black;font-family:TIMES NEW ROMAN;padding-left:1em">I am Jyoshna.I am doing my post graduation in VIT UNIVERSITY. </br>
	I am good in web development technologies like HTML, CSS, PHP, JAVASCRIPT,PYTHON.We have done some of the useful projects like REGIMEN CONTROL,RECIPE MANAGEMENT SYSTEM.</br>
	</p></br></br></br></br></br>
	<b><u><a href="#top" style="font-size:25px;color:red;text-align:right;">Go to top</a></u></b>
		</div>
	</div>
	<div class="content2" style="padding-top:5em;padding-left:-2em;margin: auto;width:1170px;padding-bottom:3em;">
	 <div class="background2"><br/><br/>
	 <fieldset style="font-size:15px"><a name="contact"></a>
		<legend style="font-size:2em">Contact us</legend>
		<form style="float:left">
		<p style="text-align:left;font-size:17px"><label style="color:black">Name</label><span>*</span><br/>
		<input type="textbox" name="name"/><br/>
		<label style="color:black">Mobile No</label><span>*</span></br>
		<input type="textbox" name="no"/><br/>
		<label style="color:black">Email</label><span>*</span><br/>
		<input type="textbox" name="mail"/><br/>
		<label style="color:black">Message</label><span>*</span><br/>
		<textarea cols="30" rows="6" placeholder="Enter message here"/></textarea></p><br/>
		<center> <input type="submit" name="send" value="SEND" style="background-color:red;"/></center>
		</form>
		</fieldset>
	 </div>
	 <div class="right">
	  <center>
	  <h3>EMAIL</h3>
	  <h4 style="color:black">Smartcodzz@codz.ac.in</h4></br>
	  <h3>TELEPHONE</h3>
	  <h4 style="color:black">8682034567</h4><br/>
	  <h3>ADDRESS</h3>
	  <h4 style="color:black">VIT university chennai campus <br/>vandalur-kelambakkam road<br/>chennai<br/>Tamil Nadu-600048</h4>
	</div>
	</div>
	
	<div class="content3" style="padding-top:10em;padding-left:-2em;margin: auto;width:1170px">
	 <div class="background3"><br/><br/>
	 <header>
 <center>
        <h2>Sign Up</h2></center></header>
		<center><a name="sign"></a>
	 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form" onsubmit="return validate_all('results');" style="padding-left:5em">
            <table cellspacing="10" >
                <tr><td style="padding-top:1em">Name</td><td style="padding-top:1em"><input type="text" name="login" maxlength="20" id="login" onKeyUp="updatelength('login', 'login_length')"><br /><div id="login_length"></div> </td></tr>
               <tr><td>Password</td><td><input type="password" name="pass" maxlength="25" id="password" onKeyUp="updatelength('password', 'pass_length')"><div id="pass_result"></div><br /><div id="pass_length"></div></td></tr>
                <tr><td>Confirm Password</td><td><input type="password" name="cpass" maxlength="25" id="c_password"></td></tr>
                <tr><td>Gender</td>
				<td><select name="gender">
				<option value="male">male</option>
				<option value="female">female</option></select>
				</td></tr>
                <tr><td>Email</td><td><input type="text" name="email" maxlength="50" id="email" onKeyUp="updatelength('email', 'email_length')"><br /><div id="email_length"></div></td></tr>
                <tr><td colspan="2"><input type="submit" name="submit" value="Farmer Register" onclick="alert()"></td>
				<td colspan="2"><input type="submit" name="sub" value="Customer Register" onclick="alert()"></td></tr>
				
			</table>
            <h3 id="results"></h3></center>
        </form>
		<?php
$host="localhost"; 
$username=""; 
$password=""; 
$db_name="test"; 
$tbl_name="signup"; 
if (!empty($_POST) && isset($_POST['submit']))
{
$name=$_POST['login'];
$pass=$_POST['pass'];
$gen=$_POST['gender'];
$mail=$_POST['email'];
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if(mysql_num_rows(mysql_query("select * from signup where name='$name'"))>0)
{
	echo '<script type="application/javascript">alert("Username already exists with this name"); </script>';
}
else{
$sql="insert into $tbl_name(name,password,gender,mail) values('$name','$pass','$gen','$mail')";
if(mysql_query($sql))
{
echo '<script type="application/javascript">alert("Registered"); </script>';
}
else
{	
	echo '<script type="application/javascript">alert("Not Registered"); </script>';
}
}
}
?>
	<?php
$host="localhost"; 
$username=""; 
$password=""; 
$db_name="test"; 
$tbl_name="custsign"; 
if (!empty($_POST) && isset($_POST['sub']))
{
$name=$_POST['login'];
$pass=$_POST['pass'];
$gen=$_POST['gender'];
$mail=$_POST['email'];
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if(mysql_num_rows(mysql_query("select * from $tbl_name where name='$name'"))>0)
{
	echo '<script type="application/javascript">alert("User already exists with this name"); </script>';
}
else{
$sql="insert into $tbl_name(name,password,gender,mail) values('$name','$pass','$gen','$mail')";
if(mysql_query($sql))
{
echo '<script type="application/javascript">alert("Registered"); </script>';
}
else
{	
	echo '<script type="application/javascript">alert("Not Registered"); </script>';
}
}
}
?>
	 </div>
	 <div class="right1">
	  <center>
	  <h1 style="color:maroon">Illiterate Farmers</h1>
	  </br></br>
	  <b><p style="color:red;font-size:20px;">Contact this toll-free number</p></b></br>
	  </br>
		<div class="border" style="padding:10px">
	  <b style="color:black;font-size:25px;text-align:center;padding-top:1em;">1180-2367888</b></div>
	  </center>
	 </div>
	</div>
</div>
</body>
</html>
