<?php 
if (!isset($_SESSION['loggedIn'])) {
          // If the user is not logged show landing page...
          include("landing.php");
          exit;         
        }
        else {

        }
?>
<div class="content">
<!--this is the body-->
<h1> Willkommen <?php echo( $_SESSION["username"]) ?> </h1>
<p> Hier findest Du alle Informationen auf einen Blick</p>
</div>
