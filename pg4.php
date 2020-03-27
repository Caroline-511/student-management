<?php

/*$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"student");
if($db)
{
	//echo "connected succesfully";
}
else{
	echo "not connected";
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


<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: rgb(81, 88, 88);
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: cornflowerblue  ;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
 
.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-top:8%;
  margin-left:8%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(65, 121, 158);
  color: white;
}


</style>
</head>

<body>
    <body id="body-color" style="background:url(img1.jpg); background-repeat:no-repeat;background-size:100%" ></body>

    <div class="navbar">
        <a href="pg1.php">Logout</a> 
        <!--<a href="icon.php">Back</a>-->
        <!--<div class="dropdown">
          <button class="dropbtn">View
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">Sem 1</a>
            <a href="#">Sem 2</a>
            <a href="#">Sem 3</a>
            <a href="#">Sem 4</a>
            <a href="#">Sem 5</a>
            <a href="#">Sem 6</a>
            <a href="#">Sem 7</a>
            <a href="#">Sem 8</a>
          </div>
        </div> -->
      </div>

<h1>SEMESTER END EXAM RESULTS</h1>

<table id="customers">
  <tr>
    <th>COURSE NAME</th>
    <th>COURSE CODE</th>
    <th>CIE</th>
    <th>SEE</th>
    <th>GRADE</th>
    <th>GRADE POINT</th>
  </tr>

<?php
//echo $id;
  //$query = "SELECT * FROM sample WHERE ID='$id'";
  
if(isset($_GET['usn'])){
      $usn = $_GET['usn']; 
 }else{
      $usn = "USN not set in GET Method";
 }
//$email=$_GET['email'];
//echo $usn;
  $query = "SELECT * FROM marks WHERE usn='$usn'";
  $result = pg_query($conn,$query);
  
  //if ($result) {
    while ($row = pg_fetch_row($result)) {
		?>
		
		<tr>
	   <td><?php   echo $row[2]; ?></td>
   <td><?php   echo $row[3]; ?></td>
    <td><?php  echo $row[4]; ?></td>
     <td><?php echo $row[5]; ?></td>
	  <td><?php echo $row[7]; ?></td>
     <td><?php echo $row[6]; ?></td>

	 </tr>
  
  <?php
 }   
?>
</table>

</body>
</html>