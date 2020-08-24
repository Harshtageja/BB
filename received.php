<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$conn= new mysqli("localhost","root","","truck");
$sql="update sender set verify='received' where id=".$_POST['id'];
$res=$conn->query($sql);
echo $conn->error;
?>
<form name="received" action="requests.php" method="post">
	<input type="text" name="Email" value="<?php echo  $_POST['Email'] ?>">
<input type="text" name="id" value="<?php echo $_POST['id1'] ?>">
</form>
<script type="text/javascript">
	document.forms['received'].submit();
</script>
</body>
</html>