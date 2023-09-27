<?php   
    require("./mailing/mailfunction.php");

    $name = $_POST["name"];
    $phone = $_POST['phone'];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $body = "<ul><li>İsim: ".$name."</li><li>Telefon: ".$phone."</li><li>Email: ".$email."</li><li>Mesaji: ".$message."</li></ul>";

    $status = mailfunction("snmz.mert27@gmail.com", "", $body); //reciever
    if($status)
        echo '<center><h1>Teşekkürler! Mesajınızı Aldım.</h1></center>';
    else
        echo '<center><h1>Mesaj Gönderilirken Bir Hata Oluştu! Lütfen Tekrar Deneyin.</h1></center>';    

        
?>