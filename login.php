<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action='login.php' >
        <input type="text"name=txtname></input><br>
        <input type="password" name=password></input><br>
        <button type="submit"value="submit"name="submit">Submit</button>
        <button type ="reset"value="reset"> reset</button>
    </form><br><br>
    <?php
    if(isset($_POST['submit'])){
    $user=$_POST['txtname'];
    $pass=$_POST['password'];
    if(strcmp($user,"atulya")==0 and strcasecmp($pass,"atulyaa")==0)
        
         header("location:array.php");
    else 
         echo "<font color=red size=5>increat code</font>";
    }
   ?>
    
</body>
</html>