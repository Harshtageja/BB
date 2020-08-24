<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$conn= new mysqli("localhost","root","","truck");
$sql="update sender set driverid=NULL,verify='cancelsender' where id=".$_POST['id'];
$res=$conn->query($sql);
if($res){
?>
<form method="post" action="senderstatus.php" name="a">
	<input type="text" name="pickup" value="<?php echo $_POST['pickup'] ?>">

	<input type="text" name="Email" value="<?php echo $_POST['Email'] ?>">

	<input type="text" name="drop" value="<?php echo $_POST['drop'] ?>">
	

</form>
<script type="text/javascript">
	document.forms['a'].submit();
</script>
<?php
}
else{
	echo $conn->error;
}
?>
</body>
</html>