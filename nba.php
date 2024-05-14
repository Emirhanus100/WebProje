<!DOCTYPE html>
<html>
<head>
  <title>NBA Oyuncuları</title>
</head>
<body>
  <h1>NBA Oyuncuları (2021 Sezonu)</h1>
  <ul id="user-list"></ul>
  <script>
    const url = 'https://api-nba-v1.p.rapidapi.com/players?team=1&season=2021';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '59440ab13fmshe8e8573fbf30bf1p15f164jsncb1cc2eabd21',
		'X-RapidAPI-Host': 'api-nba-v1.p.rapidapi.com'
	}
};
fetch(url, options)
      .then(response => response.json())
      .then(data => {
        const oyuncular = data.results; // "results" anahtar kelimesi Türkçe'de "oyuncular" olarak çevrilebilir

        oyuncular.foreach(oyuncu => {
          const li = document.createElement("li");
          span = document.createElement("span");
          span.textContent = `${oyuncu.first_name} ${oyuncu.last_name}`; // İsim ve soyisimleri birleştirme
          li.appendChild(span);
          userList.appendChild(li);
        });
      })
      
  </script>
</body>
</html>