var requestOptions = {
    method: 'GET',
    redirect: 'follow'
  };
  
  fetch("https://nba-stats-db.herokuapp.com/api/playerdata/season/2023", requestOptions)
    .then(response => response.json())
    .then(data => {
        const players = data.results;

        const userList = document.getElementById("kuslar");

        if (!players || players.length === 0) {
            const errorMessage = document.createElement("li");
            errorMessage.textContent = "No player data available.";
            userList.appendChild(errorMessage);
            return;
        }

        for (let i = 0; i < 15; i++) {
            const randomIndex = Math.floor(Math.random() * players.length);
            const randomPlayer = players[randomIndex];

            const playerInfo = `${randomPlayer.player_name} (Yaş: ${randomPlayer.age}, Oynadığı Maç Sayısı: ${randomPlayer.games})`;

            const playerInfoElement = document.createElement("li");
            playerInfoElement.textContent = playerInfo;

            userList.appendChild(playerInfoElement);

            players.splice(randomIndex, 1);
        }
    })
    .catch(error => console.log('error', error));