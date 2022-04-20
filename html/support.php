<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Support</title>
    <link rel="stylesheet" href="../css/darkmode.css" type="text/css">
    <link rel="stylesheet" href="../css/support.css" type="text/css">
    <link rel="shorcun icon" href="../img/support_icon.png"/>
</head>
<body onload="onload()">
<div class="menu">
    <ul>
        <img src="../img/index-menu.png" alt="" id="icon" >
        <li><a href="index.html">Home</a></li>
        <li><a href="general.html">General</a></li>
        <li><a href="recorduri.html">Recorduri</a></li>
        <li><a href="harta.html">Harta</a></li>
        <li><a href="support.php">Support<img src="../img/support_icon.png" alt="" class="sprtIcon"></a></li>
        <div class="darkmodebutton">
            <input type="checkbox" class="button" id="btn" onclick="darkmode()"/>
            <label class="label" for="btn">
                <div class="ball"></div>
            </label>
        </div>
    </ul>
</div>
<form action="support.php" method="post">
    <div class="nume">
        <label>Care este numele dumnevoastră?</label><br>
        <label class="subnume">Este o placere sa te cunosc...</label><br>
        <input type="text" name="nume" placeholder="Numele,prenumele..."><br>
    </div>
    <div class="posta">
        <label>Care este poșta dumnevoastră?</label><br>
        <label class="subposta">Hai să păstrăm legătura...</label><br>
        <input type="text" name="posta" placeholder="Poșta..."><br>
    </div>
    <div class="help">
        <label>Cu ce te putem ajuta?</label><br>
        <label class="subhelp">Așteptăm cu nerăbdare să avem o discuție interesantă...</label><br>
        <input type="text" name="help" placeholder="Introdu textul..."><br>
    </div>
</form>
<script src="../js/darkmode.js"></script>
</body>
</html>