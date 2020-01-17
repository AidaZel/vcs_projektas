<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontaktinė forma</title>
    <link rel="stylesheet" href="styles/style.css">

    <?php include("db_connection.php");?>

</head>

<body>

    <header>
        <div class="container">
            <img src="images/popup-logo.png" alt="logo">
        </div>
    </header>
    <main>
        <div class="container">

        <?php
            
            $sql = "SELECT * FROM Messages WHERE id = " . $_GET["id"]; //select zvaigzute- visi stulpeliai, is db kur id is ten koki id pasirenku
            $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    echo "<ul>";

                    // output data of each row
                    $row = mysqli_fetch_assoc($result);

                     echo "<h1>" . $row["name"] . "</h1>";
                     echo "<p>" . $row["date"] . "</p>";
                     echo "<p>" . $row["message"] . "</p>";
                     echo "<a href='mailto:" . $row["email"] . "'>" . $row["email"] . "</a>";



                } else {
                    echo "0 results";
                }


                // echo "<ul>
                //          <li>$name.</li>
                //          <li>$email.</li>
                //          <li>$message.</li>
                //     </ul>";
        ?>
            
            
        </div>
    </main>
    <footer>
        <div class="container">
            <p class="copyright">&copy; <?php echo date("Y"); ?>. Visos teisės saugomos.</p>
        </div>
    </footer>

    <?mysqli_close($conn); ?> 
    <!-- baigiasi is db  -->

</body>

</html>