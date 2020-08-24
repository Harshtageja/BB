<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$conn= new mysqli("localhost","root","","truck");
	$sql1="update truck set image='".$_POST['id']."' where Email='".$_POST['Email']."'";
	$res=$conn->query($sql1);
	if($res){?>
		 <form method="post" action="trial.php" name="updatedimage">
                    <input type="text" name="Email" value="<?php echo $_POST['Email'] ?>">

                </form>
                <script type="text/javascript">
                    
                    window.onload=function () {
                        document.forms['updatedimage'].submit();
                        // body...
                    }
                </script>
                <?php
	}
	else{
		echo $conn->error;
	}

	?>

</body>
</html>