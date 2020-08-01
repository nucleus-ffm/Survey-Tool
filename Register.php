<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Survey-Tool</title>
  <!-- begin import css -->
  <link rel="stylesheet" href="css/Register.css"/>
  </head>

  <body>
  <form action="action_page.php">
 
  <!-- Start Login Section -->
  <div class="container">
    
  <h1>Anmelden</h1>
      <p>Geben Sie Ihre Daten ein, um sich anzumelden!</p>
      <hr>
      <label for="username"><b>Benutzername </b></label>
    <br>
    <input type="uname" placeholder="Benutzername eingeben" name="uname" id="uname" required>
    <br>
    <label for="psw"><b>Passwort</b></label>
    <br>
    <input type="password" placeholder="Passwort eingeben" name="psw" id="psw" required>
    <button type="submit" class="loginbtn">Anmelden</button>
    <hr>
    
  </div>

  <div class="container signin">
    <p>Sie sind noch nicht registriert? <br>↓ Registrieren Sie sich hier ↓</p>
  </div>
</form>
  <!-- Start Register Section -->
  <form action="action_page.php">
  <div class="container">
    <h1>Registrieren</h1>
    <p>Bitte füllen Sie die Felder aus, um sich zu registrieren!</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <br>
    <input type="text" placeholder="Email eingeben" name="email" id="email" required>
    <br>
    <label for="username"><b>Benutzername </b></label>
    <br>
    <input type="uname" placeholder="Benutzername festlegen" name="uname" id="uname" required>
    <br>
    <label for="psw"><b>Passwort</b></label>
    <br>
    <input type="password" placeholder="Passwort festlegen" name="psw" id="psw" required>

    <button type="submit" class="registerbtn">Registrieren</button>
</form> 