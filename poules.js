// Select the poules container
const poulesContainer = document.querySelector(".poules-container");

console.log("het werkt");

// Example data for the poules
const poules = [
  {
    naam: "Poule 1",
    beschrijving: "Team A vs Team B",
    datum: "14 oktober 2024",
    tijd: "11:00 - 11:30:",
    teams: {
      teamA: ["Pieter", "Jan", "Elsa", "Lisa"],
      teamB: ["Karel", "Elisa", "Emma", "Pablo"],
    },
  },
  {
    naam: "Poule 2",
    beschrijving: "Team C vs Team D",
    datum: "15 oktober 2024",
    tijd: "12:00 - 12:30",
    teams: {
      teamA: ["Pieter", "Sander", "Daan", "Jesse"],
      teamB: ["PIM ", "Rob", "Nina", "Glenn"],
    },
  },
  {
    naam: "Poule 3",
    beschrijving: "Team E vs Team F",
    datum: "16 oktober 2024",
    tijd: "13:00 - 13:30",
    teams: {
      teamA: ["Tim", "Jefrey", "Abdul", "Bas"],
      teamB: ["Kwek", "Kwik", "Kwak", "Quin"],
    },
  },
  {
    naam: "Poule 4",
    beschrijving: "Team G vs Team H",
    datum: "16 oktober 2024",
    tijd: "14:00 - 14:30",
    teams: {
      teamA: ["Bob", "Pascal", "Will", "Wendy"],
      teamB: ["Mario", "Darius", "Phil", "Jelle"],
    },
  },
  // Add other poules as needed
];

// Function to create poule cards
function renderPoules(poules) {
  // Clear the container before rendering
  poulesContainer.innerHTML = "";

  // Iterate through each poule
  poules.forEach((poule) => {
    // Create a new div for each poule
    const pouleDiv = document.createElement("div");
    pouleDiv.classList.add("poule-card");

    // Create team lists
    const teamAList = poule.teams.teamA
      .map((lid) => `<li>${lid}</li>`)
      .join("");
    const teamBList = poule.teams.teamB
      .map((lid) => `<li>${lid}</li>`)
      .join("");

    // Set the innerHTML for each poule
    pouleDiv.innerHTML = `
      <h2>${poule.naam}</h2>
      <p>${poule.beschrijving}</p>
      <div class="details">
        <p><strong>Datum:</strong> ${poule.datum}</p>
        <p><strong>Tijd:</strong> ${poule.tijd}</p>
      </div>
      <div class="team-container">
        <div class="team-box">
          <strong>Groep A:</strong>
          <ul>${teamAList}</ul>
        </div>
        <div class="team-box">
          <strong>Groep B:</strong>
          <ul>${teamBList}</ul>
        </div>
      </div>
    `;

    // Append each pouleDiv to the container
    poulesContainer.appendChild(pouleDiv);
  });
}

// Call the renderPoules function to display the poules
renderPoules(poules);

// Call pagination or other functions if necessary
function createPaginationButtons() {
  // Pagination logic here (optional)
}
