<?php

include("db_conection.php");


if (isset($_POST["vardas"]) && !empty($_POST["vardas"]) &&
isset($_POST["email"]) && !empty($_POST["email"]) &&
isset($_POST["message"]) && !empty($_POST["message"])
) {

 $name = trim ($_POST["vardas"]); //trim - jei irasai su tarpais, juos panaikina
 $email = trim ($_POST["email"]);
 $message = trim ($_POST["message"]);

 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

     
     
     $to = "aida.zelvyte@gmail.com";
     $subject = "Kontaktine forma: " . $name;
     $txt = $message;
     $headers = "From: $email" . "\r\n" .
     "CC: adia777@gmail.com";

     //mail($to, $subject, $txt, $headers);

     
     $sql = "INSERT INTO messages (id, name, email, message, date)
             VALUES (null, '$name', '$email', '$message', null)";

     if (mysqli_query($conn, $sql)) {
         echo "message_sent";

     } else {
         echo "database_error";
     }
       

 } else {
     echo "email_error";
 }

 
}




?>