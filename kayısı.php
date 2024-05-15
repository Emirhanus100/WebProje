<!DOCTYPE html>
<head>
<title>Şehrim Ekrani</title>
<script src="script.js" defer></script>
<link rel="stylesheet" a href="resimlerkısatanıtım.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
  <nav>
        <ul class="sidebar">    
        <li onclick=hideSidebar()><a href='#'><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href='Şehrim.php'>Ana Sayfa</a></li>
        <li><a href='HAKKINDA.php'>Hakkında</a></li>
        <li><a href='İlgialanı.php'>İlgi Alanı</a></li>
        <li><a href='Mirasımız.php'>MALATYA'NIN MİRASI</a></li>
        <li><a href='ŞehirTanıtım.php'>Şehrim</a></li>
        <li><a href='Özgecmis.php'>Özgeçmiş</a></li>
</ul>
<ul>
        <li><a href='#'>MİTA</a></li>
        <li class="hideOnMobile"><a href='Şehrim.php'>Ana Sayfa</a></li>
        <li class="hideOnMobile"><a href='HAKKINDA.php'>Hakkında</a></li>
        <li class="hideOnMobile"><a href='İlgialanı.php'>İlgi Alanı</a></li>
        <li class="hideOnMobile"><a href='Mirasımız.php'>MALATYA'NIN MİRASI</a></li>
        <li class="hideOnMobile"><a href='ŞehirTanıtım.php'>Şehrim</a></li>
        <li class="hideOnMobile"><a href='Özgecmis.php'>Özgeçmiş</a></li>
        <li onclick=showSidebar()><a href='#'><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
</ul>
  </nav>
  <div class="HakAna">
    <input type="checkbox" id="chk" aria-hidden="true"> 
    <div class="Hakkındaİçerik">
     <h1 align="center">Kayısı</h1><br><br>
     <div class="container">  
     <div id="KudretHavuzu">
     <div id="Kayısı">
<p>Malatya, dünyanın en lezzetli ve en kaliteli kayısılarının yetiştirildiği yerdir. Bölgenin iklimi ve toprak yapısı, kayısıların mükemmel bir şekilde büyümesine </p>
<p>olanak sağlar. Malatya kayısıları, taze olarak tüketilmesinin yanı sıra, kurutularak ve pestil yapılarak da değerlendirilmektedir. Malatya'ya giderseniz,</p>
<p> mutlaka bu lezzetli kayısılardan denemelisiniz. Kayısı, vitamin ve mineraller açısından oldukça zengin bir meyvedir. Potasyum, A vitamini, C vitamini</p> 
 <p> ve lif bakımından zengindir.</p><br>
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