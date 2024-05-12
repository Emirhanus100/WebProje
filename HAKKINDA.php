<!DOCTYPE html>
<head>
<title>Şehrim Ekrani</title>
<script src="script.js" defer></script>
<link rel="stylesheet" a href="HAKKINDA.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <h1 align="center">OTOBİYOGRAFİ</h1>   
    <div class="container">  
  Sevgili okurlarımız sayfamıza hoşgeldiniz.Ben Emirhan Fırat. 22 yaşında İstanbul'da ikamet eden biri olarak aslen Malatya'lıyım.
  <br> <h3>Hobilerim:</h3>
  <ul>
    <li>Paleontoloji</li>
    <li>Kuş Fotoğrafcılığı</li>
    <li>Arkeoloji (Çoğunlukla Roma mimarisi)</li>
    <li>Basketbol</li>
  </ul>
  İşte kampüste çektiğim kuş fotoğraflarının bir kısmı:
  <br>
  <br>
  <div class="sliderKuşResimleri">
    <div class="Resimler">       
    <img src="sSarıİskete.jpg" class="resimliste" alt="resim1">
  <img src="İspinoz.jpg" class="resimliste" alt="resim2">
  <img src="KızılGerdan.jpg" class="resimliste" alt="resim3">
    </div>
          <button class="Onceki" onclick="OncekiSlide()">&#10094</button>
          <button class="Sonraki" onclick="SonrakiSlide()">&#10095</button>              
  </div>
  <br>
  <br>
  Türkiye'deki Arkeolojik yapıları gezerken Yararlandığım site:
  <br>
  <div class="btn-group">
    <button type="button" class="btn btn-info">Siteler</button>
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="https://kulturenvanteri.com/tr">Arkeolojik Bölgeler Listesi</a></li>
      <li><a href="https://www.google.com.tr/maps">Google Maps</a></li>
    </ul>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </div>

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
