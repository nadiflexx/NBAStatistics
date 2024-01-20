const APY_KEY = "ccd4611e67e140d1b39eb9bcc2b49d85";

function getTeams() {
  fetch('https://api.sportsdata.io/v3/nba/scores/json/teams?key=' + APY_KEY)
    .then(response => response.json())
    .then(async data => {
      // Assuming 'data' is an array of objects, each representing a team
      const tbody = document.getElementById('teams');
      console.log(data)

      for (const team of data) {
        const row = tbody.insertRow();
        row.insertCell(0).textContent = team.Name;
        row.insertCell(1).textContent = team.City;
        row.insertCell(2).textContent = team.Conference;
        row.insertCell(3).textContent = team.Division;
        row.insertCell(4).textContent = await getTeamsStadium(team.StadiumID);
        const coordinates = await getStadiumCoordinates(team.StadiumID);
        row.insertCell(5).appendChild(getGoogleMapsStadiumImage(coordinates.lat.toString(), coordinates.lng.toString()));
      }
    });
}

async function getTeamsStadium(id) {
  try {
    const response = await fetch('https://api.sportsdata.io/v3/nba/scores/json/Stadiums?key=' + APY_KEY);
    const data = await response.json();
    let finalCity;
    data.forEach(stadium => {
      if (id === stadium.StadiumID) {
        finalCity = stadium.Name;
      }
    });
    return finalCity;
  } catch (error) {
    console.error('Error: ', error);
    return ""; // Return an empty string or handle the error as per your requirement
  }
}

async function getStadiumCoordinates(id) {
  try {
    const response = await fetch('https://api.sportsdata.io/v3/nba/scores/json/Stadiums?key=' + APY_KEY);
    const data = await response.json();
    let lat;
    let lng;
    data.forEach(stadium => {
        if (id === stadium.StadiumID) {
          if (id !== 51) {
            lat = stadium.GeoLat;
            lng = stadium.GeoLong;
          } else {
            lat = 37.768056;
            lng = -122.387500;
            console.log("Warriors")
          }
        }
      }
    )
    ;
    return {lat, lng};
  } catch
    (error) {
    console.error('Error: ', error);
    return null;
  }
}

function getGoogleMapsStadiumImage(dataLat, dataLng) {
  const mapBtn = document.createElement('img');
  mapBtn.src = "../assets/img/maps.png"
  mapBtn.width = 20;
  mapBtn.height = 20;
  mapBtn.href = '#';
  mapBtn.className = 'map-btn';
  mapBtn.setAttribute('data-lat', dataLat);
  mapBtn.setAttribute('data-lng', dataLng);
  mapBtn.textContent = 'Show Map';
  mapBtn.addEventListener('click', function () {
    var lat = this.getAttribute('data-lat');
    var lng = this.getAttribute('data-lng');
    showMap(lat, lng);
  });
  return mapBtn;
}

function showMap(lat, lng) {
  var url = "https://maps.google.com/?q=" + lat + "," + lng;
  window.open(url);
}


