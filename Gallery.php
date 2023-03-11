<?php
// function inputField($placeholder,$name,$value,$type){
//   $ele="<div>
//   <input type='$type' name='$name' placeholder='$placeholder' value='$value' class=\"G_input\">
//   </div>
//   ";
//   echo $ele;
// }
include("./PHP/connectG.php");

if (isset($_POST['upload'])) {
   $Place_name=$_POST['place'];
  //  echo $Place_name;
   $image=$_FILES['imgUpload'];
  //  print_r($image);
   $imageFileName=$image['name'];
   $imageFileError=$image['error'];
   $imageFileTemp=$image['tmp_name'];
   $saprateFileName=explode('.',  $imageFileName);
   $fileExtension=strtolower($saprateFileName[1]);
   $extensions=array('jpeg','jpg','png');

   if(in_array($fileExtension,$extensions)){
    $upload_file='images/'.$imageFileName;
    move_uploaded_file($imageFileTemp,$upload_file);    
    $sql="insert into `img_up` (place,image) values (' $Place_name  ',' $upload_file')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        // echo "<script>alert('Data insert successfully')</script>";

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
    <title>Gallery</title>
     <link rel="stylesheet" href="./CSS/Gallery_form.css">
<link rel="stylesheet" href="./CSS/Gallery.css">
<link rel="stylesheet" href="./CSS/style.css">

</head>
<body>

    <nav class="navbar">
      <div>
          <ul class="nav-S-P menu-tab">
              <li class="logoL"><a href="#"><img src="./img/logo.png" class="logo" alt=""></a></li>
              <li><a href="\College Project\TourRS\index.php">Home</a></li>
              <li ><a href="\College Project\TourRS\destination.php">Destination</a>
                
              </li>
              <li><a href="#">Blog</a></li>
              <li><a href="\College Project\TourRS\aboutus.php">About Us</a></li>
              <li><a href="\College Project\TourRS\Gallery.php">Gallery</a></li>
              <!-- <li><input type="search" name="" id=""></li> -->
              <li><a href="\College Project\TourRS\signup.php">Sign Up</a></li>


          </ul>
      </div>

  </nav>
  
  <section class="gallery-section">
<div class="G-main container" >
  
  <div class="G-img">
    <img src="./img/tourist img/9.jpg" alt="">
    <h1>Jaipur</h1></div>
  <div class="G-img">
    <img src="./img/tourist img/2.jpg" alt="">
    <h1>Jaipur</h1></div>
  <div class="G-img">
    <img src="./img/tourist img/3.jpg" alt="">
    <h1>Jaipur</h1></div>
  <div class="G-img">
    <img src="./img/tourist img/4.jpg" alt="">
    <h1>Hwa Mahel(Jaipur)</h1></div>
  <div class="G-img">
    <img src="./img/tourist img/5.jpg" alt="">
    <h1>Jaisalmer</h1></div>
  <div class="G-img">
    <img src="./img/tourist img/6.jpg" alt="">
    <h1>Jaisalmer</h1></div>
  <div class="G-img">
    <img src="./img/tourist img/7.jpg" alt="">
    <h1>Udaipur</h1></div>
  <div class="G-img">
    <img src="./img/tourist img/8.jpg" alt="">
    <h1>Jodhpur</h1></div>
  
    <?php
    $sql1="Select * from `img_up`";
    $result1=mysqli_query($con,$sql1);
    while ($row=mysqli_fetch_assoc($result1)) {
        $P_name=$row['place'];
        $P_img=$row['image'];

        echo ' <div class=\'G-img\'>
        <img src='.$P_img.' >
        <h1>'.$P_name.'</h1></div>';
    }
    
    ?>

    <form action="./Gallery.php" method="post" enctype="multipart/form-data">
      
   
     <div class="upload_box">
     <input type="text" name="place"  placeholder="Enter Place name" class="G_input">
     <input type="file" name="imgUpload" class="file_choose">
     <button class="Upload_btn" name="upload">Upload</button>
     </div>
     
    </form>
    
    
</div>

  </section>
  <footer class="container footer">
    <div class="F_FS">
        <div>
            <p><a href="">Contact Us</a></p>
            <p><a href="">Private Policy</a></p>
            <p><a href="">term & Condition</a></p>
        </div>
      
    </div>
    <div class="social_media">
        <p><a href="#"><img src="./img/social media/facebook.png" alt=""></a></p>
        <p><a href="#"><img src="./img/social media/instagram.png" alt=""></a></p>
        <p><a href="#"><img src="./img/social media/twitter.png" alt=""></a></p>
        <p><a href="#"><img src="./img/social media/youtube.png" alt=""></a></p>
        
       </div>
    <div class="S_FS">
        <p><a href=""><img src="./img/logo.png" alt="" class="F_logo"></a></p>
            <p class="Address">Address: Rambilas Podar Road, Nawalgarh,<p class="Address"> Rajasthan 333042</p></p>
            
    </div>
    <p class="copyright">Copyright 	&#169; <a href="\College Project\TourRS\index.php">YAATRA.COM </a>2022</p>
</footer>
<div class="top-bottom" > <button class="top-bottom-btn" id="top-bottom-btn"><img src="./img/TOP arrow.png" alt=""></button></div>
</body>
<script src="./scrollbtn.js"></script>
</html>