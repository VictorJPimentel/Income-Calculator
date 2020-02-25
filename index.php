<html>
  <head>
    <title>Login</title>
  </head>
  <body>
   <?php include 'head.php';?>
   <div class="login">
  <form id='login' action='' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label for='username' required ><spam class="login-u">UserName*:</spam></label>
<input type='text' value='<?php if (isset($_POST['username'])) echo $_POST['username']; ?>' name='username' maxlength="50" />

<label for='password' required ><spam class="login-u">Password*:</spam></label>
<input type='password' name='password' value='<?php if (isset($_POST['password'])) echo $_POST['password']; ?>'' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Submit' class="button" />

</fieldset>
</form>
<?php
if(isset($_POST['username']) and isset($_POST['password'])) 
  { 
    if ($bool != true && $bool != true){
      echo "<form id='login' action='index.php' method='post' accept-charset='UTF-8'><input type='submit' class='denied' value='Denied! Click Here to try again' action='index.php' /></form>";
    }
 

    elseif ($bool == true && $bool == true)
  {
    $_SESSION['name'] = $_POST['username'];
    echo "<form id='index' action='home.php' method='post' accept-charset='UTF-8'><input type='submit' class='sucess' value='Sucess! Click Here to Continue' action='home.php' /></form>";
    }
  }
 
    ?>
</div>


 <?php include 'footer.php';?>
  </body>

</html>