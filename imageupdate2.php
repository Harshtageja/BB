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
} else{        
         
            // Insert image content into database 
           
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
                $statusMsg = "File uploaded successfully."; ?>
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

            }else{ 
                $statusMsg = "File upload failed, please try again."; 
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