<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nume=$_POST['nume'];
        $posta=$_POST['posta'];
        $help=$_POST['help'];
        $fp = fopen('support.txt', 'a');
        fprintf($fp,"----------------------------------\n");
        fprintf($fp,"Numele : %s\n", $nume);
        fprintf($fp,"mail : %s\n", $posta);
        fprintf($fp,"Problema : %s\n", $help);
        fclose($fp);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Support</title>
    <link rel="stylesheet" href="css/darkmode.css" type="text/css">
    <link rel="stylesheet" href="css/support.css" type="text/css">
    <link rel="shorcun icon" href="img/support_icon.png"/>
</head>
<body onload="onload()">
<div class="menu">
    <ul>
        <img src="img/index-menu.png" alt="" id="icon" >
        <li><a href="index.html">Home</a></li>
        <li><a href="general.html">General</a></li>
        <li><a href="recorduri.html">Recorduri</a></li>
        <li><a href="harta.html">Harta</a></li>
        <li><a href="support.php">Support<img src="img/support_icon.png" alt="" class="sprtIcon"></a></li>
        <div class="darkmodebutton">
            <input type="checkbox" class="button" id="btn" onclick="darkmode()"/>
            <label class="label" for="btn">
                <div class="ball"></div>
            </label>
        </div>
    </ul>
</div>
<form action="support.php" method="post" name="support" id="support" onsubmit="return errormsg()">
    <div class="nume">
        <label>Care este numele dumnevoastră?</label><br>
        <label class="subnume">Este o plăcere să te cunosc...</label><br>
        <input type="text" name="nume" id="name" placeholder="Numele,prenumele..."><br>
        <p id="errorNume"></p>
    </div>

    <div class="posta">
        <label>Care este poșta dumnevoastră?</label><br>
        <label class="subposta">Hai să păstrăm legătura...</label><br>
        <input type="email" name="posta" id="posta" placeholder="name123@mail.ru"><br>
        <p id="errorPosta"></p>
    </div>
    <div class="help">
        <label>Cu ce te putem ajuta?</label><br>
        <label class="subhelp">Așteptăm cu nerăbdare să avem o discuție interesantă...</label><br>
        <input type="text" name="help" id="help" autocomplete="off" placeholder="Introdu textul..."><br>
        <p id="errorHelp"></p>
    </div>
        <input type="submit" value="Expediază" class="submit" id="submit" onclick="succesmsg()">
</form>
<script src="js/darkmode.js"></script>
<script src="js/support.js"></script>
</body>
</html>