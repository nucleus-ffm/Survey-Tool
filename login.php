<?php
include("head.php");
$_SESSION['loggedIn'] = TRUE; //remove that when the login is ready
include("header.php");
?>

<!-- import css -->
<link rel="stylesheet" href="css/Register.css"/>
<!-- // import css -->
  
<div class="content">

<!-- begin Login Section -->
<div class="LoginContainer container">
  <form action="">
    
    <h1>Anmelden</h1>
    <p>Geben Sie Ihre Daten ein, um sich anzumelden!</p>
    <hr>
    <label for="username"><b>Benutzername </b></label>
    <br>
    <input class="inputFields" placeholder="Benutzername eingeben" name="uname" id="uname" required>
    <br>
    <label for="psw"><b>Passwort</b></label>
    <br>
    <input class="inputFields" type="password" placeholder="Passwort eingeben" name="psw" id="psw" required>
    <button type="submit" class="loginbtn">Anmelden</button>
    <hr>

  </form>
</div>
<!-- end Login Section -->

<div class="container infoBox">
  <p>Sie sind noch nicht registriert? <br> Registrieren Sie sich hier -></p>
</div>

<!-- begin register Section -->
<div class="SigninContainer container">
  <form action="action_page.php">
  
    <h1>Registrieren</h1>
    <p>Bitte füllen Sie die Felder aus, um sich zu registrieren!</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <br>
    <input class="inputFields" type="text" placeholder="Email eingeben" name="email" id="email" required>
    <br>
    <label for="username"><b>Benutzername </b></label>
    <br>
    <input class="inputFields" type="text" placeholder="Benutzername festlegen" name="username" id="username" required>
    <br>
    <label for="password"><b>Passwort</b></label>
    <br>
    <input class="inputFields" type="password" placeholder="Passwort festlegen" name="password" id="password" required>
    <br>
    <label for="justification"><b>Begründung </b></lable>
    <br>
    <textarea name="justification" id="justification" required class="inputFields" placeholder="Gibt gib uns ein oder zwei Sätze warum und für was Du dieses Tool gerne einsetzen willst. Dies dient nur dazu, misbrauch zu verhindern und uns interessiert einfach was Ihr so damit machen wollt."></textarea>
    <br>
    <input type="checkbox" required > Ich habe die <a href="" >Nutzungsbedingungen</a> sowie die <a href="">Datenschutzerklärung</a> gelesen und akzeptiert
    <button type="submit" class="registerbtn">Registrieren</button>
    
  </form> 
</div>
<!-- end Register Section -->
</div>
<?php
include("footer.php");
?>