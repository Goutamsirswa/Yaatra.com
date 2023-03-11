<?php

$showAlert=false;
$login=false;
$FD=false;
if(isset($_POST['SignUp']))
{
    include("../TourRS/PHP/connectG.php");
   
    $username=$_POST["username"];
    $password=$_POST["password"];
    $city=$_POST["city"];
    $phoneN=$_POST["phonenumber"];
    $exists=false;
    if($exists==false)
    {
        $sql="INSERT INTO `user` ( `username`, `password`, `city`, `phoneN`, `dt`) VALUES (' $username', ' $password', ' $city', '$phoneN', current_timestamp());  ";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            $showAlert=true;
        }
    }
}
if(isset($_POST['Submit']))
{
    include("../TourRS/PHP/connectG.php");
   
    $name1=$_POST["name1"];
    $Email=$_POST["Email"];
    $FDtext=$_POST["FDTarea"];
    
    $sql="INSERT INTO `feedback` (`name`, `email`, `FDtext`) VALUES (' $name1 ', '$Email', '$FDtext')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
           $FD=true;
           
        }
        
    }

if(isset($_POST['SignIn']))
{
    include("../TourRS/PHP/connectG.php");
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        echo $num;
       if($num==1)
       {
        $login=true;
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location: \College Project\TourRS\index.php");
       }
       else{
        $showErr="Invalid credetials";
        
       }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    
    <link rel="stylesheet" href="./CSS/signup.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <style>
        .alert{
            color:white;
            text-align: center;
            margin-top: 5px;
            font-size: 18px;
        }
        .alert span{
            font-weight: 600;
        }
    </style>
</head>

<body>
    <section class="nav-section signup ">
        <nav class="navbar">
            <div>
                <ul class="nav-S-P menu-tab">
                    <li class="logoL"><a href="#"><img src="./img/logo.png" class="logo" alt=""></a></li>
                    <li><a href="\College Project\TourRS\index.php">Home</a></li>
                    <li ><a href="\College Project\TourRS\destination.php">Destination</a>
                       
                    </li>
                    <li><a href="\College Project\TourRS\Blog.php">Blog</a></li>
                    <li><a href="\College Project\TourRS\aboutus.php">About Us</a></li>
                    <li><a href="\College Project\TourRS\Gallery.php">Gallery</a></li>
                    <!-- <li><input type="search" name="" id=""></li> -->
                    <li><a href="\College Project\TourRS\signup.php">Sign Up</a></li>


                </ul>
            </div>

        </nav>
            <?php
           if($showAlert)
           {
            echo '<p class="alert"><span>Succuss!</span> Your account now created and you can login</p>';
           }
           if($login)
           {
            echo '<p class="alert"><span>Succuss!</p>';
           }
           else
           {
            // echo '<p class="alert">Invalid credetials</p>';
           }
           if($FD)
           {
            echo '<p class="alert"><span>Succuss!</p>';
           }

            ?>

        <div class="main-box">
        <div class="box-sign" id="box-signup">
            <h1 class="signup-hd">Sign Up</h1>
            <form action="\College Project\TourRS\signup.php" method="post" >
                <input type="text" name="username" id="username" placeholder="Username" class="signfield" >
                <input type="password" name="password" id="password" placeholder="Password" class="signfield" >
                <input type="text" name="city" id="city" placeholder="City" class="signfield">
                <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" class="signfield">
                <input type="submit" name="SignUp" value="SignUp" class="btn-sign">

            </form>
               
        </div>
        <div class="box-sign" id="box-signin">
            <h1 class="signup-hd">Sign In</h1>
            <form action="\College Project\TourRS\signup.php" method="post">
                <input type="text" name="username" id="username" placeholder="Username" class="signfield">
                <input type="password" name="password" id="password" placeholder="Password" class="signfield">
                <input type="submit" name="SignIn" value="SignIn" class="btn-sign">

            </form>
               
        </div>

        <div class="box-feedback" id="box-feedback">
            <h1 class="feedback-hd">Feedback Form</h1>
            <div>
            <form action="\College Project\TourRS\signup.php" method="post">
                <label for="name1">Name</label>
            <input type="text" name="name1" id="name1" class="fd-field">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" class="fd-field">
            <label for="FDTarea">feedback</label>
            <textarea name="FDTarea" id="FDTarea" cols="30" rows="7"></textarea>
            <input type="submit" value="Submit" name="Submit" class="FD_submit_btn" id="FD-submit">

        </form>
            </div>
        </div>
        <div class="sign_in_up_box">
            <div>
            <a href="#" class="btn" id="signup">Sign Up</a>
            <a href="#" class="btn" id="signin">Sign In</a>
            </div>
            <div class="fd">
            <a href="#" class="btn" id="feedback">FeedBack</a>
            </div>
        </div>
    </div>
    
    </section>
    <section>
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
    </section>
    <script src="./signup.js" > </script>
</body>

</html>