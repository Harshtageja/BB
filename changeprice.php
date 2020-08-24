<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$conn= new mysqli("localhost","root","","truck");
$sql="update driver set price='".$_POST['price']."' where id='".$_POST['id']."'";
$res=$conn->query($sql);
if($res){
	$sql="select Email from driver where id='".$_POST['id']."'";
	$res=$conn->query($sql);
	if($res->num_rows>0){
		while($row=$res->fetch_assoc()){
			$Email=$row['Email'];
			break;
		}
	}
?>
<form name="Email" method="post" action="status.php">
	<input type="text" name="Email" value="<?php echo $Email ?>">
</form>
<script type="text/javascript">
	document.forms['Email'].submit();
</script>
<?php

}
	?>


</body>
</html>