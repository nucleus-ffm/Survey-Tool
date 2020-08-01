<?php
include("header.php");
 ?>
<div>
  <div class="dashboard">
    <a href= "createForm.php"><button class="dashboard-button"> Neue Umfrage</button></a>
    <div class="dashboard-table-div">

    <?php
    require_once("config.php");
    $getData = "SELECT * FROM surveys ORDER BY createDate DESC";
		$result =$db_connection->query($getData) ;
		if ($result->num_rows > 0) {
        echo "<table class='table'>
        <tr> 
          <th>ID</th>
          <th>Title</th>
          <th>gestartet</th>
          <th>Auswertung</th>
          <th>control</th>
        </tr>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><th> " . $row["surveyID"]. " </th><th> " . $row["surveyTitle"]. " </th><th> " .$row["createDate"]. " </th><th>  Auswerung </th><th> <a href='/Survey-Tool-Github/join.php?ID=" . $row["surveyID"] . " '> <button>Ansehen</button></a> <button>Auswerung</button> <button>löschen</button></th></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
    }
    ?>
    </div>
  </div>
</div>
 <?php
 include("footer.php");
 ?>
