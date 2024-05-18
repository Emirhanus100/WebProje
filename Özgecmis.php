<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <title>Özgecmis Ekrani</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" a href="ozgec.css">
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
                        <img src="vesikalık.jpg">
                        </div>
                        <h2><span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span> EMİRHAN FIRAT<br><span>Bilgisayar Mühendisi</span></h2>
                        <p>(1/4)</p>
                    </div>
                    <div class="iletişim">
                        <h3 class="başlık">Eğitim Bilglileri</h3>
                        <ul>
                            <li>
                                <span class="icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                <span class="text">2016-2020 Ergün Öner Mehmet Öner Anadolu lisesi</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                <span class="text">2021-2023 Yıldız Teknik Üniversitesi İnşaat Mühendisliği</span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                <span class="text">2024 Sakarya Üniversitesi Bilgisayar Mühendisliği</span>
                            </li>
                            
                        </ul>
                    </div><br><br><br>
                    <div class="yetenekler">
         <div class="liste">
           <p class="koyu">Programlama Dilleri</p> <br>
         </div>
         <ul>
           <li>
             <div class="programlamadili">
               HTML
             </div>
             <div class="ilerlemeyüzdesi">
               <span style="width: 80%;"></span>
             </div>
             <div class="ilerlemeyüz">80%</div>
           </li>
           <li>
             <div class="programlamadili">
               JS
             </div>
             <div class="ilerlemeyüzdesi">
               <span style="width: 10%;"></span>
             </div>
             <div class="ilerlemeyüz">10%</div>
           </li>
           <li>
             <div class="programlamadili">
               C#
             </div>
             <div class="ilerlemeyüzdesi">
               <span style="width: 90%;"></span>
             </div>
             <div class="ilerlemeyüz">90%</div>
           </li>
           <li>
             <div class="programlamadili">
               C++
             </div>
             <div class="ilerlemeyüzdesi">
               <span style="width: 60%;"></span>
             </div>
             <div class="ilerlemeyüz">60%</div>
           </li>
           <li>
             <div class="programlamadili">
               Pyhton
             </div>
             <div class="ilerlemeyüzdesi">
               <span style="width: 25%;"></span>
             </div>
             <div class="ilerlemeyüz">25%</div>
           </li>
         </ul>
       </div>
                    </div>
                    <div class="sagpanel">
                     <div class="Tecrübe">
                        <h3 class="başlık2">İŞ GEÇMİŞİ</h3>
                        <ul>
                            <li><br>
                                <span class="icon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                <span class="text">Kayısı Satış Ve pazarlama / Malatyalılar Coşanay  A.Ş.</span>
                            </li><br>
                            <li>
                                <span class="icon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                <span class="text">Antika Halı Ve Kilim Pazarlama / Fırat Trading. Co.</span>
                            </li>
                            <li><br>
                                <span class="icon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                <span class="text">Yemek Paketleme / Avcılar Foodie Co.</span>
                            </li> 
                            <li><br>
                                <span class="icon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                <span class="text">DEPO Paketleme / Avcılar Foodie Co.</span>
                            </li>
                            
                        </ul><br>
          <div class="Diller">
         <div class="dilliste">
           <p class="başlık2">DİLLER</p> <br>
         </div>
         <ul>
           <li>
             <div class="programlamadili">
               Türkçe
             </div>
             <div class="ilerlemeyüzdesi">
               <span style="width: 80%;"></span>
             </div>
             <div class="ilerlemeyüz">80%</div>
           </li>
           <li>
             <div class="programlamadili">
               İngilizce
             </div>
             <div class="ilerlemeyüzdesi">
               <span style="width: 65%;"></span>
             </div>
             <div class="ilerlemeyüz">65%</div>
           </li>
         </ul>
       </div>
                    </div>

                       
                        <div class="Tecrübe">
                        <h3 class="başlık2">BECERİLERİ</h3>
                        <ul>
                            <li>
                                <span class="text">Kriz anında yaratıcı çözümler üretebilme</span>
                            </li>
                            <li><br>
                                <span class="text">Ekip içerisinde birlikte çalışma disiplini</span>
                            </li>
                            <li><br>
                                <span class="text">Zamanı en verimle şekilde kullanabilmme</span>
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
  </body>
</html>