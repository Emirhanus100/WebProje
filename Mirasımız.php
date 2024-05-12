<!DOCTYPE html>
<head>
<title>Şehrim Ekrani</title>
<link rel="stylesheet" a href="Mirasımız.css">
</head>
<body>
  <nav>
        <ul class="sidebar">    
        <li onclick=hideSidebar()><a href='#'><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href='Şehrim.php'>Ana Sayfa</a></li>
        <li><a href='HAKKINDA.php'>Hakkında</a></li>
        <li><a href='iilgialanı.php'>İlgi Alanı</a></li>
        <li><a href='Mirasımız.php'>MALATYA'NIN MİRASI</a></li>
</ul>
<ul>
        <li><a href='#'>MİTA</a></li>
        <li class="hideOnMobile"><a href='Şehrim.php'>Ana Sayfa</a></li>
        <li class="hideOnMobile"><a href='HAKKINDA.php'>Hakkında</a></li>
        <li class="hideOnMobile"><a href='iilgialanı.php'>İlgi Alanı</a></li>
        <li class="hideOnMobile"><a href='Mirasımız.php'>MALATYA'NIN MİRASI</a></li>
        <li onclick=showSidebar()><a href='#'><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
</ul>
  </nav>
  <div class="HakAna">
    <input type="checkbox" id="chk" aria-hidden="true"> 
    <div class="Hakkındaİçerik">
    <h1 align="center">ARSLANTEPE  HÖYÜĞÜ</h1>   
    <div class="container">  
        <br><br>      
        <table>
    <tr>
      <td valign="top">
        <h1>Arslantepe Höyüğü: Anadolu'nun Tarihine Pencere</h1><br>
        <p>Malatya'da Fırat Nehri'nin kıyısında yer alan Arslantepe Höyüğü, M.Ö. 6000'den M.S. 11. yüzyıla kadar uzanan farklı</p> medeniyetlerin izlerini taşıyan, 
        Türkiye'nin en büyük ve UNESCO Dünya Mirası Listesi'nde yer alan höyüklerinden biridir.</p> Saray, tapınak, evler, mezarlar ve 
                çok sayıda eserin ortaya çıkarıldığı kazılar, bölgenin aristokrasinin doğduğu ve ilk devlet </p> şeklinin ortaya çıktığı resmi, dini 
                    ve kültürel bir merkez olduğunu gösteriyor. Arslantepe Aslan Heykeli, Arslantepe Kralı </p>Mühürü ve Karahöyük Sfenksi gibi eserler, höyüğün önemini 
                    vurgularken, Arslantepe Açık Hava Müzesi ve kazılardan</p> çıkan eserler ziyaretçilere Anadolu'nun tarihi ve kültürü hakkında eşsiz bir deneyim sunuyor.</p>
      </td>
      <td>
      <br><br><br><br>
        <figure>
        <img src="Aslantepe-Hoyugu-.jpg" alt="Arslantepe Höyüğü Görseli"><figcaption>Dünyanın en eski kral mezarını bulunduran Arslantepe Höyüğü</figcaption>
</figure>
    </td>  
    </tr>
  </table>
  <tr><br><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3127.6068671967114!2d38.35835927563708!3d38.381215071838874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407636ec69a712a5%3A0x6e6aa35c7d317665!2zQXJzbGFudGVwZSBIw7Z5w7zEn8O8!5e0!3m2!1str!2str!4v1715287519446!5m2!1str!2str" width="700" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</tr>
</div>
</div>
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
