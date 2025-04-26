<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Rohirrim Booking Form" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" />
     <title>Booking Confirmation</title>
</head>
<body>
     <h1>Rohirrim Tour Booking Confirmation</h1>
     <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
               if (isset($firstname)) {
                    $firstname = clean_input($_POST["firstname"]);
                    echo "<h2>first name is ", $firstname, "</h2></br>";
               }

               if (isset($lastname)) {
                    $lastname = clean_input($_POST["lastname"]);
                    echo "<h2>last name is ", $lastname, "</h2></br>";
               }

               if (isset($age)) {
                    $age = clean_input($_POST["age"]);
                    echo "<h2>age is ", $age, "</h2></br>";
               }

               if (isset($species)) {
                    $species = clean_input($_POST["species"]);
                    echo "<h2>species is ", $species, "</h2></br>";
               }

               if (isset($accom)) {
                    $accom = clean_input($_POST["accom"]);
                    echo "<h2>you have selected accomodation</h2></br>";
               }

               if (isset($fourday)) {
                    $fourday = clean_input($_POST["4day"]);
                    echo "<h2>you have selected a four day tour</h2></br>";
               }

               if (isset($tenday)) {
                    $tenday = clean_input($_POST["10day"]);
                    echo "<h2>you have selected a ten day tour</h2></br>";
               }

               if (isset($food)) {
                    $food = clean_input($_POST["food"]);
                    echo "<h2>your menu preference is ",$food,"</h2></br>";
               }

               if (isset($bookday)) {
                    $bookday = clean_input($_POST["bookday"]);
                    echo "<h2>date of booking is ",$bookday,"</h2></br>";
               }

               if (isset($partysize)) {
                    $partysize = clean_input($_POST["partysize"]);
                    echo "<h2>party size is ",$partysize,"</h2></br>";
               }
          }

  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?> 
</body>
</html>