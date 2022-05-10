<?php
$username = $email = $password = $passwordA = $succes = "";
$saved = false;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['Username'];
        $email = $_POST['email'];
        $password = $_POST['Password'];
        $passwordA = $_POST['PasswordA'];

        $fp = fopen('register.txt', 'a');

            fprintf($fp, "----------------------------------\n");
            fprintf($fp, "Username : %s\n", $username);
            fprintf($fp, "email : %s\n", $email);
            fprintf($fp, "Password : %s\n", $password);
            $username = $email = $password = "";
            $saved = true;

        fclose($fp);

        if($saved){
            $succes = "* Vați înregistrat cu succes";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Everest</title>
    <link rel="shortcut icon" href="../img/login-icon.png"/>
    <link rel="stylesheet" href="../css/register.css" type="text/css">
    <link rel="stylesheet" href="../css/darkmode.css" type="text/css">
</head>
<body onload="onload()">
<div class="menu">
    <ul>
        <img src="../img/index-menu.png" alt="" id="icon" >
        <li><a href="../index.html">Home</a></li>
        <li><a href="../general.html">General</a></li>
        <li><a href="../recorduri.html">Recorduri</a></li>
        <li><a href="../harta.html">Harta</a></li>
        <li><a href="../support.php">Support<img src="../img/support_icon.png" alt="" class="sprtIcon"></a></li>
        <div class="darkmodebutton">
            <input type="checkbox" class="button" id="btn" onclick="darkmode()"/>
            <label class="label" for="btn">
                <div class="ball"></div>
            </label>
        </div>
        <div class="login" >
            <li><a href="login.php">Log In</a></li>
        </div>
        <div class="register" >
            <li><a href="register.php">Register</a></li>
        </div>
    </ul>
</div>
<form action="" method="post" name="register_form" class="registter">

    <h3>Register</h3>


    <label for="username" class="username">Username</label>
    <input type="text" name="Username" placeholder="Username" id="username" value="<?php $username?>">

    <label for="email" class="email">Email Adress</label>
    <input type="text" name="email" placeholder="name123@mail.ru" id="email" value="<?php $email?>">

    <label for="password" class="password">Password</label>
    <input type="password" name="Password" placeholder="Password" id="password" value="<?php $password?>">
    <label for="password" class="password">Password Again</label>
    <input type="password" name="PasswordA" placeholder="Password" id="password" value="<?php $passwordA?>">

    <p class="succes"> <?php echo $succes;?></p>
    <button name="Submit" class="submit">Register</button>
    <p class="loginC">Ai deja un cont? <a href="login.php">Log In</a></p>
</form>
<script src="../js/darkmode.js"></script>
</body>
</html>
