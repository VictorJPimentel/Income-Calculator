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
 <?php include 'head.php';?>

<div class="menu-bar">
    <table>
        <tr>
            <th>
                <h1 class="menu-h home"><a href="home.php"> HOME</a></h1>
            </th>
            <th>
                <h1 class="menu-h"><a href="calculator.php"> CALCULATOR</a></h1>
            </th>
            <th>
                <h1 class="menu-h"><a href="about.php"> ABOUT US</a></h1>
            </th>
            <th>
                <h1 class="menu-h">Welcome, <?php echo $_SESSION['name'] ?></h1>
            </th>
            
        </tr>

    </table>
</div>
</body>
</html>