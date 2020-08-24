<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style type="text/css">
		 .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color: black;color: black;">
  <a class="navbar-brand" href="#" style="background-color: black;font-size: 25px;">BB Trucks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="text-align: right;background-color: black">
    <div class="navbar-nav" style="background-color: black">
      <a class="nav-link active " href="#" style="margin-left: 300px;">About Us<span class="sr-only">(current)</span></a>
      <a class="nav-link active"  href="#" style="margin-left: 50px;">How it works</a>
      <a class="nav-link active" href="#" style="margin-left: 50px;">Donate Us</a>
   <a class="nav-link active" href="#" style="margin-left: 300px;">Log in</a>
     <a class="nav-link active" href="#" style="margin-left: 50px;">Sign Up</a>
 
    
    </div>
  </div>
</nav><br><br><br><br>
  <?php
  $conn= new mysqli("localhost","root","","truck");
  $sql="select s.adhaar as adhaar,s.pickup as pickup,s.destination as destination,images.image as image,t.ContactNumber as number from sender as s inner join truck as t on s.Email=t.Email inner join images1 as images on t.image=images.id where s.id='".$_POST['id']."'";
  $res=$conn->query($sql);
  if($res->num_rows>0){


    while($row=$res->fetch_assoc()){
      ?>
      <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['adhaar']);?>" class="card-img-top" style>
           <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);?>" class="card-img-top" style>
       <label>From</label>
      <input type="text" name="LicenseNumber" value="<?php echo $row['pickup'] ?>">
       <label>To</label>
      <input type="text" name="LicenseNumber" value="<?php echo $row['destination'] ?>">
        <label>ContactNumber</label>
      <input type="text" name="LicenseNumber" value="<?php echo $row['number'] ?>">
      <form method="post" action="verifysender2.php">
        <input type="text" style="display: none;" name="id" value="<?php echo $_POST['id'] ?>">
        <button type="submit" class="b" >Verify</button></form><br><br><br><br>
      </form>
          <form method="post" action="verifysender3.php">
        <input type="text" name="id" style="display: none" value=" <?php echo $_POST['id'] ?>">
        <button type="submit" class="b">Reject</button></form><br><br><br><br>
      </form>
<?php
  }
  ?>
</div>
  <?php
}

  ?>
	<footer class="section footer-classic context-dark bg-image" style="background:black;padding-top: 50px;margin-top: 200px;">
        <div class="container" style="background-color: black">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4" style="background-color:black"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
               

                <!-- Rights-->
                <p class="rights" style="color: white"><span>©  </span><span class="copyright-year">2020</span><span> </span><span>BB Trucks</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div style="color: white" class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>Bhiwani</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">dkstghawfudioin@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">https://karossfertydreuearch.com</a> <span>or</span> <a href="tel:#">https://karerte5tyosearch.com</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5 style="color: white">Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>

        </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>