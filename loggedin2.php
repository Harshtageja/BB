 <!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
 <?php 

	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "truck";

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="select* from truck where Email='".$_POST['Email']."' and password='".$_POST['password']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$sql="select FirstName from truck where Email='".$_POST['Email']."'";
$result = $conn->query($sql);
if($result->num_rows>0){
while($row = $result->fetch_assoc()) {
$f=$row['FirstName'];

    break;
  }
    echo "<script>alert('Welcome Back ".$f."')</script>";
//echo "<script>window.location.href = 'loggedin3.php'</script>";

}
	else{
	echo "Error: " . $sql . "<br>" . $conn->error;

}


}
	else{
	echo "<script>alert('Account Not Found')
window.location.href = 'http://localhost/pr2-3.php'</script>";
	}

$conn->close();
?>
<form method="post" action="http://localhost/pr2-4.php" name="member_signup">
<?php	echo "<input type='text' style='display:none;' name='Email' value=".$_POST['Email'].">" ?>
	<input type="submit" name="" style="display: none">
</form>
<script type="text/javascript">
	window.onload = function(){
 document.forms['member_signup'].submit();
}
</script>

</body>
</html>