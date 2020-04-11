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


<?php
if(isset($_POST['submit']))
{    
    $id = $_GET['id'];
	$usn=$_POST['usn'];
    $sub=$_POST['sub'];
    $held=$_POST['held'];
    $attend=$_POST['att'];
    $percent=$_POST['per'];
        //updating the table
       $query ="UPDATE att SET subjects='$sub',class_held='$held',class_att='$attend',percentage='$percent' WHERE id='$id'";
	   $result=pg_query($conn,$query);
        
        //redirectig to the display page. In our case, it is index.php
      header("Location:add.php?usn=$usn");
    
}
?>

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = pg_query($conn, "SELECT * FROM att WHERE id='$id'");
$resultcheck=pg_num_rows($result);

if(($resultcheck)>0)
{
while ($row = pg_fetch_row($result)) {
$usn=$row['usn'];
$sub=$row['subjects'];
$held=$row['class_held'];
$attend=$row['class_att'];
$percent=$row['percentage'];	
}
}

?>

<style>
.hi{
	max-width: 600px;
	padding: 10px 10px;
    background:blue;
	margin: 5px auto;
	padding: 10px;
	background:snow;
	border-radius: 30px;
	font-family:  Georgia, Times New Roman, sans-serif;
	margin-left:26%;
	margin-top:0.9%;
}

.hi h1
{
	text-shadow: 2px 2px blue;
}

.hi fieldset{
	border: none;
}
.hi legend {
	font-size: 1.5em;
	margin-bottom: 8px;
}



.b1{
	position:absolute;
	display: block;
	padding:5px 2px 2px 3px;
	color: black;
	margin: 0 auto;
	background:light blue;
	font-size: 15px;
	text-align: center;
	font-style: normal;
	width: 10%;
	border: 1px solid black;
	border-width: 2px 2px 3px;
	margin-bottom:10px;
	margin-top:1%;
	margin-left:-3%;
}



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

</style>

<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body id="body-color" style="background:url(img1.jpg); background-repeat:no-repeat;background-size:100%" >

  <!--  <a href="search.php">Home</a>-->
    <div class="hi">
    <form name="form1" method="post" action="">
	<center>
	<fieldset>
	<legend><h1>EDIT</h1></legend>
        <table border="0">
            <tr> 
                <td>USN</td>
                <td><input type="text" name="usn" value="<?php echo $usn;?>"></td>
            </tr>
            <tr> 
                <td>Subjects</td>
                <td><input type="text" name="sub" value="<?php echo $sub;?>"></td>
            </tr>
            <tr> 
                <td>Class held</td>
                <td><input type="text" name="held" value="<?php echo $held;?>"></td>
            </tr>
			<tr> 
                <td>Class Attended</td>
                <td><input type="text" name="att" value="<?php echo $attend;?>"></td>
            </tr>
			<tr> 
                <td>Percentage</td>
                <td><input type="text" name="per" value="<?php echo $percent;?>"></td>
            </tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input class="b1" type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
		</fieldset>
		</center>
		</div>
    </form>
</body>
</html>