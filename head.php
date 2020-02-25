<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
  </head>
  <body>



<?php 
$password = $_POST['password'];
$username = $_POST['username'];
$bool = false;
$bool2 = false;

if ($password == "Don")
	{$bool =  true;
  }



  if ($username == "Don Wei")
	{$bool2 = true;
  }

  if ($username == "Victor")
	{$bool2 = true;
  }


  else {
    $username = 'User';
  }


?>

</body>
</html>