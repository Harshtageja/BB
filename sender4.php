<?php
$conn=new mysqli("localhost","root","","truck");
$sql="update sender set length='".$_POST['length']."',breadth='".$_POST['breadth']."',height='".$_POST['height']."' where id='".$_POST['id']."'";
$res=$conn->query($sql);
if($res){
	?>
	<form method="post" action="sender8.php" name="sender">
		<input type="text" name="Email" style="display: none;" value="<?php echo $_POST['Email'] ?>">
		<input type="text" name="id" style="display: none;" value="<?php echo $_POST['id'] ?>">
	</form>
	<script type="text/javascript">
		document.forms['sender'].submit();
	</script>

	<?php
}
else{
	?>
	<form name="back" action="sender3.php" method="post">
		<input type="text" name="id" style="display: none" value="<?php echo($_POST['id']) ?>">
		<input type="text" name="Email" style="display: none" value="<?php echo($_POST['Email']) ?>">

	</form>
		<script type="text/javascript">
		document.forms['back'].submit();
	</script>

	<?php
}

?>