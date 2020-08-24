<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	 <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color: black;color: black;">
  <a class="navbar-brand" href="#" onclick="document.forms['home'].submit()" style="background-color: black;font-size: 25px;">BB Trucks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="text-align: right;background-color: black">
    <div class="navbar-nav" style="background-color: black">
      <a class="nav-link active"  href="#" style="margin-left: 450px;"onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">How it works</a>
      <a class="nav-link active" href="#" style="margin-left: 50px;"onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">Donate Us</a>
  <a class="nav-link active" href="http://localhost/pr2-3.php" style="margin-left: 430px;" onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">Logout</a>
     
    </div>
  </div>
</nav>
<?php
$conn= new mysqli("localhost","root","","truck");
$sql="select Email from driver where id='".$_POST['id']."'";
$res=$conn->query($sql);
if($res->num_rows>0){
	while($row=$res->fetch_assoc()){
		$Email=$row['Email'];
		break;
	}
}
?>
<div style="">
<form action="http://localhost/pr2-4.php" method="post">
	<input type="text" name="Email" value="<?php echo($Email) ?>">
    <h1 style="margin-top: 10%;text-align: left;margin-left: 3%">We will notify you once your documents get verified</h1><br>
    <h5 style="text-align: left;margin-left: 3%">Steps to check verified rides</h5>
    <ul style="text-align: left;margin-left: 3%">
      <li>Go to Homepage</li>
      <li>Click on Wanna Drive on Navigation bar</li>
      <li>Click on status in the Navigation bar</li>
      <li>You can see your published rides there</li>
    </ul><br>
    <button type="submit" class="btn btn-dark" style="background-color: black;margin-left: 5%">Back to Home Page</button>
</form></div>
        <form name="home" action="pr2-4.php" method="post">
  <input type="text" name="Email" style="display: none;" value="<?php echo $_POST['Email'] ?>">
  
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>