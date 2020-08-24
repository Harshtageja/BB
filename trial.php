<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
      
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color: black;color: black;">
  <a class="navbar-brand" href="#" onclick="document.forms['home'].submit()" style="background-color: black;font-size: 25px;">BB Trucks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="text-align: right;background-color: black">
    <div class="navbar-nav" style="background-color: black">
      <a class="nav-link active " href="#" style="margin-left: 300px;" onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">About Us<span class="sr-only">(current)</span></a>
      <a class="nav-link active"  href="#" style="margin-left: 50px;" onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">How it works</a>
      <a class="nav-link active" href="#" style="margin-left: 50px;" onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">Donate Us</a>
     <a class="nav-link active" href="pr2-3.php" style="margin-left: 400px;"onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">Log out</a>
 
    
    </div>
  </div>
</nav><br><br><br><br><br><br><br>
    <?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("select t.FirstName,t.LastName,t.Address,t.ContactNumber,t.State,t.City,t.ZipCode,i.image as image from truck as t inner join images1 as i on t.image=i.id where t.Email='".$_POST['Email']."'"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img class="img1" style="width: 100px;height: 100px;z-index: 1;position: absolute;top: 15%;left:80%;border-radius: 20px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
          <?php  $f=$row['FirstName'];
            $l=$row['LastName'];
            $c=$row['ContactNumber'];
            $z=$row['ZipCode'];
            $h=$row['State'];
            $city=$row['City'];
            $address=$row['Address'];
?>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
<a href="javascript:image()" id="link" class="badge badge-primary" style="position: absolute;left: 80%;top:35%;height: 20px;cursor: pointer;background-color: black">Change Image</a>
   <form style="margin-left: 30px; margin-top: 60px;" method="post" action="updateverify.php">
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input readonly type="email" name="Email" class="form-control" id="inputEmail4" placeholder="Email" value='<?php echo $_POST['Email'] ?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">First Name</label>
      <input type="text" class="form-control" name="Name" id="inputPassword4" value='<?php echo $f ?>'>
    </div>
  </div>
    <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="inputEmail4">Last Name</label>
      <input  type="text" class="form-control" id="inputEmail4" name="last" placeholder="Email" value='<?php echo $l ?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact Number</label>
      <input type="text" class="form-control" id="inputPassword4" name="number" value='<?php echo $c ?>'>
    </div>
  </div>
  


  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="1234 Main St" value='<?php  echo $address ?>'>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city" value='<?php echo $city ?>'>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" >State</label>
      <select id="inputState" name="state" class="form-control" value='<?php $h ?>'>
        <option selected><?php echo $h  ?></option>
       <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" name='zip' class="form-control" id="inputZip" value='<?php echo $z?>'>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="background-color: black;border-radius: 10px;">Update Profile</button>
</form>
<form action="imageupdate.php" method="post" name="image">
  <input type="text" name="Email" style="display: none" value='<?php echo $_POST['Email']  ?>'>
</form>
<form name="home" action="pr2-4.php" method="post">
  <input type="text" name="Email" style="display: none;" value="<?php echo $_POST['Email'] ?>">
  
</form>
<script type="text/javascript">
  function image() {
    document.forms['image'].submit();
    // body...
  }

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>