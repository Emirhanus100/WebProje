const Form= document.getElementById('form');
const Email= document.getElementById('email');
const AD= document.getElementById('ad');
const Soyad= document.getElementById('soyad');
const konu = document.getElementById('konu');
const mesaj = document.getElementById('mesaj');
const errorElement = document.getElementById('error');

Form.addEventListener('submit',(e)=>{
    let isValid = true;


    if(AD.value ===""|| AD.value ===null){
        alert('Ad boş olamaz!');
        isValid = false;
    }
    if(Soyad.value ===""|| Soyad.value ===null){
        alert('Soyad boş olamaz!');
        isValid = false;
    } 
    if(konu.value ===""|| konu.value ===null){
        alert('Konu boş olamaz!');
        isValid = false;
    }
    if(mesaj.value ===""|| mesaj.value ===null){
        alert('Mesaj boş olamaz!');
        isValid = false;
    }
   if(isValid){
    alert("Form Başaryla gönderildi");//<form action="giriş.php" method="post" id="form">        
   }
        e.preventDefault()
        errorElement.innerText = messages.join(", ")
    
})