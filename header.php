<!-- beginn body -->
<body>
<header>
  <!-- start dropdown menue -->
  <div class="headerLine">
      <?php 
        if (!isset($_SESSION['loggedIn'])) {
          // If the user is not logged in redirect to the login page...
          ?>
            <a style="margin-left: 2%; float: right" href="login.php"><button class="LoginBTN"> Login/Registrieren </button></a>
          <!-- end HeaderLinie -->
          </div>
          <?php
        } else {
          ?>
          <button onclick="toggleMenue()" class="dropDownButton">Einstellungen</button>
          <nav id="myDropdown" class="dropdown-content">
              <a href="index.php">Home</a>
              <a href="dashboard.php">Umfragen</a>
              <a href="">Einstellungen</a>
              <a class="Ausloggen" href="logout.php">Ausloggen</a>
          </nav>
          
          </div>
          <!-- end dropdown menue-->
            
          <!-- begin import js -->
          <script src="js/main.js"></script>
          <!-- end imoort js -->
          <?php
        }
    ?>
</header>