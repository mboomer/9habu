<?php
    require_once "../.php/inc/db.9habu.inc.php";        

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Unable to connect to database : " . mysqli_connect_error());
    } else {
        echo "Connected successfully <br>" ;
    }

    // successful/failed record counts
    $success = 0;
    $fail    = 0;
    
    // Prepare
    $insertQry = "INSERT INTO articles (title, description, category, year, month, day, author, link) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $insertStatement = mysqli_prepare($conn, $insertQry);

    // Bind params
    mysqli_stmt_bind_param($insertStatement, "ssssssss", $title, $description, $category, $year, $month, $day, $author, $link);
 
    echo "Prepare and Bind completed <br>";

    $title = "Superone TV announce Inquiry have finalised report";
    $description = "Superone TV announced that the Board of lnquiry have now finalised their report and have given it to the Minister of Transport Censu Galea but it is not known when or if the Minister will make it public"; 
    $category = "Fax";
    $year = "2000";
    $month = "01";
    $day = "24";
    $author = "Cecilia Pelligrini";
    $link = "cecilia-cormac-24012000.html";

    if (mysqli_stmt_execute($insertStatement)) {
        echo "Article " . $link . " created <br>";
        ++$success;
    } else {
        echo "Article " . $link . " failed <br>" . "Error " . mysqli_error($conn);
        ++$fail;
    }

    echo "|----------------------------------------------------| <br>";
    echo $success . " records created successfully <br>";
    echo $fail    . " records failed <br>";
    echo "|----------------------------------------------------| <br>";

    mysqli_close();

?>