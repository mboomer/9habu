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

        $title = "Letter from office of Prime Minister, Malta, acknowledging receipt of letter";
        $description = "Letter from office of Prime Minister, Malta, acknowledging receipt of letter"; 
        $category = "Letter"; 
        $year = "2000";
        $month = "April";
        $day = "20";
        $author = "Carol Farrugia";
        $link = "cecilia-pm-20042000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "AMEX Services Limited (MAPEL) held responsible";
        $description = "Letter from Terese Gorny, AMEX Services Limited (MAPEL) were held to be responsible for Tadeusz's death. Currently waiting to hear if MAPEL will appeal the decision"; 
        $category = "Legal"; 
        $year = "2000";
        $month = "June";
        $day = "05";
        $author = "Terese Gorna";
        $link = "gorna-05062000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Malta Maritime Authority, sonar equipment broken";
        $description = "Letter from Malta Maritime Authority, stating that the side scan sonar has broken down and attempts to repair have been unsuccessful. Unable to perform any searches"; 
        $year = "2000";
        $month = "June";
        $day = "02";
        $author = "J Bianco";
        $link = "malta-maritime-auth-02062000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Emails with Antony Barnett, The Observer";
        $description = "Emails between Cormac Boomer and Antony Barnett, The Observer. Antony interested in writing an article"; 
        $category = "Newspaper"; 
        $year = "2000";
        $month = "May";
        $day = "03";
        $author = "Antony Barnett";
        $link = "antony-barnett-03052000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Cormac Boomer to Antony Barnett";
        $description = "Letter from Cormac Boomer to Antony Barnett, detailing the documents sent to Antony Barnett to provide background on the dispappearance"; 
        $category = "Letter"; 
        $year = "2000";
        $month = "May";
        $day = "08";
        $author = "Cormac Boomer";
        $link = "antony-barnett-08052000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Fax from Cormac Boomer to Teresa Gorna re: action against MAPEL";
        $description = "Fax from Cormac Boomer to Teresa Gorna re: action against MAPEL. Excelair and Unique Travel  were instructed by the Board of Enquiry to produce records of accounts and travel records for their services to Maple/Bartolo & Excelair. Mr. A Fenich the Engineering Manager stated he could not reconcile the condition of the plane as reported and recorded by Rodney Woods in his evidence to the court with that of the aircraft 9H-ABU which his company had serviced only four weeks previously"; 
        $category = "Fax"; 
        $year = "2000";
        $month = "May";
        $day = "02";
        $author = "Cormac Boomer";
        $link = "cormac-teresa-02052000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Teresa Gorna to Cormac Boomer";
        $description = "Letter from Teresa Gorna to Cormac Boomer, will be in London for trial against MAPEL, STill having difficulty gathering documents for trial"; 
        $category = "Letter"; 
        $year = "2000";
        $month = "May";
        $day = "02";
        $author = "Teresa Gorna";
        $link = "teresa-cormac-02052000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Fax from Cormac Boomer to Cecilia Pellegrini re: Lockerbie Trial";
        $description = "Fax from Cormac Boomer to Cecilia Pellegrini re: Lockerbie Article stating shock new evidence could wreck the case against the two Libyans accused of the Lockerbie bombing"; 
        $category = "Fax"; 
        $year = "2000";
        $month = "May";
        $day = "16";
        $author = "Cormac Boomer";
        $link = "cecilia-fax-28062001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Daniel Aquilina to Joseph Bianco";
        $description = "Letter from Daniel Aquilina to Joseph Bianco regarding asking if the MMA Hydrographers would be available to help in a new search"; 
        $category = "Search"; 
        $year = "2000";
        $month = "May";
        $day = "15";
        $author = "Daniel Aquilina";
        $link = "daniel-jbianco-15052000.html";

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

        $title = "Letter from Teresa Gorna to Cormac Boomer re: MAPEL trial";
        $description = "Letter from Teresa Gorna to Cormac Boomer, thanking Cormac for the documents needed for the for trial. Judge found MAPEL negligent but has not delivered judgement yet. Also mentions that Padraig Coyle (BBC) was in contact"; 
        $category = "MAPEL"; 
        $year = "2000";
        $month = "May";
        $day = "22";
        $author = "Teresa Gorna";
        $link = "teresa-cormac-22052000.html";

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

        $title = "Fax from Cecilia to Cormac re: new evidence in Lockerbie trial";
        $description = "Fax from Cecilia to Cormac re: new evidence in Lockerbie trial. Journalist Joe Mifsud reports from Camp Zeist on new evidence being presented by the owner of the printing press used to make the tags for luggage placed on the Pan Am flight"; 
        $category = "Lockerbie"; 
        $year = "2000";
        $month = "May";
        $day = "29";
        $author = "Cecilia Pellegrini";
        $link = "cecilia-cormac-29052000.html";

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

        $title = "Email from Cormac Boomer to Antony Barnett re: R Shayler";
        $description = "Email from Cormac Boomer to Antony Barnett regarding R Shayler during his time working on the Libyan desk in 1995"; 
        $category = "Newspaper"; 
        $year = "2000";
        $month = "April";
        $day = "27";
        $author = "Cormac Boomer";
        $link = "cormac-barnett-27042000.html";

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

        $title = "Fax from Cecilia to Cormac re: new evidence in Lockerbie trial";
        $description = "Fax from Cecilia to Cormac re: new evidence in Lockerbie trial. Journalist Joe Mifsud reports from Camp Zeist on new evidence being presented by the owner of the printing press used to make the tags for luggage placed on the Pan Am flight"; 
        $category = "Lockerbie"; 
        $year = "2000";
        $month = "May";
        $day = "29";
        $author = "Cecilia Pellegrini";
        $link = "cecilia-cormac-29052000.html";

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

        $title = "Fax from Cecilia to Cormac re: new evidence in Lockerbie trial";
        $description = "Fax from Cecilia to Cormac re: new evidence in Lockerbie trial. Journalist Joe Mifsud reports from Camp Zeist on new evidence being presented by the owner of the printing press used to make the tags for luggage placed on the Pan Am flight"; 
        $category = "Lockerbie"; 
        $year = "2000";
        $month = "May";
        $day = "29";
        $author = "Cecilia Pellegrini";
        $link = "cecilia-cormac-29052000.html";

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

        $title = "Letter from Cecilia Pellegrini to Maltese PM Fenech Adami re: PM visit to Libya";
        $description = "Letter from Cecilia Pellegrini to Maltese PM Fenech Adami asking PM Fenech Adami to ask for Libyan assistance during the visit as Carmel Bartolci (the pilot) flew through Libyan Airspace without authorisation and another important point regarding the Cospass Satellite which picked up a Distress Signal that was traced back to Libya, east of Tripoli"; 
        $year = "2000";
        $month = "April";
        $day = "11";
        $author = "Cecilia Pellegrini";
        $link = "celilia-pm-adami-11042000.html";

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

        $title = "Article in Daily Telegraph re: David Shayler";
        $description = "Article in Daily Telegraph reporting on Annie Machon, girlfriend of David Slayler, arriving in London to hand Special Branch detectives a dossier of documents Shayler had prepared alleging an MI6 plot to assassinate Col. Gaddafi"; 
        $year = "2000";
        $month = "June";
        $day = "01";
        $author = "Michael Smith";
        $link = "daily-telegraph-shayler.html";

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