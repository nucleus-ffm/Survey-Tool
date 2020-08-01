<?php
// connect to Database
require_once("../config.php");
header("Content-Type: text/html; charset=utf-8");

// create Tables
$createTableSurveys = "CREATE TABLE IF NOT EXISTS surveys
(
    surveyID INT (255) NOT NULL, 
    PRIMARY KEY (surveyID),
    userID INT (250) NOT NULL, 
    surveyTitle VARCHAR (250) NOT NULL, 
    createDate VARCHAR (250) NOT NULL

)DEFAULT CHARSET=utf8
ENGINE = MYISAM;
";
//TODO: fix date
if ($db_connection->query($createTableSurveys))
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

$createTableTextareas = "CREATE TABLE IF NOT EXISTS textareas
(
    surveyID INT (255),
    FOREIGN KEY (surveyID) REFERENCES surveys(surveyID),
    elementID VARCHAR (250) NOT NULL,
    elementType VARCHAR (30) NOT NULL,
    question VARCHAR(500) NOT NULL

)DEFAULT CHARSET=utf8
ENGINE = MYISAM;
";
/*PRIMARY KEY removed for test reasons */ 

if ($db_connection->query($createTableTextareas))
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
$createTableTexinputs = "CREATE TABLE IF NOT EXISTS textinputs
(
    surveyID INT,
    FOREIGN KEY (surveyID) REFERENCES surveys(surveyID),
    elementID VARCHAR (250) NOT NULL,
    elementType VARCHAR (30) NOT NULL,
    question VARCHAR(500) NOT NULL

)DEFAULT CHARSET=utf8
ENGINE = MYISAM;
";

if ($db_connection->query($createTableTexinputs))
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
$createTableRadioButtons = "CREATE TABLE IF NOT EXISTS `radioButtons`
(
    surveyID INT,
    FOREIGN KEY (surveyID) REFERENCES surveys(surveyID),
    elementID VARCHAR (250) NOT NULL,
    elementType VARCHAR (30) NOT NULL,
    question VARCHAR(500) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `value` VARCHAR (50) NOT NULL

)DEFAULT CHARSET=utf8 ENGINE = MYISAM;
";

if ($db_connection->query($createTableRadioButtons))
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
$createTableSliders = "CREATE TABLE IF NOT EXISTS `rangeSilder`
(
    surveyID INT,
    FOREIGN KEY (surveyID) REFERENCES surveys(surveyID),
    `elementID` VARCHAR (250) NOT NULL,
    `elementType` VARCHAR (30) NOT NULL,
    `question` VARCHAR(500) NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `startValue` VARCHAR (50) NOT NULL,
    `endValue` VARCHAR (50) NOT NULL

)DEFAULT CHARSET=utf8
ENGINE = MYISAM;
";

if ($db_connection->query($createTableSliders))
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

/*fill tables*/
$surveyTitle = $_POST['surveyTitle'];
$surveyID = $_POST['surveyID'];
$timestamp = time();
$date = date("d.m.Y");
/*fill survey Table */
$insert = "INSERT INTO surveys
(
    surveyID,
    userID, 
    surveyTitle, 
    createDate
)
 VALUES 
(
    '$surveyID', 
    '00000',
    '$surveyTitle',
    '$date'
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

foreach ($_POST as $key => $value) {
    //echo $key . ": " . $value . " ";
    if ($key == "type") {
        $type = $value;
        //echo ($type); 
    }else if ($key == "ID") {
        $ID = $value;
        //echo ($ID);
    }else if ($key == "question") {
        $question = $value;
        //echo ($question);
    }else if ($key == "name") {
        $name = $value;
        //echo ($name);
    }else if ($key == "value") {
        $fvalue = $value;
        //echo ($fvalue);
    }else if ($key == "startValue") {
        $startValue = $value;
        //echo ($startValue);
    }else if ($key == "endValue") {
        $endValue = $value;
        //echo ($endValue);
    }else if ($key == "surveyID") {
        //
    }else if ($key == "surveyTitle") {
        //
    }else {
        echo ("nothing fits: " . $key);
    }
}
if($type == "textarea") {
    $insert = "INSERT INTO textareas
    (
        surveyID,
        elementID,
        elementType,
        question
    )
     VALUES 
    (
        '$surveyID', 
        '$ID',
        '$type',
        '$question'
    )
    ";
}
if($type == "text") {
    $insert = "INSERT INTO textinputs
    (
        surveyID,
        elementID,
        elementType,
        question
    )
     VALUES 
    (
        '$surveyID', 
        '$ID',
        '$type',
        '$question'
    )
    ";
}
if($type == "radio") {
    $insert = "INSERT INTO radioButtons
    (
        surveyID,
        elementID,
        elementType,
        question,
        `name`,
        `value`
    )
     VALUES 
    (
        '$surveyID', 
        '$ID',
        '$type',
        '$question',
        '$name',
        '$value'
    )
    ";
}
if($type == "range") {
    $insert = "INSERT INTO rangeSilder
    (
        surveyID,
        elementID,
        elementType,
        question,
        `name`,
        `startValue`,
        `endValue`
    )
     VALUES 
    (
        '$surveyID', 
        '$ID',
        '$type',
        '$question',
        '$name',
        '$startValue',
        '$endValue'
    )
    ";
}
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
?>