<?php
  //Declare the value for tax and discount and sauce price
  define("TAX_RATE", 1.13);

  define("DISCOUNT", 0.07);

  define("SAUCEPRICE", 0.04);

  //Collecting what the user ordered
  $bucketChoice = $_POST['bucket-choice'];
  
  $sauceChoice = $_POST['sauce-choice'];
  
  $drinkChoice = $_POST['drink-choice'];

  $friesChoice = $_POST['fries-choice'];

  //The price of each based on what user ordered
  $bucketPrice = "";

  $drinkPrice = "";

  $friesPrice = "";
  
	//Get the user input for amount of main, sides and sauce
	$userMain = $_POST['user-main'];
  
  $sauceAmount = $_POST['sauceAmount'];
  
  $userSideDrink = $_POST['userSideDrink'];

	$userSideFries = $_POST['userSideFries'];
  
        
//if statements for the value of bucket
  if ($bucketChoice == "4pcs bucket") {
    $bucketPrice = 7.99;
  }
    
  else if ($bucketChoice == "6pcs bucket") {
    $bucketPrice = 10.99;
  }
    
  else if ($bucketChoice == "10pcs bucket") {
    $bucketPrice = 14.99;
    }
    
  else {
    $bucketPrice = 22.99;
  }

?>
<?php

//if statement for the value of drink
  if ($drinkChoice == "Small Drink") {
    $drinkPrice = 1.25;
  }
    
  else if ($drinkChoice == "Medium Drink") {
    $drinkPrice = 2.00;
  }
    
  else {
    $drinkPrice = 3.00;
  }

?>
<?php

//if statement for the value of fries
  if ($friesChoice == "small fries") {
    $friesPrice = 2.00;
  }
    
  else if ($friesChoice == "medium fries") {
    $friesPrice = 2.75;
  }
    
  else {
    $friesPrice = 3.25;
  }

?>

<?php
 if ($userMain == "" || $sauceAmount == "" || $userSideDrink == "" || $userSideFries == "") {
   echo "";
 }
   
 else {
   
	// Calculation user order
  $subTotal = ($bucketPrice * $userMain) + ($drinkPrice * $userSideDrink) + ($friesPrice * $userSideFries) + (SAUCEPRICE * $sauceAmount);
  $total = $subTotal * TAX_RATE;
  $tax = $subTotal * 0.13;
  $discountedTotal = $total - ($total * DISCOUNT);
 }
?>

  
  <?php 

  //Display information back to user
  if ($userMain > 0 && $userSideDrink >= 0 && $userSideFries >= 0 && $sauceAmount >= 0) {
  echo "Your order is " . $userMain . " box(s) of " . $bucketChoice . ", " . $userSideDrink . " " .  $drinkChoice . ", " . $userSideFries . " " . $friesChoice . ", " . $sauceAmount . " " . $sauceChoice . " sauce." .
    "<br>The subtotal of your order is $ " .round($subTotal, 2) .
  "<br>Your order will cost you $ " .round($total, 2) . "<br>The tax is $ " .round($tax,2) .
"<br>If you had the discount you would only have to pay $ " .round($discountedTotal, 2);
    }
  else {
    echo "Please enter a valid order.";
  }
    ?>