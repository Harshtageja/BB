<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$conn= new mysqli("localhost","root","","truck");
$sql="update sender set verify='delivered' where id=".$_POST['id'];
$conn->query($sql);
$sql="update driver set verify='delivered' where id=".$_POST['id1'];
$conn->query($sql);

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