<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$conn= new mysqli("localhost","root","","truck");
$sql="update driver set verify='rejected',reason='".$_POST['reason']."' where id='".$_POST['id']."'";
$res=$conn->query($sql);
if($res){
	?>
	<script type="text/javascript">
		window.location.href="verifywannadrive.php";
	</script>
	<?php
}
else{
	echo $conn->error;
}
?>
</body>
</html>