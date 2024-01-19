const APY_KEY = "ccd4611e67e140d1b39eb9bcc2b49d85";

function getTeams() {
  fetch('https://api.sportsdata.io/v3/nba/scores/json/teams?key=' + APY_KEY)
    .then(response => response.json())
    .then(data => {
      // Assuming 'data' is an array of objects, each representing a team
      const tbody = document.getElementById('teams');
      console.log(data)

      data.forEach(team => {
        const row = tbody.insertRow();
        row.insertCell(0).textContent = team.Name;
        row.insertCell(1).textContent = team.City;
        row.insertCell(2).textContent = team.Conference;
        row.insertCell(3).textContent = team.Division;
      });
    });
}



