<?php session_start();

$errorL = $succesL = "";

if(isset($_POST['Submit'])){

    $logins = array('Vlad' => '123456','username1' => 'password1','username2' => 'password2');

    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    if (isset($logins[$Username]) && $logins[$Username] == $Password){

        $_SESSION['UserData']['Username']=$logins[$Username];
        $succesL="<span style='color:green'>*Vați logat cu succes</span>";
    } else {
        $errorL="<span style='color:red'>*Parola sau numele este greșit</span>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Everest</title>
    <link rel="shortcut icon" href="../img/login-icon.png"/>
    <link rel="stylesheet" href="../css/login.css" type="text/css">
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
        <li><a href="../support.html">Support<img src="../img/support_icon.png" alt="" class="sprtIcon"></a></li>
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
<form action="" method="post" name="login_form" class="loggin">

    <h3>Log In</h3>

    <?php echo $errorL;?>
    <?php echo $succesL;?>

    <label for="username" class="username">Username</label>
    <input type="text" name="Username" placeholder="Username" id="username">

    <label for="password" class="password">Password</label>
    <input type="password" name="Password" placeholder="Password" id="password">

    <button name="Submit" class="submit">Log In</button>
    <p class="registerC">Nu ai un cont? <a href="register.php">Register</a></p>
</form>
<script src="../js/darkmode.js"></script>
</body>
</html>

