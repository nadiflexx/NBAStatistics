function getTeams() {
  fetch('https://www.balldontlie.io/api/v1/teams')
    .then(response => response.json())
    .then(data => {
      // Assuming 'data' is an array of objects, each representing a team
      const tbody = document.getElementById('teams');

      data.data.forEach(team => {
        const row = tbody.insertRow();
        row.insertCell(0).textContent = team.full_name;
        row.insertCell(1).textContent = team.city;
        row.insertCell(1).textContent = team.conference;
        row.insertCell(1).textContent = team.division;
      });
    });
}



