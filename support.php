<?php
$succes = "";
$nume = $posta = $help = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nume=$_POST['nume'];
    $posta=$_POST['posta'];
    $help=$_POST['help'];
    $fp = fopen('support.txt', 'a');

    fprintf($fp,"----------------------------------\n");
    fprintf($fp,"Numele : %s\n", $nume);
    fprintf($fp,"mail : %s\n", $posta);
    fprintf($fp,"Problema : %s\n", $help);
    $nume = $posta = $help = "";

    fclose($fp);

    $succes = "* Datele introduse sau transmis cu succes";

}
if($succes){
    print_r( json_encode([
        "succes"=>"true",
        "data"=> $succes
    ]));
}else{
    print_r( json_encode([
        "succes"=>"false",
    ]));
}
?>