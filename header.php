<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey-Tool</title>
    <link rel="stylesheet" href="css/main.css"/>

    <!-- Dropdown Menue -->
  	<div class="dropdown">
       <button onclick="toggleMenue()" class="">Einstellungen</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="profil.php">Profil</a>
            <a href="settings.php">Einstellungen</a>
            <a class="logout" href="logout.php">logout</a>
        </div>
  	</div>

  <script type="text/javascript">
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function toggleMenue() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
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
  </script>

</head>
<body>