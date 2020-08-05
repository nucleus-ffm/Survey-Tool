<?php
include("header.php");
include("registerdatabase.php");
include("logindatabase.php");
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
   <!-- Start Login Section -->
  <div class="container">
 
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="postLogin"> 
  <h1>Anmelden</h1>
      <p>Geben Sie Ihre Daten ein, um sich anzumelden!</p>
      <hr>
    <div class="form-group <?php echo (!empty($username_errLogin)) ? 'has-error' : ''; ?>">
    <label for="unameLogin"><b>Benutzername </b></label>
    <br>
    <input type="unameLogin" placeholder="Benutzername eingeben" name="unameLogin" id="unameLogin" value="<?php echo $usernameLogin; ?>" required>
    <br>
    </div>
    <div class="form-group <?php echo (!empty($password_errLogin)) ? 'has-error' : ''; ?>">
    <label for="psw1"><b>Passwort</b></label>
    <br>
    <input type="passwordLogin" placeholder="Passwort eingeben" name="pswLogin" id="pswLogin" required>
    </div>
    <button type="submit" class="loginbtn">Anmelden</button>
    <hr>
    
  </form>
  </div>

  <div class="container signin">
    <p>Sie sind noch nicht registriert? <br>↓ Registrieren Sie sich hier ↓</p>
  </div>


<!-- Start Register Section -->
<div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h1>Registrieren</h1>
    <p>Bitte füllen Sie die Felder aus, um sich zu registrieren!</p>
    <hr>
    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
    <label for="email"><b>Email</b></label>
    <br>
    <input type="text" placeholder="Email eingeben" name="email" id="email" value="<?php echo $email; ?>" required>
    <span class="help-block"><?php echo $email_err; ?></span>
    <br>
    </div>
    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
    <label for="username"><b>Benutzername </b></label>
    <br>
    <input type="uname" placeholder="Benutzername festlegen" name="uname" id="uname" value="<?php echo $username; ?>" required>
    <span class="help-block"><?php echo $username_err; ?></span>
    <br>
    </div>
    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
    <label for="psw"><b>Passwort</b></label>
    <br>
    <input type="password" placeholder="Passwort festlegen" name="psw" id="psw" value="<?php echo $password; ?>" required>
    <span class="help-block"><?php echo $password_err; ?></span>
    </div>
    <button type="submit" class="registerbtn">Registrieren</button>

</form> 
</body>