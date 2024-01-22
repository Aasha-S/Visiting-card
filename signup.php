<?php


session_start();
$conn = mysqli_connect("localhost","root","","vistingcard");

if(isset($_POST["submit"])){
    $name=$_POST["username"];
    $Email=$_POST["email"];
    $Password=$_POST["password"];
    $conform=$_POST["conformpassword"];
    $duplicate=mysqli_query($conn,"SELECT * FROM tb_users WHERE username='$name' OR email='$Email'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script> alert('User name or email already taken');</script>";
    }
    else{
        if($Password == $conform){
            $query="INSERT INTO tb_users VALUES('','$name','$Email','$Password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('registerd');</script>";
            header("Location: visiting cardmain.php");
        }
        else{
            echo
            "<script> alert('password is wrong');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    width:100vw;
    height:100vh;
    background-color: #f6f6f6;
    font-family:'robato',sans-serif;
    padding:50px;
    user-select: none;
    display:flex;
    align-items:center;
    flex-direction:column;
    justify-content:center;

}
form{
    margin:20px;
    border:1px solid black;
    width:280px;
    height:330px;
    padding:30px;
    border-radius:10px;
}
label{
    font-size:15px;
    margin:10px;
}
input{
    outline:none;
    width:200px;
    height:25px;
    margin:10px;
}
button{
    border:none;
    outline:none;
    cursor: pointer;
    background-color:blue;
    width:70px;
    height:25px;
    margin:10px;
    color:white;
    border-radius:5px;
}
a{

    text-decoration:none;
    color:white;
}
/* .btn{
    margin-right:-200px;
} */
    </style>
</head>
<body>
    

    <h2>Sign Up page</h2>
    <form action=""method="post" autocomplete="off">
    <label for="username">UserName</label>
    <input type="text" name="username" require=""><br>
    <label for="email">Email</label>
    <input type="email" name="email" require=""><br>
    <label for="password">Password</label>
    <input type="password" name="password" require=""><br>
    <label for="conformpassword"> Conform Password</label>
    <input type="password" name="conformpassword" require=""><br>
    <button type="submit"name="submit">Sign Up</button>
    <button class="btn"><a href="login.php">login</a></button>
    </form>
</body>
</html>