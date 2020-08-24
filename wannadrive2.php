<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
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
}         else{
            // Insert image content into database 
              $sql="INSERT into driver(Email,License,LicenseNumber) VALUES ('".$_POST['Email']."','$imgContent','".$_POST['LicenseNumber']."')";
             $insert = $db->query($sql); 
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully.";
                $sql="select id from driver where Email='".$_POST['Email']."' order by id desc";
                $insert=$db->query($sql);
                if($insert->num_rows>0){
                	while($row=$insert->fetch_assoc()){
                		$id=$row['id'];
                		break;
                	}
                }
                ?>
                <form name="wannadrive3" action="wannadrive3.php" method="post">
                	<input type="text" name="id" value="<?php echo $id ?>">
                    <input type="text" name="Email" value="<?php echo $_POST['Email'] ?>">
                </form>
                <script type="text/javascript">
                	document.forms['wannadrive3'].submit();
                </script>

                <?php


                

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
?>

</body>
</html>