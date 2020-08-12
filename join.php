<?php
include("head.php");
if (!isset($_GET['ID'])) {
   header("location: index.php");
    exit;
}

$surveyID = $_GET['ID'];
require_once("config.php");
$getSurvey = "SELECT * FROM surveys WHERE surveyID = $surveyID";
$result =$db_connection->query($getSurvey);
if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo ("ID: " . $row["surveyID"]. " Title: ". $row["surveyTitle"]); 
            $surveyTitle = $row["surveyTitle"];
        }
    } else {
        echo "0 results";
}
if ($db_connection->query($getSurvey))
    {
        // success
        # echo "Success";
        
    }
else
    {
        // error
        echo "could not get data";
        print_r($db_connection);
    }

?>
 <link rel="stylesheet" href="css/answerForm.css"/>
 <div class="content">
 <form class="answerForm" id="answerForm" action="">

<h1><?php echo "$surveyTitle"?></h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Willkommen
    Dies ist eine Umfrage über das Survey-Tool, geschrieben und Lilsemy und Nucleus. Alle Eingaben sind 100% anoym. Das heißt aber
    nicht, dass Du diese Situation nutzt und antworten SPAMST. Möglicherweise werden wir dagegen noch schutzmaßnahmen ergreifen.
    Um nun an der Umfrage teilzunehmen, dürcke auf start.
</div>
<?php
//display the different element types"

// begin textarea //
$getSurveyElements = "SELECT * FROM textareas WHERE surveyID = $surveyID";
$result =$db_connection->query($getSurveyElements);
$NumberOfFields = mysqli_num_rows($result);

if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo ("
            <div class='tab'>
            <h2> " . $row["question"] . "</h2>
            <p><textarea oninput= 'this.className=``'> </textarea></p>
            </div>
            ");
        }
    } else {
        //echo "0 results";
}
//end textarea //
//begin rangeSlider //
$getSurveyElements = "SELECT * FROM rangeSilder WHERE surveyID = $surveyID";
$result =$db_connection->query($getSurveyElements);
$NumberOfFields = $NumberOfFields + mysqli_num_rows($result);

if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         echo ("
            <div class='tab'>
                <p> " . $row["question"] . "</p>
                <p>
                <input  oninput='this.className = ''' type='range' min='" . $row["startValue"] ."'max='".$row["endValue"]."'>
                </p>
            </div>
         ");
        }
        echo "</table>";
    } else {
        // echo "0 results";
}
//end rangeSlider //
//begin radioButtons //

/*$getSurveyElements = "SELECT * FROM radioButtons WHERE surveyID = $surveyID";
$result =$db_connection->query($getSurveyElements);
$NumberOfFields = $NumberOfFields + mysqli_num_rows($result);

if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // dem div tab die ID von dem DIV geben. Dann können wir es wieder finden und die anderen hinzufügen
            echo ("
            
            <div class='tab'>
            <p> " . $row["question"] . "</p>
            <p>
            <input type='range' min='" . $row["startValue"] ."'max='".$row["endValue"]."'>
            </p>
            </div>
            ");
        }
        echo "</table>";
    } else {
        echo "0 results";
}*/
// end RadioButtons //
//begin textinput //
$getSurveyElements = "SELECT * FROM textinputs WHERE surveyID = $surveyID";
$result =$db_connection->query($getSurveyElements);
$NumberOfFields = mysqli_num_rows($result);

if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo ("
            <div class='tab'>
            <h2> " . $row["question"] . "</h2>
            <p><input placeholder='Hier Antwort eingeben' oninput= 'this.className=``'></p>
            </div>
            ");
        }
    } else {
        // echo "0 results";
}
//end textinput // 
?>

<div>
  <div class="joinControl">
    <button class="prefQuestionButton" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button class="nextQuestionButton" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!--  beginn Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
    <?php
        for ($i = 1; $i <= $NumberOfFields; $i++) {
            echo" <span class='step'></span>";
        }
    ?>
</div>
<!-- end Circles -->
</form> 
</div>
<!-- inport JS Script -->
<script src="js/answerForm.js"></script>
<?php
include("footer.php");
?>