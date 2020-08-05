<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Survey-Tool</title>
  <!-- begin import css -->
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/form.css"/>
  <link rel="stylesheet" href="css/footer.css"/>
  <link rel="stylesheet" href="css/header.css"/>
  <link rel="stylesheet" href="css/dashboard.css"/>
  <link rel="stylesheet" href="css/components-dropdown.css"/>

  <!-- end import css -->
  <!-- start dropdown menue -->
  <div class="headerLine">
  <button onclick="toggleMenue()" class="dropDownButton">Einstellungen</button>
      <div id="myDropdown" class="dropdown-content">
          <a href="index.php">Home</a>
          <a href="dashboard.php">Umfragen</a>
          <a href="settings.php">Einstellungen</a>
          <a class="Ausloggen" href="logout.php">Ausloggen</a>
        </div>
      </button>

  <form action="Register.php">
     <input class="LoginBTN" type="submit" value="Login/Registrieren"> 
  </form> 

  <form action="Logout.php">
     <input class="LogoutBTN" type="submit" value="Ausloggen"> 
  </form> 


</div>
<!-- end dropdown menue-->
  
<!-- begin import js -->
  <script src="js/main.js"></script>
    <!-- end import js -->
</head>
<body>
