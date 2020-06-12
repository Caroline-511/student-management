<?php
/*
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"student");
if($db)
{
	//echo "connected succesfully";
}
else{
	echo "not connected";
}
*/
?>

<?php
/*try{
	$host="ec2-34-200-101-236.compute-1.amazonaws.com";
	$dbname="d6i1p71shucj0g";
	$usr='pngpwmkkjntvqf';
	$port="5432";
	$password="38889841dfdd9fb9c512f660ac9adc51072b4170904ac0a6277eb14c018866cb";
	$conn=pg_connect("dbname=$dbname");
}
catch(PgException $e)
{
	echo "Error : " .$e->getMessage() . "<br/>";
	die();
}*/
$host="ec2-50-17-21-170.compute-1.amazonaws.com";
	$dbname="dagq0b4vmo71ku";
	$usr='gontirrwmyhutv';
	$port="5432";
	$password="668b6e5161e5341b077dd457b61fe9e8b3c5cce4e2c389d6ad2ad198bf25af6d";
	$conn=pg_connect("host=$host dbname=$dbname user=$usr port=$port password=$password");
	if (!$conn) {
 echo "An error occurred.\n";
 exit;
	}
?>

<?php
$usn=$_GET['usn'];
?>


<!DOCTYPE html>
<html>
    <xmlns="http://www.w3.org/1999/xhtml">

<style>
    .a1{
position:absolute;
margin-right:-12%;
margin-left:-20% ;
margin-top:38%;
margin-bottom:0% ;
}

.a2{
position:absolute;
margin-right:-26%;
margin-left:-20% ;
margin-top:38%;
margin-bottom:0% ;
}

.fa-lock{
position:absolute;
margin-top:3%;
margin-left:15%;
color:blue;
font-size: 40px;
}

mark{
background:cornflowerblue;
}

.d1
{
margin-top:5%;
margin-left:5%;
}

.d2
{
    margin-top:8%;
    margin-left:10%;
}

.a7{
	position:absolute;
	margin-left:165%;
	margin-top:-110%;
}

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

.signupbtn{
	position:absolute;
	width:15%;
	margin-left:-320px;
	margin-top:480px;
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
	margin-top:2%;
	margin-left:15%;
}

body {
 background-image: url("nitte.jpg");
 background-attachment:fixed;
 background-repeat:no-repeat;
 background-size:100%;
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

</style>
<head>
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

<title>Icon-page</title> 
</head>

<body>
<div id="myNav" class="overlay">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
        <a href="index.php">Login</a><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/>
		<a href="about.php">About Us</a><br/>
		<a href=" ">View Profile</a><br/>
    </div>
	</div>

    <!--<a href="att.php" name="submit">-->
        <img src="att.jpg" class="d1" alt="Attendance" style="width:430px;height:400px;border:0;">
    
      <!--<a href="pg4.php">-->
            <a href="pg3.php?usn=<?php echo $usn?>">
	        <button type="submit" name="submit" class="signupbtn" onclick="enter()">Attendance</button>

      <!--<b><mark class="a1">ATTENDANCE</mark></b>-->
        <img src="rep.jpg.png" class="d2" alt="Report"  style="width:450px;height:360px;border:0;">
		
                 <a href="pg4.php?usn=<?php echo $usn?>">
	        <button type="submit" name="enter" class="signupbtn">Marks</button>

      <!--<b><mark class="a2">REPORT</mark></b>-->

      <a href="pg1.php"><i class="fas fa-lock" onclick="show()"></i></a></legend>

      <script>
        function show()
        {
            alert("Logout Successfull");
        }
		function openNav() {
  document.getElementById("myNav").style.width = "40%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
		
    </script>
</body>
</html>