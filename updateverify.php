<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
require_once 'dbConfig.php'; 
if($db){
	echo "success";
}
$sql="update truck set FirstName='".$_POST['Name']."' where Email='".$_POST['Email']."';";
$result=$db->query($sql);
$sql="update truck set LastName='".$_POST['last']."' where Email='".$_POST['Email']."';";
$result=$db->query($sql);
$sql="update truck set ContactNumber='".$_POST['number']."' where Email='".$_POST['Email']."';";
$result=$db->query($sql);
$sql="update truck set Address='".$_POST['address1']."' where Email='".$_POST['Email']."';";
$result=$db->query($sql);
$sql="update truck set City='".$_POST['city']."' where Email='".$_POST['Email']."';";
$result=$db->query($sql);
$sql="update truck set State='".$_POST['state']."' where Email='".$_POST['Email']."';";
$result=$db->query($sql);
$sql="update truck set ZipCode='".$_POST['zip']."' where Email='".$_POST['Email']."';";
$result=$db->query($sql);
if($result){
	?>
	<form method="post" action="http://localhost/pr2-4.php" name="update" >
<input type="text" name="Email" value='<?php echo $_POST["Email"]?>'>
<input type="submit">
</form>
<script type="text/javascript">alert('Profile updated Successfully');
document.forms['update'].submit();


</script>


	<?php
}
else{
	echo $db->error;
}

	?>
<form method="post" action="http://localhost/loggedin3.php" name="update" >
<input type="text" name="Email" value='<?php echo $_POST["Email"]?>'>
<input type="submit">
</form>

</body>
</html>