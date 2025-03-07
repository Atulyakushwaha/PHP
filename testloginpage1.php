<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $userid=$_POST["txtname"];
    $pass=$_POST["password"];
    if(strcmp($userid,"atulya")==0 and strcasecmp($pass,"atulyaa")==0)
      echo "valid password and userid";
    else
       echo "invalid password or user id or both";
    #coockie data transfer
    setcookie("userid",$userid);
    setcookie("password",$pass);
    # session method
    session_start();
    $_SESSION["username"]=$userid;
    $_SESSION["password"]=$pass;

    ?>
    <br><form method="post" action="testloginpage2.php">
        <button type="submit" name="submit">Submit</buttton>
    
</body>
</html>