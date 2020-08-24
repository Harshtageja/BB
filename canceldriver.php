<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$conn= new mysqli("localhost","root","","truck");
$sql="update driver set verify='cancelled' where id=".$_POST['id'];
$conn->query($sql);
$sql="update sender set verify='cancelled' where driverid=".$_POST['id'];
$conn->query($sql);
?>
<form method="post" name="a" action="status.php">
	<input type="text" name="Email" value="<?php echo $_POST['Email'] ?>">
</form>
<script type="text/javascript">
	document.forms['a'].submit();
</script>
</body>
</html>