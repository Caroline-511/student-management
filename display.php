<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"student");
if($db)
{
	//echo "connected succesfully";
}
else{
	echo "not connected";
}
?>



<!DOCTYPE html>
<html>

<head>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: rgb(76, 139, 175);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  width:500px;
  margin-left:750px;
}

.f1{
    width:550px;
    margin-left:700px;
	border-radius:40px;
}

.f2{
	position:absolute;
	width:400px;
	margin-left:10%;
	margin-top:10%;
	border-radius:30px;
	text-shadow:2px 2px blue;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color:white;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

mark{
	background:lightblue;
}

mark1{
	background:snow;
}

img{
  max-width:180px;
}
input[type=file]{
padding:10px;
background:lightblue;}

.p1{
	position:absolute;
	margin-left:-35%;
	margin-top:-15%;
}

.b1{
	position:absolute;
	margin-left:14%;
	margin-top:-1%;
}

body {
 background-image: url("nitte.jpg");
 background-attachment:fixed;
 background-repeat:no-repeat;
 background-size:100%;
}


.hi{
	max-width: 600px;
	padding: 10px 10px;
    background:blue;
	margin: 5px auto;
	padding: 10px;
	background:snow;
	border-radius:20px;
	font-family:  Georgia, Times New Roman, sans-serif;
	margin-left:26%;
	margin-top:0.9%;
}

.b1
{
	position:absolute;
	text-shadow: 2px 2px blue;
	margin-left:2%;
}

.fieldset{
    background-color:white;
    filter:alpha(opacity=8); /* IE */
    -moz-opacity:0.9; /* Mozilla */
    opacity:0.9;
	width:575px;
    margin-left:1%;
	border-radius:40px;
}

.legend {
	font-size: 1.5em;
	margin-bottom: 8px;
}


</style>
</head>
<div class="box">
  <body>
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div id="myNav" class="overlay">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
        <a href="alogin.php">Login</a><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/>
		<a href="about.php">About Us</a><br/>
		<a href="display.php">View Profile</a><br/>
    </div>
	</div>
	</div>
	
  
 <?php

if(isset($_GET['usn'])){
      $usn = $_GET['usn']; 
 }else{
      $usn = "USN not set in GET Method";
 }
 
$query = "SELECT * FROM profile WHERE USN='4NM17CS048'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$name=$row['Name'];
$branch=$row['Branch'];
$usn=$row['USN'];
$adm=$row['Admission_Year'];
$dob=$row['DOB'];
$blood=$row['Blood_Group'];
$adr=$row['Address'];
$email=$row['Email'];
$mob=$row['Mobile_No'];
$parent=$row['Parent_Mob'];
$em2=$row['Parent_Email'];
}
?>

<div class="hi">
    <form name="form1" method="post" action="">
	<center>
	<br/><br/><br/>
	<legend><h1 class="b1"><?php echo $name; ?></h1><br/><br/><br/><br/></legend>
        <table border="0">
            <tr>
			<td><span><b>NAME</b></span><br/><br/></td>
			<td><span><?php echo $name;?></span><br/><br/></td>
            </tr>			
            <tr> 
                <td><span><b>BRANCH</b></span><br/><br/></td>
                <td><span><?php echo $branch;?></span><br/><br/></td>
            </tr>
			<tr> 
                <td><span><b>USN</b></span><br/><br/></td>
                <td><span><?php echo $usn;?></span><br/><br/></td>
            </tr>
			<tr> 
                <td><span><b>ADMISSION YEAR</b></span><br/><br/></td>
                <td><span><?php echo $adm;?></span><br/><br/></td>
            </tr>
			<tr> 
                <td><span><b>DATE OF BIRTH</b></span><br/><br/></td>
                <td><span><?php echo $dob;?></span><br/><br/></td>
            </tr>
			<tr> 
                <td><span><b>BLOOD GROUP</b></span><br/><br/></td>
                <td><span><?php echo $blood;?></span><br/><br/></td>
            </tr>
			<tr> 
                <td><span><b>ADDRESS</b></span><br/><br/></td>
                <td><span><?php echo $adr;?></span><br/><br/></td>
            </tr>
			<tr> 
                <td><span><b>EMAIL</b></span><br/><br/></td>
                <td><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=<?php echo $email;?>" target="blank"><span><?php echo $email;?></span></a><br/><br/></td>
            </tr>
			<tr> 
                <td><span><b>STUDENT MOBILE</b></span><br/><br/></td>
                <td><span><?php echo $mob;?></span><br/><br/></td>
            </tr>
			<tr> 
                <td><b><span>PARENT MOBILE</b></span><br/><br/></td>
                <td><span><?php echo $parent;?></span><br/><br/></td>
            </tr>
				<tr> 
                <td><b><span>PARENT EMAIL</b></span><br/><br/></td>
                <td><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=<?php echo $em2;?>" target="blank"><span><?php echo $em2;?></span></a><br/><br/></td>
            </tr>
			<tr> 
            
        </table>
		</center>
		</div>
    </form>


	
<script>
function openNav() {
  document.getElementById("myNav").style.width = "40%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>	
	
	
</body>
</html>