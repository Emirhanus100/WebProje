<!DOCTYPE html>
<head>
<title>Şehrim Ekrani</title>
<link rel="stylesheet" a href="sehrim.css">
</head>
<body>
<nav>
        <ul class="sidebar">    
        <li onclick=hideSidebar()><a href='#'><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href='Şehrim.php'><ion-icon name="home-outline"></ion-icon>Ana Sayfa</a></li>
        <li><a href='Hakkındasekmesi.php'><ion-icon name="book-outline"></ion-icon>Hakkında</a></li>
        <li><a href='ilgialanısekmesi.php'><ion-icon name="telescope-outline"></ion-icon>İlgi Alanı</a></li>
        <li><a href='Mirasımız.php'><ion-icon name="location-outline"></ion-icon>MALATYA'NIN MİRASI</a></li>
        <li><a href='ŞehirTanıtım.php'><ion-icon name="images-outline"></ion-icon>Şehrim</a></li>
        <li><a href='Özgecmis.php'><ion-icon name="person-circle-outline"></ion-icon>Özgeçmiş</a></li>
        <li><a href='İletişimsekmesi.php'><ion-icon name="call-outline"></ion-icon>İletişim</a></li>
</ul>
<ul>
        <li><a href='#'>MİTA</a></li>
        <li class="hideOnMobile"><a href='Şehrim.php'>Ana Sayfa</a></li>
        <li class="hideOnMobile"><a href='Hakkındasekmesi.php'>Hakkında</a></li>
        <li class="hideOnMobile"><a href='ilgialanısekmesi.php'>İlgi Alanı</a></li>
        <li class="hideOnMobile"><a href='Mirasımız.php'>MALATYA'NIN MİRASI</a></li>
        <li class="hideOnMobile"><a href='ŞehirTanıtım.php'>Şehrim</a></li>
        <li class="hideOnMobile"><a href='Özgecmis.php'>Özgeçmiş</a></li>
        <li class="hideOnMobile"><a href='İletişimsekmesi.php'>İletişim</a></li>
        <li onclick=showSidebar()><a href='#'><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
</ul>
  </nav>


  <div class ="hideOnMobile">
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
</div>

 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
    function showSidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
    }
    function hideSidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
    }
    </script>
</body>
</html>
