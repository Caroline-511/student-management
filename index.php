<?php
/*$conn=mysqli_connect("localhost","root","");
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
	 //mysqli_connect('localhost','root','') or die(mysqli_error());
     //mysqli_select_db('wedding') or die(mysqli_error());
     $usn=$_POST['usn'];
     $password=$_POST['psw'];
if($usn!=''&&$password!='')
 {
   $query=mysqli_query($conn,"select * from register where USN='".$usn."' and Password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['usn']=$usn;
    header('location:icon.php?usn='.$usn);
   }
   else
   {?>
<script>
    alert ("Entered Username and password is incorect");
	</script>
	<?php
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}*/
?>


<?php
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
	
if(isset($_POST['submit']))
{
     $usn=$_POST['usn'];
     $password=$_POST['psw'];
if($usn!=''&& $password!='')
 {
	$query="select * from signup where usn='".$usn."' and password='".$password."'";
   $result=pg_query($conn,$query);
   $count=pg_affected_rows($result);
   //$stmt=$this->pdo->prepare($result);
   //$stmt->execute();
if($count!=0)
{
    //$_SESSION['usn']=$usn;
    header('location:icon.php?usn='.$usn);
   }
   else
   {?>
<script>
    alert ("Entered Username and password is incorect");
	</script>
	<?php
   }
 }
}
?>



<!DOCTYPE html>
<html>
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
  margin-top:1%;
}

.f1{
    width:500px;
    margin-left:750px;
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

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(33, 96, 121);
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
	background:white;
}

mark1{
	background:snow;
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
  <body> <!-- id="body-color" style="background:url(img1.jpg); background-repeat:no-repeat;background-size:100%">-->

    <!--<div class="sidenav">
       <br/><br/> <a href="index.php">Login</a><br/><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/><br/>
      </div>-->
	  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div id="myNav" class="overlay">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
        <a href="alogin.php">Login</a><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/>
		<a href="about.php">About Us</a><br/>
		<a href=" ">View Profile</a><br/>
    </div>
	</div>

<form action="" method="POST">
  <div class="container"></div>
    <fieldset><legend><b><h1>LOGIN</h1></b></legend><br/><br/>

    <label for="usn"><b>USN</b></label>
    <input type="text" placeholder="Enter USN" name="usn" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

  <p><b>New User?</b> <a href="pg1.php"><b>Signup here</b></a></p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
	  
      <button type="submit" class="signupbtn" name="submit">Login</button>

    </div>
    </fieldset>
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
