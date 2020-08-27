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

        $title = "Email from Don Mullan requesting details of the outbound flight";
        $description = "Email from Don Mullan to Cormac Boomer and Garrett Harte regarding the posibility of getting an Irish or British TV station to make a documentary. Don is requesting details of the outbound flight and any further information relating to the passengers at the airport in Tunisia"; 
        $category = "Documentary"; 
        $year = "2001";
        $month = "May";
        $day = "30";
        $author = "Don Mullan";
        $link = "outbound-flight-30052001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        mysqli_stmt_execute($insertStatement);

        $title = "Cormac Boomer responds to Don Mullans request for more information";
        $description = "Cormac Boomer responds to Don Mullans request for more information on the outbound flight of 9HABU. Cormac mentions that Mr Alfred Fenech stated at three separate sittings of the Board that based on the report of Rodger Wood the plane would be unable to start up and totally incapable of taking off. Cormac also details when Desmond and Matthew phoned home that weekend to confim that the flight was delayed due to bad weather"; 
        $category = "Documentary"; 
        $year = "2001";
        $month = "May";
        $day = "30";
        $author = "Cormac Boomer";
        $link = "outbound-flight-response-30052001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "The Mystery Of 9H-ABU - The Search For My Missing Son";
        $description = "Cormac Boomer documents how he came to believe that flight 9H-ABU did not crash in to the sea and how he and the other families started to look for answers other than those been given to them by the authorities"; 
        $category = "personal"; 
        $year = "2001";
        $month = "May";
        $day = "30";
        $author = "Cormac Boomer";
        $link = "cormac-boomer-30052001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Email from Cecilia to Julie Julie Donohue with contact details";
        $description = "Email from Cecilia to Julie Julie Donohue with contact details for Mandy Boomer and Cormac Boomer. Also discusses importance of necessary equipment being given to search the seabed for any remains of wreckage"; 
        $category = "email"; 
        $year = "2001";
        $month = "May";
        $day = "07";
        $author = "Cecilia Pellegrini";
        $link = "cecilia-julie-07052001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Donald Corrie MP to The Secretary Of State For Foreign &amp; Commonwealth Affairs";
        $description = "Letter from Donald Corrie MP, on behalf of Julie Donohue, to Robin Cooke MP, the then Secretary Of State For Foreign &amp; Commonwealth Affairs, seeking an update on what, if any, progress has been made in forcing Malta to carry out a sea bed search for 9habu"; 
        $category = "Letter"; 
        $year = "2001";
        $month = "April";
        $day = "19";
        $author = "Donald Corrie MP";
        $link = "robin-cooke-mp-19042001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Geoff Williams asking Robin Cooke MP for support";
        $description = "Letter from Geoff Williams asking Robin Cooke MP, the then British Foreign Secretary for support, the Government of Malta having applied to join the European Community should be called to account over the handling of the investigation into the disappearance of these two European Citizens"; 
        $category = "Letter"; 
        $year = "2001";
        $month = "February";
        $day = "05";
        $author = "Geoff Williams";
        $link = "robin-cooke-mp-05022001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Geoff Williams to PM Tony Blair";
        $description = "Letter from Geoff Williams to Prime Minister, Tony Blair. Geoff is highlighting that a response to his letter to Robin Cooke would have a matter of courtesy."; 
        $category = "Letter"; 
        $year = "2001";
        $month = "June";
        $day = "04";
        $author = "Geoff Williams";
        $link = "tony-blair-04062001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Gaddafi on Malta, Lockerbie";
        $description = "Article in The Malta Independent on a speech by Gaddafi after the sentencing of the Lockerbie tribunal where Gaddafi mentions Malta and Maltese persons throughout the speech"; 
        $category = "Newspaper"; 
        $year = "2001";
        $month = "March";
        $day = "05";
        $author = "The Malta Independent";
        $link = "maltese-independent-05032001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter To Jim Nicholson, no response from Foreign Office";
        $description = "Letter To Jim Nicholson, from Cormac Boomer, advising the MEP that following his advice to contact teh Foreign Office, neither the Boomer or Williams families had received a response from the respective Foreign Offices"; 
        $category = "Letter"; 
        $year = "2001";
        $month = "February";
        $day = "16";
        $author = "Cormac Boomer";
        $link = "jim-nicholson-16022001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter to Gerry Adams MP, disappointing response from Foreign Office";
        $description = "Letter To Gerry Adams MP, from Cormac Boomer, advising the MP that the response received from the Foreign Office in Dublin, was very disappointing"; 
        $category = "Letter"; 
        $year = "2001";
        $month = "February";
        $day = "16";
        $author = "Cormac Boomer";
        $link = "gerry-adams-16022001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

//        $title = "";
//        $description = ""; 
//        $category = ""; 
//        $year = "";
//        $month = "";
//        $day = "";
//        $author = "";
//        $link = ".html";
//
//        if (mysqli_stmt_execute($insertStatement)) {
//            echo "Article " . $link . " created <br>";
//            ++$success;
//        } else {
//            echo "Article " . $link . " failed <br>";
//            ++$fail;
//        }

    echo "|----------------------------------------------------| <br>";
    echo $success . " records created successfully <br>";
    echo $fail    . " records failed <br>";
    echo "|----------------------------------------------------| <br>";

    mysqli_close();

?>