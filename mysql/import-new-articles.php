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

        $title = "Letter from Jim Nicholson, MEP, offering support for independant inquiry";
        $description = "Letter from Jim Nicholson, MEP. to Cormac Boomer, where he states he will support an attempt to establish an International Independent Enquiry in Malta but notes the difficulty of achieving such"; 
        $category = "Letter"; 
        $year = "2001";
        $month = "February";
        $day = "15";
        $author = "Jim Nicholson";
        $link = "jim-nicholson-15022001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Gerry Adams MP, anything I can do, I will";
        $description = "Letter from Gerry Adams MP, informing Cormac Boomer that Joan O'Connor, Sinn Fein International Department, will make enquiries"; 
        $category = "Letter"; 
        $year = "2001";
        $month = "February";
        $day = "14";
        $author = "Gerry Adams, MP";
        $link = "gerry-admas-mp-14022001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Fax from Cormac Boomer to Don Mullan re: response from Dublin/Feinna Fail";
        $description = "Fax from Cormac Boomer to Don Mullan re: response from Dublin/Feinna Fail. Cormac expresses feeling 'sick' that governemnt is more oncerned about its good relations with Malta than it is about the loss of one of its citizen"; 
        $category = "Irish Government"; 
        $year = "2001";
        $month = "February";
        $day = "05";
        $author = "Cormac Boomer";
        $link = "cormac-boomer-05022001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Response from Irish Foreign Affairs Office, Dublin";
        $description = "Response from Irish Foreign Affairs Office, Dublin. Taoiseach. Mr. Bertie Ahern T.D. asked the Maltese authorities whether there was anything else they could do to assist. There was no further advice nor assistance the Maltese authorities could offer. With regard to the Irish Government seeking an independent judicial inquiry the Minister considers that such a move would imply a lack of confidence in the report of the Board of Inquiry and that would be likely damage our relations with Malta"; 
        $category = "Irish Government"; 
        $year = "2001";
        $month = "January";
        $day = "31";
        $author = "Breifne O'Reilly";
        $link = "irish-foreign-affairs-31012001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter to Gerry Adams MP, providing documentation on the search";
        $description = "Letter To Gerry Adams MP, from Cormac Boomer, providing documentation on the 5 year search for the missing passengers of 9HABU. Families are requesting respective governments through their Foreign Offices and European representatives to press the authorities in Malta to establish an international independant inquiry into this incident provided for under International Civil Aviation Regulations as part of our support for their application for membership"; 
        $category = ""; 
        $year = "2001";
        $month = "January";
        $day = "05";
        $author = "Cormac Boomer";
        $link = "gerry-adams-mp-25012001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Jim Dougal, EU unable to help";
        $description = "Letter from Jim Dougal, EU unable to help. European Commission cannot intervene as falls within the competence of the British authorities who look after the interests of their citizens anywhere in the world. The European Commission cannot help in problems relating to one individual citizen of a Member State and therefore does not have a mandate to act"; 
        $category = "EU"; 
        $year = "2001";
        $month = "January";
        $day = "25";
        $author = "Jim Dougal";
        $link = "jim-dougal-25012001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter to Ian K. Paisley MEP, providing documentation on the search";
        $description = "Letter To Ian K. Paisley MEP, from Cormac Boomer, providing documentation on the 5 year search for the missing passengers of 9HABU. Families are requesting respective governments through their Foreign Offices and European representatives to press the authorities in Malta to establish an international independant inquiry into this incident provided for under International Civil Aviation Regulations as part of our support for their application for membership"; 
        $category = "EU"; 
        $year = "2001";
        $month = "January";
        $day = "25";
        $author = "Cormac Boomer";
        $link = "ian-k-paisley-25012001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Jim Dougal, contact addresses for local MEPs";
        $description = "Letter from Jim Dougal, contact addresses for local MEPs"; 
        $category = "EU"; 
        $year = "2001";
        $month = "January";
        $day = "09";
        $author = "Jim Dougal";
        $link = "jim-dougal-09012001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Draft copy of the article for Magill";
        $description = "Draft copy of the article for Magill, written by Don Mullan, detailing the various theories surrounding the disappearance of the passengers on flight 9HABU"; 
        $category = "Newspaper"; 
        $year = "2002";
        $month = "December";
        $day = "31";
        $author = "Don Mullan";
        $link = "draft-magill-aticle-31122002.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Apology from Edmund Curran, Belfast Telegraph";
        $description = "Apology from Edmund Curran, Belfast Telegraph, the fact that the treatment of the story caused  annoyance displayed a lack of sensitivity and for that I apologise"; 
        $category = "Newspaper"; 
        $year = "2000";
        $month = "December";
        $day = "19";
        $author = "Edmund Curran";
        $link = "belfast-telegraph-19122000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Jim Dougal, can provide contact details";
        $description = "Letter from Jim Dougal, can provide contact details for local representatives. Has passed on  correspondence to colleagues in Brussels in the Malta Unit of DG Enlargement and will be in contact as soon as he gets a reply"; 
        $category = "EU"; 
        $year = "2000";
        $month = "December";
        $day = "19";
        $author = "Jim Dougal";
        $link = "jim-dougal-19122000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

    echo "|----------------------------------------------------| <br>";
    echo $success . " records created successfully <br>";
    echo $fail    . " records failed <br>";
    echo "|----------------------------------------------------| <br>";

    mysqli_close();

?>