<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
          .b{
      width:250px;
      height: 80px;
      border-radius: 5px;
      background-color:black;
      border-color: black;
      outline: none;
      color: white;
      font-weight: bolder;
      font-size: 20px;
      box-shadow: 0px 4px #888888;

    }
    .b:active{
      box-shadow: 0px 2px #888888;
      transform: translateY(4px);

    }

    </style>

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
      <a class="nav-link active " href="#" style="margin-left: 350px;"onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">About Us<span class="sr-only">(current)</span></a>
      <a class="nav-link active"  href="#" style="margin-left: 50px;"onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">How it works</a>
      <a class="nav-link active" href="#" style="margin-left: 50px;"onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">Donate Us</a>

   <a class="nav-link active" href="http://localhost/pr2-3.php" style="margin-left: 380px;"onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">Logout</a>
     
    </div>
  </div>
</nav>

  <?php 
$conn= new mysqli("localhost","root","","truck");
$sql="select sender.id as senderid,truck.FirstName as Name,sender.pickup as pick,sender.destination as go,sender.pickupaddress as p,sender.dropaddress as de,sender.length as length,sender.breadth as breadth,truck.ContactNumber as number,sender.height as height,sender.verify as verify,sender.weight as weight,images1.image as image from sender inner join truck on sender.Email=truck.Email inner join images1 on truck.image=images1.id where sender.driverid=".$_POST['id']."&& sender.verify in('accepted','received','delivered') ";
$res=$conn->query($sql);
if($res->num_rows>0){
  while($row=$res->fetch_assoc()){
    ?><div style="text-align: center;">
      <br><br><br><br><br>
    <h1 style=""><?php echo"Your Ride has been started from ". $row['pick']." to ".$row['go'] ?></h1>
    <input type="range" class="rang" name="g" value="0" style="width: 100%">
    <br><br><br><br><br><br>
    <script type="text/javascript">
      var a=document.querySelector('.rang');
      <?php
if($row['verify']=='accepted'){
?>
a.value=0;
<?php
}
else if($row['verify']=='received'){
?>
a.value=50;
<?php
}
else{
  ?>
a.value=100;
  <?php
}

      ?>
    </script>
  <?php
if($row['verify']=='accepted'){
  ?>
    <form action="received.php" method="post">
      <input type="text" name="id" value="<?php echo $row['senderid'] ?>" style="display: none" > 
      <input type="text" name="Email" value="<?php echo $_POST['Email'] ?>" style="display: none;" >
       <input type="text" name="id1" value="<?php echo $_POST['id'] ?>" style="display: none;" >
    <button type="submit" name="submit" class="b">Package Received</button><br><br>

</form>
<?php
}
else if($row['verify']=='delivered'){
 ?>
 <h1>Completed</h1>
 <?php 
}
else{
  ?>
   <form action="delivered.php" method="post">
      <input type="text" name="id" value="<?php echo $row['senderid'] ?>" style="display: none" > 
      <input type="text" name="Email" value="<?php echo $_POST['Email'] ?>" style="display: none;" >
       <input type="text" name="id1" value="<?php echo $_POST['id'] ?>" style="display: none;" >
    <button type="submit" name="submit" class="b">Package Delivered</button><br><br>
</form>
  <?php
}
?>
</div>
<div style="text-align: left;;margin-left: 40px;">
    <h5>From:       <?php echo $row['p'] ?></h5>
    <h5>To:         <?php echo $row['de'] ?></h5>
    <h5>Length:         <?php echo $row['length'] ?>cm</h5>
    <h5>Breadth:         <?php echo $row['breadth'] ?>cm</h5>
    <h5>Height:         <?php echo $row['height'] ?>cm</h5>
    <h5>Weight:         <?php echo $row['weight'] ?>kg</h5>
    <h5>Contact Number:         <?php echo $row['number'] ?></h5>
     <img style="width:200px;height: 200px;margin-left: 100px;margin-bottom:-3rem;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);?>"></div>
     <iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/directions
  ?key=AIzaSyB4dK8Z1R-LCo6evLZGZL00h8FOS9nzlog&origin=Oslo+Norway
  &destination=Telemark+Norway
  &avoid=tolls|highways" allowfullscreen>
</iframe>

</div>
<?php
  }}
else{
  ?>
  <div style="text-align: center;margin-top: 100px;">
  <div class="row">
    <?php
$sql="select sender.id as senderid,truck.FirstName as Name,sender.pickupaddress as p,sender.dropaddress as de,sender.length as length,sender.breadth as breadth,truck.ContactNumber as number,sender.height as height,sender.weight as weight,images1.image as image from sender inner join truck on sender.Email=truck.Email inner join images1 on truck.image=images1.id where sender.driverid=".$_POST['id']."&& sender.verify='verified' ";
 $result=$conn->query($sql);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){?>
        <div class="col-sm-6">
       <div class="card" style="width: 18rem;height: 560px;margin-left: 20%;border-radius: 30px;border:3px solid grey;margin-top:30px;">
  <img class="card-img-top" style="height: 230px;margin-bottom: 0px;border-top-right-radius: 30px;border-top-left-radius: 30px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);?>" alt="Card image cap">
  <div class="card-body"  style="padding-top: 20px;padding-bottom: 80px;text-align: left;">
     <h6 class="card-title"><?php echo $row['Name'] ?></h6>
    <h6 class="card-title">From : <?php echo $row['p'] ?></h6>
     <h6 class="card-title">To :  <?php echo $row['de'] ?></h6>
      <h6 class="card-title">Height :  <?php echo $row['height'] ?>cm</h6>
       <h6 class="card-title">Length :  <?php echo $row['length'] ?>cm</h6>
        <h6 class="card-title">Breadth :  <?php echo $row['breadth'] ?>cm</h6>
        <h6 class="card-title">Weight :  <?php echo $row['weight'] ?>kgs</h6>
         <h6 class="card-title">Contact Number :  <?php echo $row['number'] ?></h6>
        <form action="acceptrq.php" method="post">
  <input type="text" name="id" style="display: none;" value="<?php echo $row['senderid']?>">
  <input type="text" name="id1" style="display: none;" value="<?php echo $_POST['id'] ?>">
  <input type="text" name="Email" value="<?php echo $_POST['Email'] ?>" style="display: none;" >
<button href="#" type="submit" class="btn btn-dark" style="background-color: black;border-radius:10px;margin-left:1%">Accept</button></form><form action="deleterq.php" method="post">
    <input type="text" name="id" style="display: none;" value="<?php echo $row['senderid']?>">
      <input type="text" name="id1" style="display: none;" value="<?php echo $_POST['id'] ?>">
<input type="text" name="Email" value="<?php echo $_POST['Email'] ?>" style="display: none;" >
<button href="#" type="submit" class="btn btn-dark" style="background-color: black;border-radius:10px;position: relative;top: -2.4rem;left:8rem;">Delete</button>

</form>

  </div>
</div>
</div>
       <?php
    }
  }
  else{
  ?>
</div>
  <form action="http://localhost/pr2-4.php" method="post">
	<input type="text" name="Email" style="display: none;" value="<?php echo($_POST['Email']) ?>">
    <?php
    ?>
    <h1 style="margin-top: 10%;text-align: center;">No Requests till now</h1><br><br>
    <button type="submit" class="btn btn-dark" style="background-color: black;">Back to Home Page</button>
</form>
<?php
}
?>

</div>
<<?php } ?>
  <form name="home" action="pr2-4.php" method="post">
          <input type="text" style="display: none;" name="Email" value="<?php echo $_POST['Email'] ?>">
        </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>