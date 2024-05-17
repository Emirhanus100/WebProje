<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <title>Hakkında  Ekrani</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" a href="Hakkındasekmesi.css">
    </head>
    <body>
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
            <div class="HakAna">
                <input type="checkbox" id="chk" aria-hidden="true">                                     
                    <div class="solpanel">
                    <div class="profilyazısı">
                        <div class="resimpro">
                        <img src="mta.jpg">
                        <div class="overlay">
    <div class="overlay-text">Ankara MTA'DA Bulunan Gomphotherium  fosili</div>
  </div>
                        </div>
                        <h2> MTA FOSİLLERİ<br></h2>
                    </div>
                    <div class="iletişim"><br><br><br><br><br><br>
                        <P>AŞŞAĞIDA KAMPÜSTE ÇEKTİĞİM BAZI KUŞ FOTOĞRAFLARI BULUNMAKTADIR</p><br>
                        <div class="sliderKuşResimleri">
    <div class="Resimler">       
    <img src="sSarıİskete.jpg" class="resimliste" alt="resim1">
  <img src="İspinoz.jpg" class="resimliste" alt="resim2">
  <img src="KızılGerdan.jpg" class="resimliste" alt="resim3">
    </div>
          <button class="Onceki" onclick="OncekiSlide()">&#10094</button>
          <button class="Sonraki" onclick="SonrakiSlide()">&#10095</button>              
  </div>
                       
                    </div><br><br><br>
                    </div>
                    <div class="sagpanel">
                     <div class="Tecrübe">
                        <h3 class="başlık2" align="center">HOBİLERİM</h3>
                        <ul>
                            <li><br><h3 class="başlık2">PALEONTOLOJİ</h3>
                                <span class="text">Geçmişin izlerini sürmek ve Dünya'nın milyonlarca yıl önceki yaşam formlarını keşfetmek benim için büyük bir tutku. Fosillerin incelenmesi ve bu eski canlıların hayatları hakkında bilgi edinmek, tarih öncesi dönemlere olan ilgimi sürekli canlı tutuyor. Paleontoloji, bana zamanın derinliklerinde yolculuk yapma fırsatı sunuyor.</span>
                            </li><br><br>
                            <li><br><h3 class="başlık2">Kuş Fotoğrafçılığı</h3>
                                <span class="text">Doğanın sessiz sakinleri olan kuşları gözlemlemek ve fotoğraflarını çekmek, beni hem doğa ile bağdaştırıyor hem de sabır ve dikkat gibi önemli becerilerimi geliştiriyor. Farklı türleri ve onların doğal yaşam alanlarını keşfetmek, her çekimde yeni bir macera yaşamamı sağlıyor.</span>
                            </li><br><br>
                            <li><br><h3 class="başlık2">Arkeoloji (Çoğunlukla Roma Mimarisi)</h3>
                                <span class="text">Geçmiş uygarlıkların izlerini sürmek ve özellikle Roma İmparatorluğu'nun mimari harikalarını incelemek, arkeolojiye olan ilgimin temelini oluşturuyor. Antik Roma'nın yapıları, mühendislik harikaları ve sanat eserleri, tarih ve mimariye olan merakımı sürekli besliyor. Bu alandaki kazı çalışmalarını ve keşifleri yakından takip ediyorum.</span>
                            </li><br><br>
                            <li><br><h3 class="başlık2">Basketbol</h3>
                                <span class="text">Basketbol, hayatımda hem fiziksel aktivite hem de eğlence kaynağı olarak önemli bir yer tutuyor. NBA maçlarını büyük bir heyecanla takip ederim ve favori oyuncularımın performanslarını izlemekten keyif alırım. Özellikle Alperen Şengün'ün kariyerini ilgiyle takip ediyorum ve onun oyun stilini beğeniyorum.</span>
                            </li><br><br>
                            
                        </ul><br>
          
                       
                       
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
    <script src="script.js" defer></script>

  </body>
</html>