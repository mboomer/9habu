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

        $title = "Article published in Saturday Extra";
        $description = "Newspaper article published in Saturday Extra. Cormac Boomer sought an apology from the Editor, Martin Breen"; 
        $category = "Newspaper"; 
        $year = "2000";
        $month = "December";
        $day = "09";
        $author = "Martin Breen";
        $link = "saturday-extra-09122000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "NORTHERN IRELAND MEMBERS OF THE EUROPEAN PARLIAMENT";
        $description = "NORTHERN IRELAND MEMBERS OF THE EUROPEAN PARLIAMENT"; 
        $category = "Contacts"; 
        $year = "2001";
        $month = "June";
        $day = "01";
        $author = "Cormac Boomer";
        $link = "mep-contact-details-01062001.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Brian Cowan, TD";
        $description = "Letter from Brian Cowan, TD. An acknowledgement of letter to Brian Cowan TD from his Private Secretary, today I received a phone call from John Lawton. He began by telling me that your article in the IOS had generated enquiries from other papers, he then moved to discussing my request for government support in my quest for information about my missing son, he enquired was there not some other channels that I might consider using ie legal action against the authorities in Malta. I pointed out that I had already spent considerable amounts of my own resources in my ongoing search and could not undertake an action of this kind as it would involve hiring legal representation here and in Malta. Hence my reason for asking for government support"; 
        $year = "2000";
        $month = "December";
        $day = "12";
        $author = "Cormac Boomer";
        $link = "brian-cowan-12122000.html";

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

        $title = "Fax To Cecelia, Board Of Inquiry - Final Report";
        $description = "The publication of the Board of Enquiry report into the aviation incident reported to have occurred on then morning of 3/12/95 when a single engine Piper aircraft Reg No 9HABU disappeared with six people on board when enroute from Djerba in Tunisia to Malta makes for interesting reading not because of their decision to blame the pilot (That “as an easy option) but for the Boards failure to properly investigate all the circumstances surrounding this incident and have the physical evidence scientifically checked and tested. In the course of their work which I closely observed the Board failed miserably to enforce its own writ They also failed to submit a detailed analysis of their ﬁndings and present it for government and public scrutiny. rather than dismiss ( which they did ) important items of relevant evidence under the heading of rumour and speculation . This report raises more questions than it answers, it is a whitewash and therefore lacks credibility"; 
        $category = "Fax"; 
        $year = "2000";
        $month = "November";
        $day = "28";
        $author = "Cormac Boomer";
        $link = "fax-cecelia-28112000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Email from Don Mullan To Cormac Boomer re: Inquiry final report";
        $description = "Letter from Jim Dougal, EU unable to help. European Commission cannot intervene as falls within the competence of the British authorities who look after the interests of their citizens anywhere in the world. The European Commission cannot help in problems relating to one individual citizen of a Member State and therefore does not have a mandate to act"; 
        $category = "Email"; 
        $year = "2000";
        $month = "November";
        $day = "30";
        $author = "Don Mullan";
        $link = "don-mullan-30112000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Draft copy of the article for Magill - December 2000";
        $description = "Draft copy of the article for Magill, written by Don Mullan, in December 2000, detailing the various theories surrounding the disappearance of the passengers on flight 9HABU"; 
        $category = "Newspaper"; 
        $year = "2000";
        $month = "December";
        $day = "03";
        $author = "Don Mullan";
        $link = "draft-magill-article-03122000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Letter from Daniel Aquilina to Padraig Coyle";
        $description = "Letter from Daniel Aquilina to Padraig Coyle, expressing disappointment that Padriag had disregarded the instructions that Daniel had given regarding content"; 
        $category = "EU"; 
        $year = "2001";
        $month = "January";
        $day = "09";
        $author = "Jim Dougal";
        $link = "daniel-aquilina-19112000.html";

        if (mysqli_stmt_execute($insertStatement)) {
            echo "Article " . $link . " created <br>";
            ++$success;
        } else {
            echo "Article " . $link . " failed <br>";
            ++$fail;
        }

        $title = "Fax from Daniel Aqualina to Padraig Coyle re: article";
        $description = "Fax from Daniel Aquilina to Padraig Coyle that lays out very clearly the expectation that the article should avoid any mention of 'psychics' and that the family wanted to review the article before it was published. These requests were ignored by the journalist""; 
        $category = "Newspaper"; 
        $year = "2000";
        $month = "November";
        $day = "10";
        $author = "Daniel Aquilina";
        $link = "daniel-aquilina-fax-10112000.html";

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