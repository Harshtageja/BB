 <!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		img.c{
			width:100px;
			margin-left:100px;
			margin-top: 0px;
			display:inline-block;
			background: transparent;
		}
		a{
			background-color:white;
			border-style:none;
			visibility: hidden;
			font-size:20px;
			text-decoration: none;
			color: black;
		}
		a:hover{
			color:#81D4FA;
			cursor:pointer;
		}
		.v{
			width:40%;
			height:50px;
			text-align: center;
			font-size: 20px;
			border-radius: 5px;
			outline: none;
			border: none;
			border-bottom: 2px solid #FF8C00;
		}
		.v:hover{
			border-color: #FF8C00;
		}
				.d{
			width:40%;
			height:50px;
			text-align: center;
			font-size: 20px;
			border-radius: 5px;
			outline: none;
			border: none;
			border-bottom: 2px solid #FF8C00;
		}
		.d:hover{
			border-color: #FF8C00;
		}
		button{
			width:150px;
			height: 50px;
			border-radius: 5px;
			background-color:#FF8C00;
			border-color: #FF8C00;
			outline: none;
			color: white;
			font-weight: bolder;
			font-size: 20px;
			box-shadow: 0px 9px #888888;

		}
		button:active{
			box-shadow: 0px 5px #888888;
			transform: translateY(4px);

		}
	</style>
	<title></title>
</head>
<body><pre>
<div><img src="logo.png" class="c">                    <a href="">Search For a Driver</a >        <a href="">Search for a Sender</a>       <a href="">login</a>       <a href="">Sign Up</a></pre>
</div><div style="text-align: center;font-family:cursive;">
<h1>Your Good Name</h1>
<form method="post" action="http://localhost//sendername.php">
 <?php
 $server="localhost";
 $user="root";
 $password="";
 $dbname="truck";
 $conn= new mysqli($server,$user,$password,$dbname);
 if(!$conn){
 	echo $conn->error;
 }
 $sql="select FirstName,LastName from ".$dbname." where Email='".$_POST['Email']."'";
 $result=$conn->query($sql);
 if($result->num_rows>0){
 	while($row=mysqli_fetch_array($result)){
 		$f=$row['FirstName'].' '.$row['LastName'];
 	}
 }
echo "<input type='text' name='FullName' class='v' style='color:rgb(0,0,0,0.4)' value='".$f."'>";
echo "<input type='text' name='Email' style='display:none' color:rgb(0,0,0,0.4)' value='".$_POST['Email']."'>";

?>
<br><br>
<button type="submit">continue</button></form>
</div>
<script type="text/javascript">
	document.addEventListener('keydown',keyd);
	function keyd(e) {
		// body...
	
	if((document.querySelector('.v').value!="")){
		document.getElementsByTagName('button')[0].style.visibility="visible"
	}}

</script>
</body>
</html>