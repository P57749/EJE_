<?php include ("connected.php");?>
<?php

if($_POST){
        print_r($_POST);
    $user_name=$_POST['user_name'];
    $user_password=$_POST['user_password'];
$objconnection= new connection();

$sql="INSERT INTO `user` (`id`, `user_name`, `user_password`) VALUES (NULL,'$user_name', '$user_password');";

$objconnection->ejecutar($sql);
}

?>
<br />
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="ejercicio1.php" method="post">
        User:
        <input class="form-control" type="text" name="user_name" id="" />
        <br />
        Password:
        <input class="form-control" type="text" name="user_password" id="" />
        <br />
        <input class="btn btn-success" type="submit" value="Enviar" />
    </form>
</body>


</html>