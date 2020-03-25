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

</style>
<head>
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

<title>Icon-page</title> 
</head>

<body id="body-color" style="background:url(img1.jpg); background-repeat:no-repeat;background-size:100%" >

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
		/*function enter()
		{
			window.location.assign("pg3.php");
		}*/
    </script>
</body>
</html>