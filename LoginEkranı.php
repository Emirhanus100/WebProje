<!DOCTYPE html>
<head>
<title>Kayan Giris Ekrani</title>
<link rel="stylesheet" type="text/css" href="KayanEkran.css">
</head>
<body> 
    <div class="BAŞLIK">
        <div class="LOGOTASARIM">
        <p>MİTA .</p>
        </div>
        <div class="Menü">
            <span class="icon"><ion-icon name="menu"></ion-icon></span>
            <ul>
                <li><a href="LoginEkranı.php" class="link active">ANA SAYFA</a></li>
                <li><a href="Hakkında.php" class="link active">HAKKINDA</a></li>
            </ul>
        </div>
    </div>
    <div class="Ana">
        <input type="checkbox" id="chk" aria-hidden="true">         
    <div class="Giris">
        <form action="giriş.php" method="post">           
            <label for="Gir" aria-hidden="true">Giris Yap</label>      
            <div class="input-box">    
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" placeholder="Email" required="">
            </div>
         <div class="input-box">
            <span class="icon"><ion-icon name="lock"></ion-icon></span>
            <input type="password" name="sfre" placeholder="Sifre" required="">
        </div>        
            <div class="Temizleme">
                <button type="reset">Temizle</button>   <button>Giris Yap</button>     
            </div>                   
        </form>
    </div>        
</div>

<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
</body>

</html>