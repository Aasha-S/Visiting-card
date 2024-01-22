<?php


session_start();
$conn = mysqli_connect("localhost","root","","vistingcard");

if(isset($_POST["submit"]))
{

    $Email=$_POST["userlogin"];
    $Password=$_POST["passwordlogin"];
    
    $result=mysqli_query($conn,"SELECT * FROM tb_users WHERE username='$Email'OR email='$Email'");
    $row=mysqli_fetch_assoc($result);
    
        if(mysqli_num_rows($result)>0)
        {
            if($Password==$row["password"] && $Email==$row["email"]){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["id"];
            header("Location: visiting cardmain.php");
           }
        else
        {
        echo
        "<script> alert(' wrong password  or email');</script>";
        }
      }
    else
    {
        echo
        "<script> alert('not registered');</script>";
        }
    
}
    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
    height:250px;
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
    padding:2px;
}
a{

    text-decoration:none;
    color:white;
}
div{
    display:flex;
    width:240px;
    align-items:center;
    justify-content:center;
    margin:10px;
    margin-left:-10px;
}
.btn{
    width:70px;

}
</style>
</head>
<body>
    <h1>Login page</h1>
    <form action=""method="post" autocomplete="off">
    <label for="userlogin">UserName</label>
    <input type="text" name="userlogin"><br>
    <label for="passwordlogin">Password</label>
    <input type="password" name="passwordlogin"><br>
    <div>
    <button type="submit"name="submit">Login</button>
    <button><a href="logout.php">logout</a></button>
    <button class="btn"><a href='signup.php'>Register</a></button>
    </div>
    </form>
    
</body>
</html>