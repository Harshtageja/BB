<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$conn=new mysqli("localhost","root","","truck");
	$sql="update driver set via1='".$_POST['via1']."',via2='".$_POST['via2']."',via3='".$_POST['via3']."',via4='".$_POST['via4']."',via5='".$_POST['via5']."' where id='".$_POST['id']."'";
	$res=$conn->query($sql);
	if($res){
		?>
		 <form name="wannadrive3" action="wannadrive12.php" method="post">
                	<input type="text" name="id" value="<?php echo $_POST['id'] ?>">
                	 <input type="text" name="Email" style="display: none;" value="<?php echo $_POST['Email'] ?>">
                </form>
                <script type="text/javascript">
                	document.forms['wannadrive3'].submit();
                </script>

		<?php
	}
	?>

</body>
</html>