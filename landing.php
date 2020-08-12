<!-- landing Page -->
<link rel="stylesheet" href="css/landing.css"/>
<div class="content height100">
    <!-- beginn input field to join Survey -->
    <div class="landingContainer">
        <!--<h1> Survey Tool </h1>-->
        <img src="assets/logo.png" height="100px" width="400px">
            <div class="IDinput">
                <lable for="ID">Bitte ID eingeben </lable>
                <form class="landing" action="join.php" method="GET">
                    <input required name="ID" autofocus placeholder="z.b. 345678">
                    <input class="landingSubmit" type="submit" value="LOS">
                    <br>    
                </form>
                <a href="landingPage/index.php"><button class="roundButton">Erfahre hier mehr über uns </button> </a>
            </div>
        <div class="landingCredits">
            <p> <a href ="">Betrieben durch NAME</a> - <a href="">Nutzungsbedingungen</a> </p>
        </div>
    </div>
</div>
    <!-- end -->
<?php
include("footer.php");
?>