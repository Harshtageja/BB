<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <?php
$conn= new mysqli("localhost","root","","truck");
  if(!$conn){
    echo $conn->error;
  }
  $sql="insert into comment(Email,comment,deleted,commenttime)values('".$_POST['Email']."','".$_POST['comment']."',0,current_timestamp)";
  echo $sql;
  $result=$conn->query($sql);
  if($result){
  	?>
  	<form name="comment" method="post" action="http://localhost/pr2-4.php">
  		<input type="text" name="Email" style="display: none" value="<?php echo $_POST['Email'] ?>">
  		
  	</form>
  	<script type="text/javascript">
  		document.forms['comment'].submit();
  	</script>
  	<?php
  }
  else{
  	echo $conn->error;
  }
?>

</body>
</html>