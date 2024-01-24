const APY_KEY = "ccd4611e67e140d1b39eb9bcc2b49d85";
let counter = 1

function getPlayers() {
  fetch('https://api.sportsdata.io/v3/nba/scores/json/Players?key=' + APY_KEY,)
    .then(response => response.json())
    .then(data => {
      // Assuming 'data' is an array of objects, each representing a team
      const tbody = document.getElementById('players');
      data.forEach(player => {
        const row = tbody.insertRow();
        const textNode = document.createTextNode(player.FirstName + " " + player.LastName);
        const image = getPlayersImage(player.NbaDotComPlayerID);
        const cell = row.insertCell(0);
        cell.insertBefore(textNode, cell.firstChild);
        cell.insertBefore(image, cell.firstChild);
        row.insertCell(1).textContent = player.Position;
        row.insertCell(2).textContent = player.Height;
        row.insertCell(3).textContent = player.Weight;
        row.insertCell(4).textContent = player.Team;
      });
    });
}


function getPlayersImage(playerID) {
  const img = document.createElement('img');
  if (playerID === null)
    img.src = "../assets/img/playerDefault.png";
  else
    img.src = "https://cdn.nba.com/headshots/nba/latest/1040x760/" + playerID + ".png"
  img.width = 130;
  img.height = 100;
  img.href = '#';
  img.addEventListener('click', function () {
    alert("Click!")
  });
  return img;
}
