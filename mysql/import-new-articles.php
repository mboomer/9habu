<?php
    $servername = "mysql.9habu.com";
    $username   = "9habu_db";
    $password   = "9habu_document_archive";
    $db         = "9habu_archive";
        
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Unable to connect to database : " . mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }

    // Prepare
    $insertQry = "INSERT INTO articles (title, description, category, year, month, day, author, link) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $insertStatement = mysqli_prepare($conn, $insertQry);

    // Bind params
    mysqli_stmt_bind_param($insertStatement, "ssssssss", $title, $description, $category, $year, $month, $day, $author, $link);
 
    echo "Prepare and Bind completed";

    $title = "Email from Don Mullan concerned about facts Magill article is based on";
    $description = "Email from Don Mullan requesting confirmation of the images of the aircraft in Kullhadd article. The premise the article to Magill is founded, on the Bartolo theory that he was, wittingly or not. irresponsibly fingered by Kullhadd on 5th November by their showing one of his aircraft. Not necessarily 9H-ABU but an Excelair aircraft"; 
    $category = "email"; 
    $year = "2003";
    $month = "January";
    $day = "04";
    $author = "Don Mullan";
    $link = "email-don-concerned-about-facts-04012003.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Baffled Fathers Fight To Find His Lost Son";
    $description = "Newspaper article published by the Irish News in 1997. It is an interview with Cormac Boomer on the second anniversary of Desmond Boomers disappearance"; 
    $category = "newspaper"; 
    $year = "1997";
    $month = "November";
    $day = "25";
    $author = "Liz Trainor";
    $link = "irish-news-2511197.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Stephanie Bell, Sunday Life";
    $description = "Newspaper article in Sunday Life by Stephanie Bell. Interview with Mandy Boomer on the 2nd anniversary of the disappearance of her husband on flight 9HABU"; 
    $category = "newspaper"; 
    $year = "1997";
    $month = "March";
    $day = "02";
    $author = "Stephanie Bell";
    $link = "stephanie-bell-02031997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Translation of article regarding Excelair";
    $description = "KUMPANIJA TA' AJRUPLANI MWAQQFA MILLI TOPERA. Excelair was stopped the 1st Hall of the Civil Court presided by judge Geoffrey Valenzia after a mandate against Excelair was made by Euro Serv Ltd. This mandate stated that Excelair was operating trips to Djerba in Tunisia after the trips by sea between Malta and Libya had been cancelled contrary to agreement that existed between the two companies"; 
    $category = "newspaper"; 
    $year = "1995";
    $month = "November";
    $day = "08";
    $author = "unknown";
    $link = "translation-08111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Comment from Cormac Boomer on final inquiry report";
    $description = "Email from Cormac Boomer to Don Mullan, Don requested a comment from Cormac on the final report from the inquiry. Cormac confirmed he had written to Brian Cowan TD as advised by Don."; 
    $category = "inquiry"; 
    $year = "2000";
    $month = "November";
    $day = "01";
    $author = "Cormac Boomer";
    $link = "final-report-comment-0112000.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Tayna Acheson, Belfast Telegraph";
    $description = "Article written by Tanya Acheson of the Belfast Telegraph reporting on the disappearance of 9HABU"; 
    $category = "Newspaper"; 
    $year = "1995";
    $month = "December";
    $day = "05";
    $author = "Tanya Acheson";
    $link = "tanya-acheson-05121995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Nigel Gould, Belfast Telegraph. Tuesday October 1, 1996";
    $description = "Newspaper article by Nigel Gould, Belfast Telegraph. Interview with Mandy Boomer discussing the tape recording that could hold the key to the truth behind the baffling disappearance in Tunisia nearly a year ago"; 
    $category = "Newspaper"; 
    $year = "1996";
    $month = "October";
    $day = "01";
    $author = "Nigel Gould";
    $link = "nigel-gould-01101996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Don Mullan, Ireland On Sunday";
    $description = "Article by Don Mullan, published in the Ireland On Sunday, which details three scenarios that might explain the disappearance of flight 9HABU"; 
    $category = "Newspaper"; 
    $year = "2000";
    $month = "December";
    $day = "03";
    $author = "Don Mullan";
    $link = "don-mullan-03122000.html";

    mysqli_stmt_execute($insertStatement);

    echo "New records created successfully";

    mysqli_close();

?>