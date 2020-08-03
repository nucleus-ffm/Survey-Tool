<!-- landing Page 
Content: 
    - input Field to join Survey
-->
<div class="content">
    <!-- beginn input field to join Survey -->
    <div class="welcome"> 
        <!-- page info -->
        <p> <strong>Willkommen</strong> auf der Umfrageseite der ****. Wenn Du an einer Umfrage teilnehmen möchtest, gibt bitte unten diese ID der Umfrage ein. 
        informationen, wie Du selbst Umfragen erstellen kannst, findest du <a href="">hier</a>.
        </p>
    </div>
    <div class="IDinput">
        <form class="landing" action="join.php" method="GET">
            <input required name="ID" autofocus placeholder="Please input ID">
            <input class="landingSubmit" type="submit" value="join">
            <br>    
        </form>
    <a href="landingPage/index.php"><button class="roundButton">Erfahre hier mehr über uns </button> </a>
    </div>
    </div>
    <!-- end -->
<?php
include("footer.php");
?>