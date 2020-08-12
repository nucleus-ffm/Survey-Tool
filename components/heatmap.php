<?php
include("head.php");
require_once("config.php");
// create Tables
$createTabletextinputsAnswers = "CREATE TABLE IF NOT EXISTS textinputsAnswers
(
    surveyID INT (255) NOT NULL,
    userValue VARCHAR (250) NOT NULL, 
    ID VARCHAR (250) NOT NULL

)DEFAULT CHARSET=utf8
ENGINE = MYISAM;
";
//TODO: fix date
if ($db_connection->query($createTabletextinputsAnswers))
    {
        // success
        # echo "Success";
    }
else
    {
        // error
        echo "Table could not be created";
        print_r($db_connection);
    }
    
$maxAnzahl= 5;
$elementhaeufigkeit = 10;

if(isset($_POST['heatmapinput'])) {
    $word = $_POST['heatmapinput'];
    $insert = "INSERT INTO textinputsAnswers
    (
        surveyID,
        userValue, 
        ID 
    )
     VALUES 
    (
        '567049', 
        '$word',
        '1234'
    )
    ";
    if ($db_connection->query($insert))
    {
        // success
        # echo "Success";
    }
    else
    {
        // error
        echo "Table could not be filled";
        print_r($db_connection);
    }  

}
?>
<div class="heatmapinput">
<form action="" method="POST">
    <input name="heatmapinput" placeholder="bitte etwas eingeben">
    <input type="submit">
</form>
</div>
<div class="heatMapContainer" id="heatMapContainer">
  <div class="heatMap" id="heatMap">

  </div>
  
</div>
<?php

$getSurvey = "SELECT *, COUNT(userValue) AS CuserValue FROM textinputsAnswers GROUP BY userValue";
$result =$db_connection->query($getSurvey);
if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
                <script>
                    var container = document.getElementById("heatMap");
                    newElemment = document.createElement('text');
                    var fontSize = <?php echo"".$row["CuserValue"]."";?>*10;
                    var color = "";
                    if (fontSize <=10) {
                        color = "black"
                    } else if(fontSize <=20) {
                        color = "blue";
                    } else if(fontSize <=30) {
                        color ="green";
                    }else if (fontSize <=40) {
                        color= "orange";
                    }else if(fontSize >= 50) {
                        color ="red";
                    }
                    console.log("fontsize is: " + fontSize);
                    newElemment.setAttribute("style", "font-size:" + fontSize + "px; color:" + color + ";margin: 3px");
                    newElemment.textContent = " <?php echo"". $row["userValue"]."";?> " + " ";
                    container.appendChild(newElemment);
                </script>
            <?php
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

