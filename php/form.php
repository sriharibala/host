<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">Portfolio </a>
 
        <div class="bx bx-menu" id="menu-icon"></div>
 
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#services">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>
    <!-- Home -->
<?php
if(isset($_POST['Send'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $con=mysqli_connect("localhost","root","","portfolio");
    $sql="insert into port values('$name','$email','$message')";
    if($con->query($sql)==true)
    {
     echo "Inserted  Successfullly";
    }
    else{
        echo "failed";
    }
}
?>  
</body>
</html>