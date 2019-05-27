<?php
require("connection.php");
$sorgula=mysqli_query($baglan,"SELECT eposta,sifre FROM users 
WHERE eposta='".$_POST["eposta"]."' AND sifre='".$_POST["sifre"]."'");
if(mysqli_num_rows($sorgula)>0){ 
echo "Kullanıcı Adı ve Parola Doğru";
header("Location:giris-ekrani.php");
$row=mysqli_fetch_row($sorgula);
}else{
echo "Kullanıcı Adı ve Parola Yanlış";
}

?>



