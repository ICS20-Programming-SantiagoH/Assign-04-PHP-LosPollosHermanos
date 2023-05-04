<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Los Pollos Hermanos Chicken">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Los Pollos Hermanos Chicken</title>
  </head>
  <body>
    
    <!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Los Pollos Hermanos Chicken</h1>";
    ?>

    <center>
      <!-- Video of Los Pollos Hermanos -->
    <video
      id= "my-video"
      class = "video-js"
      controls
      preload ="auto"
      width = "800"
      <source src= "./videos/pollos 1.mp4" type = "video/mp4" />
    </video>
    </center>

    <!-- php echo to print the html to the page -->
    <?php
			echo "<h3>Please enter your order in our online menu below (if you do not want a item put a 0 for the amount in the section)</h3>";
		?>

		<!--- Get user information for bucket of chicken --->
        <form action="./results.php" method="post" target="results">
          <label for="bucketChoice">Chicken bucket options:</label>
          <select name="Bucket options" id="bucket-choice">
            <option value="4pcs bucket">4pcs bucket($7.99)</option>
            <option value="6pcs bucket">6pcs bucket($10.99)</option>
            <option value="10pcs bucket">10pcs bucket($14.99)</option>
            <option value="15pcs bucket">15pcs bucket($22.99)</option>
          </select>
          
          <label for="userMain">Please enter the amount of buckets you wold like:</label>
          <input type="number" id="user-main" placeholder="ex.2" step="1" min="1" ><br><br>
        
        <!--- Get user information for what sauce --->
          <label for="sauceChoice">Sauce options:</label>
          <select name="Sauce options" id="sauce-choice">
            <option value="BBQ">BBQ($0.04)</option>
            <option value="Ranch">Ranch($0.04)</option>
            <option value="SweetAndSpicy">Sweet and Spicy($0.04)</option>
          </select>
          <label for="sauceAmount">Please enter the amount of Sauces you would like:</label>
          <input type="number" id="sauceAmount" placeholder="ex.4" step="1" min="0"><br><br>
          
          <!--- Get user information for drink --->
        <label for="drinkChoice">Drink options:</label>
        <select name="Drink options" id="drink-choice">
          <option value="Small Drink">Small Drink($1.25)</option>
          <option value="Medium Drink">Medium Drink($2.00)</option>
          <option value="Large Drink">Large Drink($3.00)</option>
        </select>
        <label for="userSideDrink">Please enter the amount of drinks you would like:</label>
        <input type="number" id="userSideDrink" placeholder="ex.3" step="1" min="0"><br><br>

        <!--- Get user information for fries --->
        <label for="friesChoice">Fries options:</label>
        <select name="fries options" id="fries-choice">
          <option value="small fries">Small fries($2.00)</option>
          <option value="medium fries">Medium fries($2.75)</option>
          <option value="large fries">Large fries($3.25)</option>
        </select>
        <label for="userSideFries">Please enter the amount of fries you would like:</label>
        <input type="number" id="userSideFries" placeholder="ex.2" step="1" min="0"><br><br>
        <input type="submit" value="calculate">

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
        he subtotal of your order is $ " . round($subTotal, 2) . "."
        <br>
        Your order will cost you $ " . round($total, 2) . "."
        <br>
        If you had the discount you would only have to pay $ " . round($discountedTotal, 2) . "."
        ?>
        
	    </iframe>
	</body>
</html>