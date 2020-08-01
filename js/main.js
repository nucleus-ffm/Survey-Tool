 /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function toggleMenue() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
  
      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropDownButton')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
/*var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}*/

function openSurvey(SurvexID) {
  console.log("/Survey-Tool-Github/join.php?ID= " + SurvexID);
  window.location.replace("/Survey-Tool-Github/join.php?ID= + SurvexID +" );
}