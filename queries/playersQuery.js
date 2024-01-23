const APY_KEY = "ccd4611e67e140d1b39eb9bcc2b49d85";

function getPlayers() {
  fetch('https://api.sportsdata.io/v3/nba/scores/json/PlayersActiveBasic?key=' + APY_KEY,)
    .then(response => response.json())
    .then(data => {
      // Assuming 'data' is an array of objects, each representing a team
      const tbody = document.getElementById('players');
      data.forEach(player => {
        const row = tbody.insertRow();
        row.insertCell(0).textContent = player.FirstName + " " + player.LastName;
        row.insertCell(1).textContent = player.Position;
        row.insertCell(2).textContent = player.Height;
        row.insertCell(3).textContent = player.Weight;
        row.insertCell(4).textContent = player.Team;
      });
    });
}

