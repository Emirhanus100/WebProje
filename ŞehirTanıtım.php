<!DOCTYPE html>
<head>
<title>Şehrim Ekrani</title>
<script src="script.js" defer></script>
<link rel="stylesheet" a href="ŞehirTanıtım.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
  <div class="HakAna">
    <input type="checkbox" id="chk" aria-hidden="true"> 
    <div class="Hakkındaİçerik">
    <h1 align="center">Malatya: Tarihin ve Lezzetin Buluştuğu Şehir</h1><br><br>
    <div class="sliderKuşResimleri">
    <div class="Resimler">
      <a  href="ansirbuzluk.php" target="_blank">       
    <img src="ansir-buzluk.png" class="resimliste" alt="resim1"></a>
    <a  href="leventvadi.php" target="_blank"> 
    <img src="vadi.jpg" class="resimliste" alt="resim2"></a>
    <a  href="kudrethavuzu.php" target="_blank"> 
  <img src="Kudrettt.jpg" class="resimliste" alt="resim3"></a>
  <a  href="kayısı.php" target="_blank"> 
  <img src="kaysı.jpg" class="resimliste" alt="resim4"></a>
  <a  href="battalgazicami.php" target="_blank"> 
  <img src="battalgazicami.jpeg" class="resimliste" alt="resim4"></a>
  <a  href="pestil.php" target="_blank"> 
  <img src="pestil.jpg" class="resimliste" alt="resim5"></a>

    </div>
          <button class="Onceki" onclick="OncekiSlide()">&#10094</button>
          <button class="Sonraki" onclick="SonrakiSlide()">&#10095</button>              
  </div><br><br><br><br>
  <div class="container">  
  <div id="AnsırMağraları">
  <p>Doğu Anadolu Bölgesi'nin incisi Malatya, tarihin ve lezzetin buluştuğu bir şehirdir. Fırat Nehri'nin kenarında yer alan Malatya, kadim uygarlıklara </p>
  <p> ev sahipliği yapmış ve bu zengin tarihi izlerini günümüze kadar taşımıştır.</p>
    <h1>Tarihi Yolculuk:</h1>
 <p> Ansır Mağaraları: M.Ö. 8. yüzyıla kadar uzanan tarihiyle Malatya'nın en önemli tarihi mekanlarından biridir. Kayalara oyulmuş bu mağaralar, Hitit </p>
 <p>döneminden kalma tapınakları, mezarları ve sarnıçlarıyla ziyaretçileri büyülemektedir.</p><br>
 <p> Levent Vadisi: Doğayla iç içe bir gezi için Levent Vadisi ideal bir yerdir. Yemyeşil vadinin içinde yürüyüş yapabilir, piknik yapabilir ve doğanın </p>
 <p>tadını çıkarabilirsiniz. </p><br>
 <p> Battalgazi Cami: 15. yüzyılda inşa edilen bu cami, Malatya'nın en eski camilerinden biridir. Kesme taştan inşa edilen cami, Selçuklu mimarisinin güzel </p>
 <p> bir örneğidir.</p>
 <h1>Lezzet Durakları:</h1>
 <p> Kayısı: Malatya denilince akla ilk gelenlerden biri kayısıdır. Dünyaca ünlü Malatya kayısısı, taze olarak tüketilebildiği gibi  kurutulmuş, pestil </p>
 <p>ve pekmez gibi farklı ürünlere de dönüştürülmektedir.</p><br>
 <p> Pestil: Malatya'nın meşhur lezzetlerinden biri olan pestil, kayısıdan yapılan geleneksel bir tatlıdır. Farklı aromalarla da üretilen pestil, Malatya'dan</p>
 <p>alınacak en güzel hediyelerden biridir.</p><br>
 <p> Kudret Havuzu: Şifalı suları ile bilinen Kudret Havuzu, Malatya'nın doğal güzelliklerinden biridir. Ziyaretçiler havuzda yüzebilir veya piknik yapabilirler. </p><br><br>
 <p> Malatya, tarihi ve kültürel zenginlikleri, doğal güzellikleri ve lezzetli mutfağı ile her yıl binlerce turisti cezbetmektedir. Şehirde konaklama için her </p>
 <p> bütçeye uygun otel ve pansiyonlar bulunmaktadır. Malatya'ya uçak, otobüs veya tren ile ulaşım mümkündür.</p>
 <p>Malatya'ya seyahat etmeyi düşünüyorsanız, bu tarihi ve lezzetli şehri keşfetmek için unutulmaz bir deneyim yaşayacaksınız.</p>

</div><br><br><br><br>
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