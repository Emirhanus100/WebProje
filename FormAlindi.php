<?php
echo "Datalar geldi <br>";
echo"AD     :" . $_POST["Ad"]."<br>" ; 
echo"SOYAD     :" . $_POST["Soyad"]."<br>" ; 

?>
<h3> Geken veriler listeleniyor </h3>
<?php

if(strlen ($_POST["Ad"])>2)
{
echo "<h3>Gelen veriler listelenemiyor. </h3>"
}
echo"
    <table>
    <tr>
    <td>AD</td>
    <td>:</td>
    <td>.$_POST["Ad"].</td>
    </tr>
    <tr>
    <td>SOYAD</td>
    <td>:</td>
    <td>.$_POST["Soyad"].</td>
    </tr>

    <tr>
    <td>Adres</td>
    <td>:</td>
    <td>.$_POST["Adres"].</td>
    </tr>

    <tr>
    <td 
    </tr>

"
?>
