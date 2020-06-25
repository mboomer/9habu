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

    $title = "Email from Cecilia regarding commercial flights";
    $description = "Email from Cecilia Pellegrini regarding an article in Kullhadd regarding he Maltese authorities being aware of commercial flights being offered out of Malta on planes flown by pilots who do not have a commercial license"; 
    $category = "email"; 
    $year = "1995";
    $month = "December";
    $day = "10";
    $author = "Cecilia Pellegrini";
    $link = "email-cecilia-cormac-10121995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Emails from Don to Cecilia querying if Kullhadd implicated 9HABU";
    $description = "Emails from Don Mullan to Cecilia Pellegrini trying to confirm if the picture of the plane used in the Kullhadd article (1995) did in fact belong to Bartolo"; 
    $category = "email"; 
    $year = "2003";
    $month = "January";
    $day = "07";
    $author = "Don Mullan";
    $link = "email-don-cecilia-070103.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Joe Mifsud & Felix Agius article reporting on Shqaqis movements in Malta";
    $description = "Email from Don Mullan highlighting the newspaper article by Joe Mifsud and Felix Agius that reports that sources state that the theory that Shqaqis attackers escaped by plane has been set aside. The article also details Shqaqis previous visits to Malta. The article also reports that Libyan Committee of Organizations for International Peace, based in Tripoli, arranged the visits and that Shqaqi was known as Dr Ibrahim Shaweshi"; 
    $category = "newspaper"; 
    $year = "2003";
    $month = "January";
    $day = "07";
    $author = "Joe Mifsud Felix Aguis";
    $link = "email-joe-mifsud-felix-agius-07012003.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email translation of Kullhadd article";
    $description = "Email from Cecilia Pellegrini containing the translation of the Kullhadd article written by Joe Mifsud and Flexi Agius. The article claims that a network of foreign secret services working against each other. These groups include Mossad, Israel’s Prime Minister, Yitzhak Rabin and the American Secret Service"; 
    $category = "email"; 
    $year = "2003";
    $month = "January";
    $day = "06";
    $author = "Cecilia Pellegrini";
    $link = "email-kullhadd-translation-060103.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Cecilia Pellegrini, another translation from Kullhadd";
    $description = "Translation of article in Kullhadd which maintains that Shqaqis killers left at about 5am from a ﬂat in Bugibba on a motorcycle. Also that Maltese police visited Tripoli to investigate telephone calls, including one where Shqaqi gave details of his trip from Libya to Malta, proceeding to Rome on his Way to Damascus"; 
    $category = "newspaper"; 
    $year = "2003";
    $month = "January";
    $day = "06";
    $author = "Joe Mifsud Felix Agius";
    $link = "email-kullhadd-translation-2-060103.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email from Don Mullan, relatives should sue companies involved";
    $description = "Email from Don Mullan to Cecilia and Cormac, suggestion that the next of kin could have grounds to sue the companies their loved ones were working for. These flights were clearly illegal practices and Matthew and his fellow passengers lives were being put at risk by booking them on flights that were not properly insured and governed by established aviation standards for fee paying passengers"; 
    $category = "email"; 
    $year = "2003";
    $month = "January";
    $day = "07";
    $author = "Don Mullan";
    $link = "email-relatives-should-sue-070103.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email from Daniel to Don, discussing link between Bartolo and assassination";
    $description = "Email from Daniel Aquilina discussing the link to the Shqaqi assassination made by the articles in the Kulhadd and the Times, prior to the Piper disappearance"; 
    $category = "email"; 
    $year = "2003";
    $month = "January";
    $day = "07";
    $author = "Daniel Aquilina";
    $link = "email-daniel-don-070103.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email from Cecilia re: Sharon Spiteri article";
    $description = "Email from Cecilia to Don Mullan mentioning that the Malta Times 9th November 95 clearly says that the assassins left the island on board a private plane flown by a Maltese pilot. The same article states that police have so far refused to say is whether they have established how the killers got from Manuel Dimech street to the airport"; 
    $category = "email"; 
    $year = "2003";
    $month = "January";
    $day = "07";
    $author = "Cecilia Pellegrini";
    $link = "email-cecilia-times-article-07012003.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Translation - One of the killers lived in Sliema Before and after the murder of Shqaqi";
    $description = "Translation of article in Kullhadd discussing the events leading up to the assassination of Fathi Shqaqi. Also mentions the motor cycle parked in front of the hotel being moved to Sir Arturo Mercieca Street. The attackers escaped from Tower Road, went into Sir Arturo Mercieca Street and took off. The motorcycle was found in Manuel Dimes Street in Sliema. From Sir Arturo Mercieca Street, the killers proceeded towards Victoria Avenue, drove to Dingli Street passing through St. Mary Street and into Manwel Dimech Street, passing by the Sliema Police Station"; 
    $category = "newspaper"; 
    $year = "2003";
    $month = "January";
    $day = "06";
    $author = "Joe Mifsud Felix Agius";
    $link = "email-translation-kullhadd-07012003.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email from Don Mullan concerned about facts Magill article is based on";
    $description = "Email from Don Mullan requesting confirmation of the images of the aircraft in Kullhadd article. The premise the article to Magill is founded, on the Bartolo theory that he was, wittingly or not. irresponsibly fingered by Kullhadd on 5th November by their showing one of his aircraft. Not necessarily 9H-ABU but an Excelair aircraft"; 
    $category = "email"; 
    $year = "2003";
    $month = "January";
    $day = "04";
    $author = "Don Mullan";
    $link = "email-don-concerned-about-facts-04012003.html";

    echo "New records created successfully";

    mysqli_close();

?>