<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <style type="text/css">
    .b{
      width:150px;
      height: 50px;
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
  <title></title>
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
</nav><br><br><br><br><br><br><br>
  <div style="text-align: center;">
<h1>Your Adhaar</h1>
<h6 style="font-weight: lighter;">(Please ensure that QR code is clearly visible)</h6>
<br><br><br>
<form action="http://localhost/sender6.php" method="post" enctype="multipart/form-data" name="image">
    <label style="font-weight: bolder;margin-left: -15rem">Upload Adhaar front side</label>
    <input class="v" type="file" name="image"style="width: 50%;border: none;font-size: 20px;background-color:#DCDCDC;margin-left:;height: 40px;border-radius: 15px;padding-left: 10px;" placeholder="Upload License"required><br><br><br><br>
 <input type="text" name="Email" style="display: none;" value="<?php echo $_POST['Email'] ?>">

<?php

echo "<input type='text' name='id'  style='display: none' value=".$_POST['id'].">";




?>
<button type="submit" name="submit" class="b">continue</button><br><br>

</form>

</div>
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
                <form name="home" action="pr2-4.php" method="post">
  <input type="text" name="Email" style="display: none;" value="<?php echo $_POST['Email'] ?>">
  
</form>
        <script type="text/javascript">
          function recent() {
            // body...
          
          document.forms[1].submit();
          }
        </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>