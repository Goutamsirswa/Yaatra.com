<?php
include("./connectG.php");

if (isset($_POST['upload'])) {
   $Place_name=$_POST['place'];
   echo $Place_name;
   $image=$_FILES['imgUpload'];
   print_r($image);
   $imageFileName=$image['name'];
   $imageFileError=$image['error'];
   $imageFileTemp=$image['tmp_name'];
   $saprateFileName=explode('.',  $imageFileName);
   $fileExtension=strtolower($saprateFileName[1]);
   $extensions=array('jpeg','jpg','png');

   if(in_array($fileExtension,$extensions)){
    $upload_file='./images/'.$imageFileName;
    move_uploaded_file($upload_file,$imageFileTemp);    
    $sql="insert into `img_up` (place,image) values (' $Place_name  ',' $upload_file')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('Data insert successfully')</script>";

    }
    else{

        die(mysqli_error($con));
    }
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sql1="Select * from `img_up`";
    $result1=mysqli_query($con,$sql1);
    while ($row=mysqli_fetch_assoc($result1)) {
        $P_name=$row['place'];
        $P_img=$row['image'];

        echo '<h1>'.$P_name.'</h1> <img src='.$P_img.'>';
    }
    
    ?>
  
</body>
</html>