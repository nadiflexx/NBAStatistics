let currentRow = 0;
const APY_KEY = "ccd4611e67e140d1b39eb9bcc2b49d85";
function showRow(row) {
  // Show the specific row and hide the rest
  const table = document.getElementById('myTable');
  for (let i = 0; i < table.rows.length; i++) {
    table.rows[i].style.display = (i === row) ? 'table-row' : 'none';
  }
  currentRow = row; // Update the current row index
}

function showNext() {
  // Show the next row
  currentRow = (currentRow + 1) % document.getElementById('myTable').rows.length;
  showRow(currentRow);
}

function showPrevious() {
  // Show the previous row
  currentRow = (currentRow - 1 + document.getElementById('myTable').rows.length) % document.getElementById('myTable').rows.length;
  showRow(currentRow);
}

function getPlayers() {
  fetch('https://api.sportsdata.io/v3/nba/scores/json/PlayersActiveBasic?key='+ APY_KEY, )
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
