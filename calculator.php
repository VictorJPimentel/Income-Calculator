 <?php include 'head.php';?>
  <?php include 'hub.php';?>
  <div class="login"><form method="POST" action="calculator.php">
  <span class="login-u"> STATUS:</span> 
   <br>
<span class="login-u"><input type="radio"  name="status" value="single">
<label for="male">Single</label><br></span>
<span class="login-u"><input type="radio" name="status" value="m-j">
<label for="female">Married Jointly</label><br></span>
<span class="login-u"><input type="radio" name="status" value="m-s">
<label for="female">Married Separately</label><br></span>
<span class="login-u"><input type="radio" name="status" value="head">
<label for="female">Head of Household</label><br></span>
   <br>
 <span class="login-u"> ANUAL SALARY:</span>    <br>
  <input type="text" name="amount">
  
    <input type="submit" class="button" value="Submit">
  </form> <span class="login-u">Your tax are: 
  <?php


    $status = $_POST['status'];
    $amount = $_POST['amount'];  


 switch ($status) {
    case 'single':

	if ($amount <= "9700") {
  echo $amount * 0.1;
  }
  else if ($amount > "9700" && $amount <= "39475") {
  echo $amount * 0.12;
  }
  else if ($amount > "39475" && $amount <= "84200") {
  echo $amount * 0.22;
  }
  else if ($amount > "84200" && $amount <= "160725") {
  echo $amount * 0.24;
  }
 else if ($amount > "160725" && $amount <= "204100") {
  echo $amount * 0.32;
 }
  else if ($amount > "204100" && $amount <= "510300") {
  echo $amount * 0.35;
  }
else if ($amount > "510300") {
  echo $amount * 0.37;
  }
  break;
 
 case 'm-j':
 
if ($amount <= "9700") {
  echo $amount * 0.1;
  }
  else if ($amount > "19400" && $amount <= "78950") {
  echo $amount * 0.12;
  }
  else if ($amount > "78950" && $amount <= "168400") {
  echo $amount * 0.22;
  }
  else if ($amount > "168400" && $amount <= "321450") {
  echo $amount * 0.24;
  }
 else if ($amount > "321450" && $amount <= "408200") {
  echo $amount * 0.32;
 }
  else if ($amount > "408200" && $amount <= "612350") {
  echo $amount * 0.35;
  }
else if ($amount > "612350") {
  echo $amount * 0.37;
  }
break;

case 'm-s':
 
	if ($amount <= "9700") {
  echo $amount * 0.1;
  }
  else if ($amount > "9700" && $amount <= "39475") {
  echo $amount * 0.12;
  }
  else if ($amount > "39475" && $amount <= "84200") {
  echo $amount * 0.22;
  }
  else if ($amount > "84200" && $amount <= "160725") {
  echo $amount * 0.24;
  }
 else if ($amount > "160725" && $amount <= "204100") {
  echo $amount * 0.32;
 }
  else if ($amount > "204100" && $amount <= "306175") {
  echo $amount * 0.35;
  }
else if ($amount > "306175") {
  echo $amount * 0.37;
}
 
break;
case 'head':
 
	if ($amount <= "13850") {
  echo $amount * 0.1;
  }
  else if ($amount > "13850" && $amount <= "52850") {
  echo $amount * 0.12;
  }
  else if ($amount > "52850" && $amount <= "84200") {
  echo $amount * 0.22;
  }
  else if ($amount > "84200" && $amount <= "160700") {
  echo $amount * 0.24;
  }
 else if ($amount > "160700" && $amount <= "204100") {
  echo $amount * 0.32;
 }
  else if ($amount > "204100" && $amount <= "510300") {
  echo $amount * 0.35;
  }
else if ($amount > "510300") {
  echo $amount * 0.37;
}
break;

default:
  break;
}



?>
   </span>
</div>



  <?php include 'footer.php';?>