<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desin your card</title>
    <link rel="stylesheet" href="CSS/visitingcard.css">
    <style>
        section{
    display:flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    margin-top:-20px;
}
 ul{
    display:flex; 
}
 li{
    list-style: none;
    margin: 10px;
}
section a{
    text-decoration:none;
    color:black
}
    </style>
 </head>
 <body>   
 <section>
        <a href="front.php"><h3>Printo</h3></a>
        <ul>
            <a href="signup.php"><li>Signup</li></a>
            <a href="login.php"><li>Login</li></a>
        </ul>
</section>
<!-- creating flex cards --> 
<h1 class="heading">design your<span> cards</span></h1>
<div class="main">
  
<div class="cards">
<div class="logo"></div>
<input type="text" class="name" maxlength="30" placeholder="business name">
<input type="text" class="slogan" maxlength="50" placeholder="about">
<input type="number" class="phone" maxlength="10"placeholder="Phone number">
<input type="text" class="website-link"  placeholder="website">
<input type="email" class="email" placeholder="email">
</div>
<!-- settings -->
<div class="setting">
    <span id="file"> <input type="file" accept="*image" id="upload">
  <lable for="upload" class=" upload"> To Upload Logo</lable></span>
    <!-- background -->
<div class="backgrounds">
    <img src="IMAGES/img1.jpg" class="active">
    <img src="IMAGES/img7.jpg" alt="">
    <img src="IMAGES/img3.jpg" alt="">
    <img src="IMAGES/img4.jpg" alt="">
    <img src="IMAGES/img5.jpeg" alt="">
    <img src="IMAGES/img8.jpg" alt="">
</div>
<a href="#" id="link" download="vising card.png"></a>
<!-- <a href="visiting card.html"> <button class="btn" >previous</button></a> -->
<button class="btn download-btn">Download Card</button>


</div>



</div>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

<script src="JS/visitingcard.js"></script>
  
</body>
</html>