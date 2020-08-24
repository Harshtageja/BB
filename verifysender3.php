<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$conn= new mysqli("localhost","root","","truck");
$sql="update sender set verify='rejected' where id='".$_POST['id']."'";
$res=$conn->query($sql);
if($res){
	?>
	<script type="text/javascript">
		window.location.href="verifysender.php";
	</script>
	<?php
}
else{
	echo $conn->error;
}
?>
</body>
</html>