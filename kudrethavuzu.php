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
     <h1 align="center">KUDRET HAVUZU</h1><br><br>
     <div class="container">  
     <div id="KudretHavuzu">
<p>Malatya'nın Darende ilçesinde yer alan Kudret Havuzu, doğal bir oluşumdur. Kayalık bir bölgede bulunan bu havuz, turkuaz renkli suyu ve şelalesiyle</p>
<p> oldukça güzel bir manzaraya sahiptir. Ziyaretçiler, havuzda yüzebilir, piknik yapabilir veya doğa yürüyüşleri yapabilir. Kudret Havuzu'nun şifalı suları </p>
<p>olduğu da bilinmektedir. Cilt hastalıklarına ve romatizmaya iyi geldiği söylenen bu sudan şifa arayan birçok insan buraya gelmektedir.</p> <br>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.2234415055245!2d37.490226475647034!3d38.5747020717948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4077f9d7dc826231%3A0x335e3aca5dbe4254!2sKudret%20Havuzu!5e0!3m2!1str!2str!4v1715777754716!5m2!1str!2str" width="960" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
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