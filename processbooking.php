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
               $firstname = clean_input($_POST["firstname"]);
               $lastname = clean_input($_POST["lastname"]);
               $age = clean_input($_POST["age"]);
               $species = clean_input($_POST["species"]);
               $accom = clean_input($_POST["accom"]);
               $fourday = clean_input($_POST["4day"]);
               $tenday = clean_input($_POST["10day"]);
          
               if (isset($firstname)) {
                    echo "<h2>first name is ", $firstname, "</h2></br>";
               }

               if (isset($lastname)) {
                    echo "<h2>last name is ", $lastname, "</h2></br>";
               }

               if (isset($age)) {
                    echo "<h2>age is ", $age, "</h2></br>";
               }

               if (isset($species)) {
                    echo "<h2>species is ", $species, "</h2></br>";
               }

               if (isset($accom)) {
                    echo "<h2>you have selected accomodation</h2></br>";
               }

               if (isset($fourday)) {
                    echo "<h2>you have selected a four day tour</h2></br>";
               }

               if (isset($tenday)) {
                    echo "<h2>you have selected a ten day tour</h2></br>";
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