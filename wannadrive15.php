<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$conn=new mysqli("localhost","root","","truck");
	$sql="update driver set Price='".$_POST['price']."' where id='".$_POST['id']."'";
	$res=$conn->query($sql);
	if($res){
		$sql="insert into ride(driverid)values('".$_POST['id']."')";
		$res=$conn->query($sql);
		?>
		 <form name="wannadrive3" action="wannadrive9.php" method="post">
                	<input type="text" name="id" value="<?php echo $_POST['id'] ?>">
                	<input type="text" name="Email" style="display: none" value="<?php echo $_POST['Email'] ?>">
                </form>
                <script type="text/javascript">
                	document.forms['wannadrive3'].submit();
                </script>

		<?php
	}
	?>

</body>
</html>