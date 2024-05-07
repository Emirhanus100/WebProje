<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <p id="PDerece">C derece gelecek </p>
    <br>
<input type="text" name="F Derece" id="Ftxt">
<br>
<button onclick="js:cevir();">Çevir</button>
<script>
    function cevir()
    {
        var inpF=document.getElementById("Ftxt").value;
        var pe=document.getElementById("PDerece");
        pe.innerHTML=(5/9)*(inpF-32);   
    }
</script>

</body>