<?php
if($_POST)
{
    if ($_POST["email"] == "emirhan.firat@ogr.sakarya.edu.tr")
    {
    echo"Email :";
    echo $_POST["email"];
    
    echo"<br>";
    if($_POST["sfre"] =="emirhan1234")
    {
    echo"Şifre :";    
    echo $_POST["sfre"];  
    echo"<br>";
    echo"İşlem başarıyla gerçekleşti.";
    }
    else
    {
        header("Location: Şehrim.php");     
    }
    }
    else  
    {
        echo"İşlem Gerçekleşemedi. Giriş sayfasına yönlendiriliyorsunuz";
        header("Location: Şehrim.php");     
    }
}               // Aşşağıda Link Giriş ekranına değil direkt sayfaya götürsün zaten başarısız olduğunda geri logine gönderiyor

?>
 <!DOCTYPE html>
<head>
</head>
<body>
    <br>
    //<a href="Şehrim.php">Giriş Ekranı</a> 
</body>
</html>


<?php


?>