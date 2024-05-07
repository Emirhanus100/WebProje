<?php
echo"<pre>";

$renks=array("Yeşil","Siyah","Lacivert");

print_r($renks);
echo"---------";
print_r($_POST);
eval("Renkler1"); // stringi değişkene çeviriyor.
/*
İf($_POST[Renkler1])
{

}
if($_POST[Renkler1])
{

}

İf($_POST["Renkler"][0]=="yeşil")
{

}
*/

for($i =0;$izcount($_POST["Renkler"])) // dolar işareti ile değişken tanınır.

echo"Değer =>",$_POST["renkler"][$i];
echo"<br";

/*
if($_POST["Renkler"][$i]=="0")
echo"yeşil";
if($_POST["Renkler"][$i]=="1")
echo"siyah";
if($_POST["Renkler"][$i]=="2")
echo"lacivert";
*/

?>