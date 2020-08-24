<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	$servername = "localhost";
$username = "root";
$password = "";
$dbName = "truck";

// Create connection
$db =new mysqli($servername, $username, $password, $dbName);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="select* from truck where Email='".$_POST['Email']."'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
echo "<script>alert('Account already exists')
window.location.href = 'pr2-3.php'</script>";
	}
else{
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            if(!$imgContent){
            ?>
            <script type="text/javascript">
                alert('You need to compress this image');
                window.location.href="https://compressjpeg.com/"
            </script>

            <?php
}         
         else{
            // Insert image content into database 
            $sql="INSERT into truck(FirstName,LastName,Email,Password,Gender,ContactNumber,DOB) VALUES ('".$_POST['Name']."','".$_POST['last']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['gender']."','".$_POST['number']."','".$_POST['dob']."')";

            $insert = $db->query($sql); 
            $sql="INSERT into images1(Email,image) VALUES ('".$_POST['Email']."','$imgContent')";
             $insert = $db->query($sql); 
             $sql="select id from images1 where Email='".$_POST['Email']."' order by id desc";
             $result=$db->query($sql);
             while($row=$result->fetch_assoc()){
                $id=$row['id'];
                break;
             }
             echo $id;
             $sql="update truck set image='".$id."' where Email='".$_POST['Email']."'";
             $insert=$db->query($sql);
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                echo "<script>alert('Your account is successfully created')
                window.location.href='pr2-3.php';

                </script>";

            }else{ 
                $statusMsg = "File upload failed, please try again."; 
                 echo $db->error;
            }  
        }}else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
 echo $db->error;
}
$db->close();
?>

</body>
</html>