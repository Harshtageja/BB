<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$conn= new mysqli("localhost","root","","truck");
$sql="update sender set verify='deleted' where id=".$_POST['id'];
$conn->query($sql);
	?>
	<form name='deleted' action="requests.php" method="POST">
		<input type="text" name="Email" value="<?php echo($_POST['Email']) ?>">
		<input type="text" name="id" value="<?php echo($_POST['id1']) ?>">
	</form>
	<script type="text/javascript">
		document.forms['deleted'].submit();
		
	</script>

</body>
</html>