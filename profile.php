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


<?php
//session_start();

if (isset($_POST['submit']))
{
$name=$_POST['name'];
$branch=$_POST['branch'];
$usn=$_POST['usn'];
$adm=$_POST['year'];
$dob=$_POST['dob'];
$blood=$_POST['bg'];
$adr=$_POST['adr'];
$email=$_POST['email'];
$mob=$_POST['num'];
$parent=$_POST['num1'];
$pm=$_POST['em2'];
 $sql="INSERT into profile(Name,Branch,USN,Admission_Year,DOB,Blood_Group,Address,Email,Mobile_No,Parent_Mob,Parent_Email) values('$name','$branch','$usn','$adm',
        '$dob','$blood','$adr','$email','$mob','$parent','$pm')";
 $qry=mysqli_query($conn,$sql);
 if(!$qry)
echo mysqli_error($conn);
else
echo "Success";  
     //header('Location:display.php?usn='.$usn);  
}
?>

<?php

if(isset($_POST['Submit1'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "C:\wamp64\www\php\web";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into images(Name)values('".$name."')";
     mysqli_query($conn,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }
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

fieldset{
    background-color:white;
    filter:alpha(opacity=8); /* IE */
    -moz-opacity:0.9; /* Mozilla */
    opacity:0.9;
	width:575px;
    margin-left:700px;
	border-radius:40px;
}

.box h1
{
	position:absolute;
	text-shadow: 2px 2px blue;
	margin-top:4%;
	margin-left:4%;
}

.box legend {
	font-size: 1.5em;
	margin-bottom:8px;
}

.box fieldset{
	border:none;
}

.x1 h2{
	position:absolute;
	margin-left:10%;
	margin-top:5%;
}

body {
 background-image: url("nitte.jpg");
 background-attachment:fixed;
 background-repeat:no-repeat;
 background-size:100%;
}

</style>




</head>
<div class="box">
  <body> <!--id="body-color" style="background:url(nitte.jpg); background-repeat:no-repeat;background-size:100% 100%" >-->
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div id="myNav" class="overlay">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
        <a href="alogin.php">Login</a><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/>
		<a href="about.php">About Us</a><br/>
    </div>
	</div>

<div class="x1">
    <fieldset class="f2"><legend><b><h2 class="x1">UPLOAD PHOTO</h2></b></legend><br/><br/><br/><br/><br/><br/>
	<input type="file" name="file"><br/>
<button type="submit" class="signupbtn" name="Submit1">Add</button><br/>

	<!--<input type='file' name='file' class="p1" onchange="readURL(this)" >
   <img id="blah" >
         <button type="submit" name="upload" class="signupbtn">Add</button>
   src="http://placehold.it/180" />-->
   </fieldset>
   </div>


<form action="" method="POST">
  <div class="container"></div>
    <fieldset><legend><h1>PROFILE-DETAILS</h1></legend><br/><br/><br/><br/><br/><br/><br/><br/>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name"  required>
	
	<label for="college"><b>College</b></label>
    <input type="text" id="country" name="country" value="NMAM INSTITUTE OF TECHNOLOGY, NITTE" readonly>
	
    <label for="branch"><b>Branch</b></label>
    <input type="text" placeholder="Enter Branch" name="branch" required>
	
	<label for="usn"><b>USN</b></label>
    <input type="text" placeholder="Enter USN" name="usn"  required>
	
	<label for="admission"><b>Admission Year</b></label>
    <input type="text" placeholder="Enter Year" name="year"  required>
	
	<label for="dob"><b>Date Of Birth</b></label>
    <input type="date" name="dob"  required><br/><br/><br/>
	
    <label for="bg"><b>Blood Group</b></label>
    <input type="text" placeholder="Enter Blood Group" name="bg" required>

    <label for="adr"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="adr" required>
	
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  required>
	
	<label for="phone"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="num"  required>
	
	<label for="ph2"><b>Parent Mobile Number</b></label>
    <input type="text" placeholder="Enter Number" name="num1"  required>
	
	<label for="em2"><b>Parent Email</b></label>
    <input type="text" placeholder="Enter Email" name="em2"  required>
	

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Add</button>
    </div>

    </fieldset>
</form>
</div>

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
