<!DOCTYPE html>
<html>
<head>
    <title>Şehrim Ekrani</title>
    <link rel="stylesheet" href="iletişimsekmesi.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
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

  <div id="app">
        <div id="error" class="error-message">{{ errorMessage }}</div>
        <div class="hideOnMobile">
            <div class="Ana">
                <input type="checkbox" id="chk" aria-hidden="true">         
                <div class="Giris">
                    <form @submit.prevent="submitForm">           
                        <label for="Gir" aria-hidden="true">İLETİŞİM</label>      
                        <div class="input-box">    
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <input type="text" placeholder="Adı" id="ad" name="ad" v-model="AD">
                        </div>
                        <div class="input-box">    
                            <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                            <input type="text" id="soyad" placeholder="Soyadı" name="soyad" v-model="SOYAD">
                        </div>
                        <div class="input-box">    
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="email" name="email" placeholder="Email" id="email" v-model="EMAIL">
                        </div>      
                        <div class="input-box">
                            <span class="icon"><ion-icon name="document-outline"></ion-icon></span>
                            <input type="text" id="konu" name="konu" placeholder="Konu" v-model="KONU">
                        </div> 
                        <div class="input-box">
                            <textarea id="mesaj" name="mesaj" rows="5" placeholder="Mesaj" v-model="MESAJ"></textarea>
                        </div>
                        <div class="Temizleme">
                            <button type="submit"  @click="submitForm">Kontrol JS</button>   
                            <button type="button" @click="checkForm">Kontrol</button>     
                        </div><br>
                        <a class="twittericon" href="https://twitter.com/emirhan02770150">           
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>                   
                    </form>
                </div>        
            </div>
        </div>
    </div>

    <script>
        function showSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'flex';
        }

        function hideSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'none';
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                AD: '',
                SOYAD: '',
                EMAIL: '',
                KONU: '',
                MESAJ: '',
                errorMessage: ''
            },
            methods: {
                checkForm() {
                    this.errorMessage = '';  

                    if (!this.AD.trim()) {
                        alert('Lütfen Ad alanını doldurun.');
                        return false;
                    }
                    if (!this.SOYAD.trim()) {
                        alert('Lütfen Soyad alanını doldurun.');
                        return false;
                    }
                    if (!this.EMAIL.trim()) {
                        alert('Lütfen Email alanını doldurun.');
                        return false;
                    }
                    
                    if (!this.KONU.trim()) {
                        alert('Lütfen Konu alanını doldurun.');
                        return false;
                    }
                    if (!this.MESAJ.trim()) {
                        alert('Lütfen Mesaj alanını doldurun.');
                        return false;
                    }

                    alert('Form geçerli!');

                    this.AD = '';
                    this.SOYAD = '';
                    this.EMAIL = '';
                    this.KONU = '';
                    this.MESAJ = '';
                },
                submitForm() {
                    const form = document.getElementById('form');
                    const email = document.getElementById('email');
                    const ad = document.getElementById('ad');
                    const soyad = document.getElementById('soyad');
                    const konu = document.getElementById('konu');
                    const mesaj = document.getElementById('mesaj');
                    const errorElement = document.getElementById('error');

                    let isValid = true;
                    

                    if (ad.value === "" || ad.value === null) {
                        alert('Ad boş olamaz!');
                        isValid = false;
                    }
                    if (soyad.value === "" || soyad.value === null) {
                        alert('Soyad boş olamaz!');
                        isValid = false;
                    }
                    if (email.value === "" || email.value === null) {
                        alert('Email boş olamaz!');
                        isValid = false;
                    }
                    if (konu.value === "" || konu.value === null) {
                        alert('Konu boş olamaz!');
                        isValid = false;
                    }
                    if (mesaj.value === "" || mesaj.value === null) {
                        alert('Mesaj boş olamaz!');
                        isValid = false;
                    }

                    if (isValid) {
                        alert("Form Başarıyla gönderildi");
                        this.AD = '';
                        this.SOYAD = '';
                        this.EMAIL = '';
                        this.KONU = '';
                        this.MESAJ = '';
                    } else {
                        errorElement.innerText = messages.join(", ");
                    }
                }
            }
        });
    </script>
</body>
</html>