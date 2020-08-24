<?php
$conn=new mysqli("localhost","root","","truck");
$sql="insert into sender(Email,weight,driverid,pickup,destination) values('".$_POST['Email']."','".$_POST['weight']."','".$_POST['id']."','".$_POST['pickup']."','".$_POST['drop']."')";
$res=$conn->query($sql);
if($res){
	$sql="select id from sender where Email='".$_POST['Email']."' order by id desc";
                $insert=$conn->query($sql);
                if($insert->num_rows>0){
                	while($row=$insert->fetch_assoc()){
                		$id=$row['id'];
                		break;
                	}
                }
	?>
	<form method="post" action="sender3.php" name="sender">
		<input type="text" name="Email" style="display: none;" value="<?php echo $_POST['Email'] ?>">
		<input type="text" name="id" style="display: none;" value="<?php echo $id ?>">
	</form>
	<script type="text/javascript">
		document.forms['sender'].submit();
	</script>

	<?php
}
else{
	?>
	<form name="back" action="sender1.php" method="post">
		<input type="text" name="id" style="display: none" value="<?php echo($_POST['id']) ?>">
		<input type="text" name="Email" style="display: none" value="<?php echo($_POST['Email']) ?>">

	</form>
		<script type="text/javascript">
		document.forms['back'].submit();
	</script>

	<?php
}

?>