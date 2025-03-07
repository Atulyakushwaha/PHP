<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #coockie transfer data
    $user=$_COOKIE["userid"];
    $pass=$_COOKIE["password"];
    echo "<br> user id is :".$user;
    echo "<br> password is :".$pass;
    #session get
    session_start();
    $name=$_SESSION['username'];
    $pa=$_SESSION['password'];
    echo "<br><br> user id".$name;
    echo "<br> password".$pa;
    session_unset();
    session_destroy();


    ?>
</body>
</html>