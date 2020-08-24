<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="http://localhost/pr2-4.php" method="post" name="delete">
	<input type="text" name="Email" value='<?php echo $_POST['Email'];  ?>'>


</form>
	<?php
	$conn= new mysqli("localhost","root","",'truck');
	$sql="update comment set deleted=1,deletetime=current_timestamp where id='".$_POST['id']."'";
	$result=$conn->query($sql);
	if($result){
		echo "success";
		?>
		<script type="text/javascript">
			document.forms['delete'].submit();
		</script>
		<?php

	}
?>

</body>
</html>