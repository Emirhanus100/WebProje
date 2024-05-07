<!DOCTYPE html>
<head>
<title>Hakkında Ekrani</title>
<link rel="stylesheet" type="text/css" href="Hakkındasayfasıiçin.css">
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
<div class="HakAna">
    <input type="checkbox" id="chk" aria-hidden="true"> 
    <div class="Hakkındaİçerik">
    <h1 align="center">OTOBİYOGRAFİ</h1>     
  Sevgili okurlarımız sayfamıza hoşgeldiniz.Ben Emirhan Fırat. 22 yaşında İstanbul'da ikamet eden biri olarak aslen Malatya'lıyım.
  <br> <h3>Hobilerim:</h3>
  <ul>
    <li>Paleontoloji</li>
    <li>Kuş Fotoğrafcılığı</li>
    <li>Arkeoloji (Çoğunlukla Roma mimarisi)</li>
    <li>Basketbol</li>
  </ul>
  <div class="sliderKuşResimleri">
    <div class="Resimler">
    <input type="radio" name="slide" id="resim1">
    <input type="radio" name="slide" id="resim2">
    <input type="radio" name="slide" id="resim3">
    
    <img src="Sarıİskete.jpg" class="iskete" id="resim1">
  <img src="İspinoz.jpg" class="İspinoz" id="resim2">
  <img src="KızılGerdan.jpg" class="KızılGerdan" id="resim3"> 
    </div>
    <div class="dots">
    <label1 for="resim1"></label>
    <label2 for="resim2"></label>
    <label3 for="resim3"></label>

    </div>

  
                        
  </div>
            
</div>

</div>

<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
</body>
</html>