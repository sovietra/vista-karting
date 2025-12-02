var nav = document.getElementById("togglediv"); // Select the navigation menu

var header = document.getElementById("header-div");

// Function to toggle the visibility of the menu
function toggleMenu() {
  // Check if the nav menu contains the 'hidden' class
  if (nav.classList.contains("hidden")) {
    // nav.classList.add("show"); // Show the menu
    nav.className = "show";
  } else {
    // nav.classList.add("hidden"  ); // Hide the menu
    nav.className = "hidden";
  }
}

header.addEventListener("mouseleave", () => {
  if (nav.classList.contains("show")) {
    toggleMenu();
  }
});
