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
  <!-- end import css -->
  <!-- start dropdown menue -->
  <div class="dropdown">
      <button onclick="toggleMenue()" class="">Einstellungen</button>
      <div id="myDropdown" class="dropdown-content">
          <a href="profil.php">Profil</a>
          <a href="settings.php">Einstellungen</a>
          <a class="logout" href="logout.php">logout</a>
      </div>
  </div>
  <!-- end dropdown menue-->
  <!-- begin import js -->
  <script src="js/main.js"></script>
  <!-- end imoort js -->
</head>
<body>