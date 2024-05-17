<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <title>ilgi Alanı  Ekrani</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" a href="ilgialanısekmesi.css">
    </head>
    <body>
        <body>
        <nav>
        <ul class="sidebar">    
        <li onclick=hideSidebar()><a href='#'><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href='Şehrim.php'><ion-icon name="home-outline"></ion-icon>Ana Sayfa</a></li>
        <li><a href='HAKKINDA.php'><ion-icon name="book-outline"></ion-icon>Hakkında</a></li>
        <li><a href='ilgialanısekmesi.php'><ion-icon name="telescope-outline"></ion-icon>İlgi Alanı</a></li>
        <li><a href='Mirasımız.php'><ion-icon name="location-outline"></ion-icon>MALATYA'NIN MİRASI</a></li>
        <li><a href='ŞehirTanıtım.php'><ion-icon name="images-outline"></ion-icon>Şehrim</a></li>
        <li><a href='Özgecmis.php'><ion-icon name="person-circle-outline"></ion-icon>Özgeçmiş</a></li>
        <li><a href='İletişimsekmesi.php'><ion-icon name="call-outline"></ion-icon>İletişim</a></li>
</ul>
<ul>
        <li><a href='#'>MİTA</a></li>
        <li class="hideOnMobile"><a href='Şehrim.php'>Ana Sayfa</a></li>
        <li class="hideOnMobile"><a href='HAKKINDA.php'>Hakkında</a></li>
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
                        <img src="sengun.jpg">
                        <div class="overlay">
    <div class="overlay-text">Houston Rockets'daki temsilcimiz ALPEREN ŞENGOAT</div>
  </div>
                        </div>
                        <h2> ALPEREN ŞENGÜN<br></h2>
                    </div>
                    <div class="iletişim">
                        <h3 class="başlık">NBA OYUNCULARI</h3>
                        <P>AŞŞAĞIDA API ADRESİNDEN ÇEKİLMİŞ 20 NBA OYUNCUSU BULUNMAKTADIR</p><br>
                        <ul id="kuslar"></ul>
                       
                    </div><br><br><br>
                    
                    </div>
                    <div class="sagpanel">
                     <div class="Tecrübe">
                        <h3 class="başlık2">NBA Lig Formatı</h3>
                        <ul>
                            <li><br>
                                <span class="text">NBA, 30 takımdan oluşan iki konferansa (Doğu ve Batı) ayrılır. Her konferans üç alt lige (Atlantik, Merkez ve Güneydoğu Doğu Konferansı ve Pasifik, Dağlık ve Güneybatı) ayrılır. Sezon, her takımın diğer 29 takımla birer kez oynadığı 82 maçlık bir normal sezondan oluşur. Normal sezondan sonra, her konferanstan ilk 8 takım play-off'lara yükselir. Play-off'lar, yedi maçlık seri şeklinde oynanır ve NBA Finalleri ile sonuçlanır. NBA Finalleri'ni kazanan takım, NBA şampiyonu olur.</span>
                            </li><br><br>
                            <h3 class="başlık2">Önemli Ödüller</h3>
                            <li>
                                <span class="icon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span>
                                <span class="text">MVP: Sezonun en iyi oyuncusuna verilir.</span>
                            </li>
                            <li><br>
                                <span class="icon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span>
                                <span class="text">Yılın En İyi Yeni Çaylağı: Sezonun en iyi çaylağına verilir.</span>
                            </li> 
                            <li><br>
                                <span class="icon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span>
                                <span class="text">Yılın En İyi Koçu: Sezonun en iyi antrenörüne verilir.</span>
                            </li>
                            
                        </ul><br>
          
                       
                        <div class="Tecrübe">
                        <h3 class="başlık2"></h3>
                        <ul>
                            <li>
                                <span class="text">NBA, dünyanın en prestijli basketbol ligi olarak beni büyülemekte. Her takımın dinamikleri, oyuncuların yetenekleri ve maçların heyecanı beni ekran başına kilitliyor. Sezon boyunca oynanan maçları, playoffları ve özellikle NBA Finalleri'ni kaçırmamaya özen gösteririm.</span>
                            </li>
                            <li><br><br><br>
                                <span class="text">Favori oyuncum Alperen Şengün. Alperen’in oyun zekası, pota altındaki etkinliği ve her geçen gün daha da gelişen yetenekleri ile Türk basketbolunu NBA’de başarıyla temsil etmesi gurur verici. Onun kariyerini takip etmek ve desteklemek benim için büyük bir keyif.</span>
                            </li>
                        </ul>
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
    <script src="ilgialanıbasket.js"></script>
  </body>
</html>