var requestOptions = {
    method: 'GET',
    redirect: 'follow'
  };
  
  fetch("https://nba-stats-db.herokuapp.com/api/playerdata/season/2023", requestOptions)
    .then(response => response.json())
    .then(data => {
        // Oyuncu verilerini results dizisinden al
        const players = data.results;

        // Kullanıcılar listesinin olduğu ul elementini seç
        const userList = document.getElementById("kuslar");

        // Veri boşsa veya oyuncu listesi yoksa hata mesajı göster
        if (!players || players.length === 0) {
            const errorMessage = document.createElement("li");
            errorMessage.textContent = "No player data available.";
            userList.appendChild(errorMessage);
            return;
        }

        // Rastgele on oyuncuyu seçmek için bir döngü oluştur
        for (let i = 0; i < 15; i++) {
            // Rastgele bir indeks oluştur ve bu indeksteki oyuncuyu seç
            const randomIndex = Math.floor(Math.random() * players.length);
            const randomPlayer = players[randomIndex];

            // Seçilen rastgele oyuncunun bilgilerini içeren metin oluştur
            const playerInfo = `${randomPlayer.player_name} (Yaş: ${randomPlayer.age}, Oynadığı Maç Sayısı: ${randomPlayer.games})`;

            // Oyuncu bilgilerini içeren li elementini oluştur
            const playerInfoElement = document.createElement("li");
            playerInfoElement.textContent = playerInfo;

            // Kullanıcılar listesine ekleyin
            userList.appendChild(playerInfoElement);

            // Seçilen oyuncuyu listeden kaldır
            players.splice(randomIndex, 1);
        }
    })
    .catch(error => console.log('error', error));