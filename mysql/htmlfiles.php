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

    $title = "Air Accident Investigation Branch Report on ATC Tape";
    $description = "Summary report 1999-03-08 on the examination of the Djerba ATC (Air Traffic Control) copy tape from the accident by the Air Accidents Investigation Branch, Farnborough"; 
    $category = "Inquiry"; 
    $year = "1999";
    $month = "March";
    $day = "08";
    $author = "Peter F. Sheppard";
    $link = "air-accidents-investigation-branch-report-on-atc-tape-08031999.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Aviation Accident Inquiry";
    $description = "Transcription of evidence given by major Robert Buttgeig and Mr. J. Sultana under oath to the Board Of Enquiry on July 02 1996"; 
    $category = "Inquiry"; 
    $year = "1996";
    $month = "July";
    $day = "02";
    $author = "Dr. Philip Sciberras LL.D";
    $link = "aviation-incident-inquiry-02071996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "QUEST FOR TRUTH, an EXCLUSIVE by Joanne Knox, Banbridge Chronicle";
    $description = "QUEST FOR TRUTH, an EXCLUSIVE by Joanne Knox, Banbridge Chronicle"; 
    $category = "Newspaper"; 
    $year = "2011";
    $month = "November";
    $day = "30";
    $author = "Joanne Knox";
    $link = "banbridge-chronicle-30112011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Belfast Telegraph local man on flight missing in the Mediteranean";
    $description = "Article published in the Belfast Telegraph Newspaper on 5th December 1995. Reports that local man Dessie Boomer was on flight that went missing in a storm in the Mediteranean"; 
    $category = "Newspaper"; 
    $year = "1995";
    $month = "December";
    $day = "05";
    $author = "Tanya Acheson";
    $link = "belfast-telegraph-initial-report-of-the-disppearance-05121995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Affidavit signed by Cormac Boomer witnessed by John B.M. Doyle Notary Public";
    $description = "Affidavit signed by Cormac Boomer witnessed by John B.M. Doyle Notary Public. Relating the information provided by Geoffrey Williams that the Maltese Government believed that the plane was in Tripoli"; 
    $category = "Inquiry"; 
    $year = "1999";
    $month = "July";
    $day = "05";
    $author = "Cormac Boomer";
    $link = "cormac-boomer-affidavit-re-conversation-with-geoffrey-williams-05071999.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Final submission by Cormac Boomer to Chairman of Investigation Enquiry 9th July 1999";
    $description = "Final submission by Cormac Boomer written to Dr, Philip Scibberas, Chairman of Investigation Enquiry 9th July 1999"; 
    $category = "Inquiry"; 
    $year = "1999";
    $month = "July";
    $day = "05";
    $author = "Cormac Boomer";
    $link = "cormac-boomer-letter-to-chairman-of-investigation-09071999.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Draft Letter to Editor of Irish News from Cormac Boomer";
    $description = "Letter to Irish News expressing disappointment that the Irish government was willing to intervene to help the 'Columbian Three' but were unwilling to help as they didn't want to upset the Maltese government"; 
    $category = "Newspaper"; 
    $year = "2003";
    $month = "March";
    $day = "14";
    $author = "Cormac Boomer";
    $link = "cormac-boomer-letter-to-irish-news-14032003.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter to Editor of Irish News from Cormac Boomer";
    $description = "Letter to Irish News expressing disappointment that the Irish government was willing to intervene to help the 'Columbian Three' but were unwilling to help as they didn't want to upset the Maltese government"; 
    $category = "Newspaper"; 
    $year = "2003";
    $month = "March";
    $day = "14";
    $author = "Cormac Boomer";
    $link = "cormac-boomer-letter-to-irish-news-v2-14032003.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Sharon Spitteri, Cormac Boomer was questioned about statements he had made";
    $description = "Article by Sharon Spitteri in the Times Malta on Friday 23rd April 1999. Reports on a sitting of the inquiry where Cormac Boomer was questioned about statements he had made"; 
    $category = "Newspaper"; 
    $year = "1999";
    $month = "April";
    $day = "23";
    $author = "Joanne Sharon Spitteri";
    $link = "court-hears-pilots-last-words-on-atc-tape-23041999.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Aviation Incident Enquiry, Evidence of Mr Edmund Mangion";
    $description = "Aviation Incident Enquiry, Court Of Enquiry 05 June 1996, Evidence of Mr Edmund Mangion"; 
    $category = "Inquiry"; 
    $year = "1996";
    $month = "June";
    $day = "05";
    $author = "Antonia Rina Mamo";
    $link = "court-of-enquiry-05061996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Aviation Incident Enquiry, Court Of Enquiry 06 June 1996, Evidence of Mr Joe Sultana";
    $description = "Aviation Incident Enquiry, Court Of Enquiry 06 June 1996, Evidence of Mr Joe Sultana"; 
    $category = "Inquiry"; 
    $year = "1996";
    $month = "June";
    $day = "08";
    $author = "Antonia Rina Mamo";
    $link = "court-of-enquiry-06061996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Aviation Incident Enquiry, Court Of Enquiry 27 June 1996, Evidence of Major Joseph Mifsud";
    $description = "Aviation Incident Enquiry, Court Of Enquiry 27 June 1996, Evidence of Major Joseph Mifsud"; 
    $category = "Inquiry"; 
    $year = "1996";
    $month = "June";
    $day = "27";
    $author = "Dr. Philip Sciberras LL.D.";
    $link = "court-of-inquiry-27061996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email from Daniel regarding opportunity to do further underwater search";
    $description = "Email from Daniel Aquilina, regarding a friend who is working on tracing old World War II wrecks on the Maltese seabed and is interested n helping out"; 
    $category = "Search"; 
    $year = "2001";
    $month = "August";
    $day = "06";
    $author = "Daniel Aquilina";
    $link = "daniel-search-opportunity-06082001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Did the plane go down in Tripoli?";
    $description = "Information from Geoff Williams, regarding a phone call with his nephew on the evening of the 12th December 1995. Geoff described how Andrew rang and told him that he had been in a government building where he met with an official, who he named as Philip Scibberas"; 
    $category = "Documentation"; 
    $year = "2011";
    $month = "August";
    $day = "17";
    $author = "Mark Boomer";
    $link = "did-the-plane-go-down-in-tripoli-17082011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Discussion on Pan AM 103 from Professional Pilots Rumour Network Forum";
    $description = "Discussion that relates to Pan AM 103 and the Lockerbie disaster on the Professional Pilots Rumour Network Forum"; 
    $category = "Theory"; 
    $year = "2011";
    $month = "August";
    $day = "16";
    $author = "Professional Pilots Rumour Network Forum";
    $link = "discussion-on-lockerbie-pan-am103-18082011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Distress signal from Tripoli picked up by satellite compas signal VHF-2121-5";
    $description = "Report that a distress signal from a disused airfield east of Tripoli picked up by satellite compas signal VHF-2121-5 via Toulouse. 3rd December 1995"; 
    $category = "Documentation"; 
    $year = "1995";
    $month = "12";
    $day = "03";
    $author = "ComPass Satellite";
    $link = "distress-signal-received-from-tripoli-03121995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Response From Downing Street";
    $description = "Response From Downing Street to a letter sent by Geoff Williams"; 
    $category = "Letter"; 
    $year = "2001";
    $month = "June";
    $day = "07";
    $author = "Jan Taylor";
    $link = "downing-street-07062001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email thread between Don Mullan and Cormac Boomer";
    $description = "Email thread between Don Mullan and Cormac Boomer regarding the proposal for the making of a television documentary"; 
    $category = "Email"; 
    $year = "2001";
    $month = "June";
    $day = "28";
    $author = "Don Mullan";
    $link = "email-don-cormac-28062001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email thread between Don Mullan, Cormac Boomer, Cecillia Pellegrini";
    $description = "Email thread between Don Mullan and Cormac Boomer regarding the proposal for the making of a television documentary"; 
    $category = "Email"; 
    $year = "2002";
    $month = "November";
    $day = "26";
    $author = "Don Mullan";
    $link = "email-don-cormac-cecillia-26112002.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email from Cecilia Pellegrini to Cormac Boomer re: Don Mullan";
    $description = "Email from Cecilia Pellegrini Petit to Don Mullan regarding newspaper cuttings relating to the motorcycle found in Manuel Dimech Street (ex Prince of Wales Road) after the killing of Shqaqi"; 
    $category = "Email"; 
    $year = "2002";
    $month = "December";
    $day = "06";
    $author = "Cecilia Pellegrini";
    $link = "email-from-cecilia-cormac-06122002.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Email from Janet Anderson";
    $description = "Email from Janet Anderson, requesting information on an article in Belfast Telegraph in 1997"; 
    $category = "Email"; 
    $year = "2001";
    $month = "September";
    $day = "04";
    $author = "Janet Anderson";
    $link = "email-janet-anderson-04092001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Relatives view wreckage found by Tunisian fisherman";
    $description = "It was an emotional moment for the people who lost their husbands, fathers and sons in the tragedy and the viewing was held privately at their request"; 
    $category = "Newspaper"; 
    $year = "1997";
    $month = "May";
    $day = "16";
    $author = "The Times Malta";
    $link = "emotional-moment-for-relatives-16051997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "F0013056 Freedom Of Information Response";
    $description = "Response from Air Accidents Investigation Branch, Farnborough on the FOI request F00113056"; 
    $category = "FOI"; 
    $year = "2020";
    $month = "April";
    $day = "14";
    $author = "Ian Bass";
    $link = "F0013056-freedom-of-information-act-response-141042020.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Flight Manifest showing a hand written list of the passengers";
    $description = "Flight Manifest presented to Board Of Inquiry, showing a hand written list of the passengers. Dated 03 December 1995"; 
    $category = "Inquiry"; 
    $year = "1995";
    $month = "December";
    $day = "13";
    $author = "Unknown";
    $link = "flight-manifest-for-flight-9habu-0312195.html";

    mysqli_stmt_execute($insertStatement);

    $title = "F0013056 REQUEST FOR INFORMATION HELD ON THE CRASH OF PIPER LANCE 9H-ABU";
    $description = "F0013056 -FREEDOM OF INFORMATION ACT - REQUEST FOR INFORMATION HELD ON THE CRASH OF PIPER LANCE 9H-ABU ON DECEMBER 3RD 1995, FLYING FROM DJERBA, TUNISIA TO MALTA"; 
    $category = "FOI"; 
    $year = "2015";
    $month = "November";
    $day = "15";
    $author = "Mark Boomer";
    $link = "freedom-of-info-request-15112015.html";

    mysqli_stmt_execute($insertStatement);

    $title = "F0013056 REQUEST FOR INFORMATION HELD ON THE CRASH OF PIPER LANCE 9H-ABU";
    $description = "F0013056 - FREEDOM OF INFORMATION ACT - REQUEST FOR INFORMATION HELD ON THE CRASH OF PIPER LANCE 9H-ABU ON DECEMBER 3RD 1995, FLYING FROM DJERBA, TUNISIA TO MALTA"; 
    $category = "FOI"; 
    $year = "2015";
    $month = "December";
    $day = "14";
    $author = "Ian Bass, AAIB UK";
    $link = "freedom-of-info-response-14122015.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Franco Aloisio reporting a connection between Peter Jones murder and Libya";
    $description = "Article by Franco Aloisio, published in the Malta Independent Sunday October 12th 1997. reporting a connection between Peter Jones murder and Libya"; 
    $category = "Newspaper"; 
    $year = "1997";
    $month = "January";
    $day = "12";
    $author = "Franco Aloisio";
    $link = "gaddafi-opponents-lived-in-murder-victims-house-12101997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter sent by Geoff Williams to the Maltese Board of Inquiry regarding statement by Andrew Williams";
    $description = "Letter sent by Geoff Williams on 15th July 1999 to the Maltese Board of Inquiry, includes his signed affidivat regarding the statement by Andrew Williams that he was informed the plane had been tracked to Tripoli"; 
    $category = "Inquiry"; 
    $year = "1997";
    $month = "July";
    $day = "15";
    $author = "Geoff Williams";
    $link = "geoff-williams-affidavit-sent-to-board-of-enquiry-15071999.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article written by Paul Boomer to remember his missing father";
    $description = "Article written by Paul Boomer to remember his missing father, Desmond Boomer, and in recognition of the efforts of his mother, Mandy in helping his brothers and sisters cope with the loss of their father"; 
    $category = "Family"; 
    $year = "2011";
    $month = "August";
    $day = "26";
    $author = "Paul Boomer";
    $link = "half-my-lifetime-ago-26082011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "More detail on the story of the Libyan plane located during the search for 9H-ABU";
    $description = "More detail on the story of the Libyan plane located during the search for 9H-ABU"; 
    $category = "Documentation"; 
    $year = "2011";
    $month = "September";
    $day = "18";
    $author = "Cecilia Aquilina";
    $link = "idc-international-drilling-company-18092011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Information to Don re: Departure time of 9H-ABU on outbound flight";
    $description = "Information sent by Cormac Boomer to Don Mullan re: Departure time of 9H-ABU on outbound flight"; 
    $category = "Email"; 
    $year = "2002";
    $month = "February";
    $day = "2002";
    $author = "Cormac Boomer";
    $link = "info-to-don-departure-time-01022002.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter from Board Of Inquiry inviting Rodney Wood to contribute to the inquiry";
    $description = "Letter from Board Of Inquiry inviting Rodney Wood to contribute to the inquiry"; 
    $category = "Inquiry"; 
    $year = "1996";
    $month = "August";
    $day = "07";
    $author = "J. Sultana";
    $link = "inquiry-inviting-rodney-wood-to-contribute-27081996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Newspaper article discusses the refusal of Israel to allow Shqaqi to be buried in Gaza";
    $description = "Newspaper article discusses the refusal of Israel to allow Shqaqi to be buried in Gaza"; 
    $category = "Newspaper"; 
    $year = "1995";
    $month = "November";
    $day = "01";
    $author = "Unknown";
    $link = "israel-refuses-to-allow-shqaqi-burial-in-gaza-0111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article in KullHadd discussing people travelling to work in Libya via Tunisia";
    $description = "Article pubished in KullHadd newspaper discussing people travelling to work in Libya via Tunisia. This article suggests that one pilot (may be Bartolo) in particular is not licensed"; 
    $category = "Newspaper"; 
    $year = "1995";
    $month = "November";
    $day = "26";
    $author = "Kullhadd";
    $link = "kullhadd-26111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Fax, Dr. Philip Scibenas LL.D. has been appointed the Inquiry Commissioner";
    $description = "Fax sent 12 December 1995 from Carol Zammit-Briffa Secretary f/ Hon. Consul to Cormac Boomer informing that Anthony Mangion, Permanent Secretary at the Ministry of Transport has set up the Public Enquiry, Dr. Philip Scibenas LL.D. has been appointed the Commissioner"; 
    $category = "Inquiry"; 
    $year = "1995";
    $month = "December";
    $day = "12";
    $author = "Carol Zammit-Briffa";
    $link = "letter-consul-inquiry-has-been-set-up-12121995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter to Mr. Sean O'Higgins, Head of Department, Department of Foreign Affairs, Dublin";
    $description = "Letter from Cormac Boomer to Mr. Sean O'Higgins, Head of Department, Department of Foreign Affairs, Dublin. Details the sequence of events from first hearing news of the disappearance up to the statement made by Andrew Williams that he had spoken to a government official who informed him that the plane was tracked to Tripoli, Libya"; 
    $category = "Irish Government"; 
    $year = "1995";
    $month = "November";
    $day = "18";
    $author = "Cormac Boomer";
    $link = "letter-cormac-boomer-to-sean-ohiggins-18111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter to Cormac Boomer from Gerry Adams MP";
    $description = "Letter to Cormac Boomer from Gerry Adams MP"; 
    $category = "Letter"; 
    $year = "2001";
    $month = "February";
    $day = "14";
    $author = "Gerry Adams MP";
    $link = "letter-from-gerry-adams-mp-14022001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter Cormac Boomer challenging the impartiality of the Board Of Inquiry";
    $description = "Letter from Niamh Ryan Irish Consulate to Cormac Boomer on 12 January 1996 with translation of an article in the Maltese paper In-Nazzjon Taghna on Dr. Malcolm Pace challenging the impartiality of the Board Of Inquiry"; 
    $category = "Irish Government"; 
    $year = "1996";
    $month = "January";
    $day = "12";
    $author = "Niamh Ryan";
    $link = "letter-from-irish-consulate-newspaper-articles-12011996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter from Irish Consulate detailing conversations with Lieutenant Colonel Vassallo";
    $description = "Letter from Niamh Ryan Irish Consulate to Cormac Boomer on 14 December 1995 detailing conversations with Lieutenant Colonel Vassallo"; 
    $category = "Irish Government"; 
    $year = "1995";
    $month = "December";
    $day = "14";
    $author = "Niamh Ryan";
    $link = "letter-from-irish-consulate-to-cormac-boomer-14121995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter requesting clarification on the offer of assistance by Mrs Margaret Napolitan";
    $description = "Letter sent by J. Brincat to the attorney general requesting clarification on why the offer of assistance by Mrs Margaret Napolitan, 2926 Piper Drive, Vero Beach, Florida"; 
    $category = "Inquiry"; 
    $year = "1997";
    $month = "January";
    $day = "18";
    $author = "J. Brincat";
    $link = "letter-from-j-brincat-re-mrs-napolitan-18011997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter from Jim Nicholson MEP to Cormac Boomer";
    $description = "Letter from Jim Nicholson MEP to Cormac Boomer acknowledging receipt of a letter from Cormac Boomer"; 
    $category = "Politician"; 
    $year = "2001";
    $month = "February";
    $day = "15";
    $author = "Jim Nicholson MEP";
    $link = "letter-from-jim-nicholson-mep-15022001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter sent from the Malta Consulur Office to Geoff Williams";
    $description = "Letter sent from the Malta Consulur Office to Geoff Williams on 15 april 1996, Geoff faxed a copy of the letter to Cormac Boomer"; 
    $category = "Maltese Government"; 
    $year = "1996";
    $month = "April";
    $day = "15";
    $author = "Malta Consulur Office";
    $link = "letter-from-malta-consular-office-to-geoff-williams-15041996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter from Rodney Wood to the Board Of Inquiry";
    $description = "Letter from Rodney Wood in response to questions asked by the Board Of Inquiry"; 
    $category = "Inquiry"; 
    $year = "1996";
    $month = "October";
    $day = "24";
    $author = "Rodney Wood";
    $link = "letter-from-rodney-wood-to-board-of-inquiry-24101996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter to Editor of Sunday Life newspaper seeking apology for article";
    $description = "Letter from Cormac Boomer to the Editor of the Sunday Life newspaper seeking an apology for the 'Movie Bid' article"; 
    $category = "Newspaper"; 
    $year = "2001";
    $month = "November";
    $day = "11";
    $author = "Cormac Boomer";
    $link = "letter-sunday-life-11112001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter requesting ATC tapes and sworn statements that the plane was witnessed leaving Djerba airport";
    $description = "Letter 6th June 1966 from Director General Of Civil Aviation, S.V. Fenech to Mr. Taieb, Director General of Civil Aviation in Tunisia. Requesting ATC tapes and sworn statements that the plane was witnessed leaving Djerba airport"; 
    $category = "Inquiry"; 
    $year = "1996";
    $month = "June";
    $day = "06";
    $author = "S.V. Fenech";
    $link = "letter-to-director-general-of-civil-aviation-tunisia-06061996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter sent by Cormac Boomer to Gerry Adams MP for West Belfast";
    $description = "Letter sent by Cormac Boomer to Gerry Adams MP for West Belfast"; 
    $category = "Politician"; 
    $year = "2001";
    $month = "December";
    $day = "25";
    $author = "Cormac Boomer";
    $link = "letter-to-gerry-adams-mp-25012001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter to Rodney Wood seeking further details of the flight and its passengers";
    $description = "Letter from Cormac Boomer to Rodney Wood seeking further details of the flight and its passengers"; 
    $category = "Letter"; 
    $year = "1999";
    $month = "May";
    $day = "03";
    $author = "Cormac Boomer";
    $link = "letter-to-rodney-wood-from-cormac-boomer-03051999.html";

    mysqli_stmt_execute($insertStatement);

    $title = "List of contacts sent to Don Mullan";
    $description = "List of contacts sent to Don Mullan from Cormac Boomer"; 
    $category = "Documentation"; 
    $year = "2002";
    $month = "April";
    $day = "07";
    $author = "Cormac Boomer";
    $link = "list-of-contacts-07042002.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Paul Foot, in Private Eye, inquiry in to the Lockerbie disaster";
    $description = "Article by Paul Foot, published in Private Eye, on the Camp Ziest, inquiry in to the Lockerbie disaster"; 
    $category = "Newspaper"; 
    $year = "2001";
    $month = "August";
    $day = "24";
    $author = "Paul Foot";
    $link = "lockerbie-the-flight-from-justice-24082011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Correspondence with Madden & Finucane Solicitors Regarding Press Complaint";
    $description = "Correspondence with Madden & Finucane Solicitors regarding complaint made to Press Complaint COmmission about article published in Sunday Life"; 
    $category = "Solicitor"; 
    $year = "2001";
    $month = "November";
    $day = "20";
    $author = "Cormac Boomer";
    $link = "madden-finucane-20112001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Malta Business Weekly, discusses the possible link between Shqaqi and the disappearance of 9H-ABU";
    $description = "Article published in the Malta Business Weekly, on April 11th 1996. Discusses the possible link between Shqaqi and the disappearance of 9H-ABU"; 
    $category = "Newspaper"; 
    $year = "1996";
    $month = "April";
    $day = "11";
    $author = "Malta Business Weekly";
    $link = "malta-business-weekly-shqaqi-link-11041996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Omar Klebb, Malta Independent, description of a flight on 9H-ABU the day before it disappeared";
    $description = "Article published in the Malta Independent on Friday 23 April 1999. Description by Omar Klebb of a flight on 9H-ABU the day before it disappeared"; 
    $category = "Newspaper"; 
    $year = "1999";
    $month = "April";
    $day = "23";
    $author = "Omar Klebb";
    $link = "malta-independant-article-23041999.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Dr Malcolm Pace discusses the findings of the board of inquiry";
    $description = "Article written by Steve Chetcuti, published by the Malta Independent where Dr Malcolm Pace, legal representative of the Bartolo family discusses the findings of the board of inquiry"; 
    $category = "Newspaper"; 
    $year = "2000";
    $month = "January";
    $day = "16";
    $author = "Steve Chetcuti";
    $link = "malta-independent-article-steve-chetcuti-16012000.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Full Version Of Malta TV Documentary";
    $description = "Full Version Of Malta TV Documentary"; 
    $category = "Television"; 
    $year = "1998";
    $month = "December";
    $day = "03";
    $author = "Malta Television";
    $link = "malta-tv-documentary-full-version-10102011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Aviation Incident Enquiry, Court Of Enquiry 06 June 1996, Evidence of Mr Joe Sultana";
    $description = "Aviation Incident Enquiry, Court Of Enquiry 06 June 1996, Evidence of Mr Joe Sultana"; 
    $category = "Inquiry"; 
    $year = "1996";
    $month = "June";
    $day = "06";
    $author = "Antonia Rina Mamo";
    $link = "maltese-board-of-inquiry-report-04072011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Murder of Peter Jones in Sliema police investigating three motives";
    $description = "Newspaper article in the Times Malta, discussing the murder of Peter Jones in Sliema, police investigating three motives"; 
    $category = "Newspaper"; 
    $year = "1997";
    $month = "October";
    $day = "13";
    $author = "Natalino Fenech";
    $link = "murder-of-peter-jones-in-sliema-13101997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "National Transportation (NTSB) Safety Board Report on 9H-ABU";
    $description = "National Transportation (NTSB) Safety Board Report on 9H-ABU published on 24th September 1997"; 
    $category = "Inquiry"; 
    $year = "1997";
    $month = "September";
    $day = "24";
    $author = "National Transportation Safety Board";
    $link = "national-transportation-safety-board-aviation-report-24091997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Cecilia Aqualina - translation of newspaper article on the death of Peter Jones";
    $description = "Letter sent by Cecilia Aqualina to Cormac Boomer on 14th October 1997. With translation of newspaper article on the death of Peter Jones"; 
    $category = "Newspaper"; 
    $year = "1997";
    $month = "October";
    $day = "14";
    $author = "ill-hadd";
    $link = "newspaper-article-i-know-who-killed-shqaqiq-14101997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Cormac Boomer notes on events happening in the first quarter of 1998";
    $description = "Cormac Boomer notes on events happening in the first quarter of 1998"; 
    $category = "Documentation"; 
    $year = "1998";
    $month = "March";
    $day = "20";
    $author = "Cormac Boomer";
    $link = "notes-compiled-by-cormac-boomer-20031998.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Petition for public inquiry";
    $description = "On-line petition created by Paul Boomer, whose father, Desmond Boomer is one of the missing men"; 
    $category = "Petition"; 
    $year = "2011";
    $month = "September";
    $day = "12";
    $author = "Paul Boomer";
    $link = "on-line-petition-for-public-inquiry-12092011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Operation of aircraft annex 6";
    $description = "INTERNATIONAL STANDARDS AND RECOMMENDED PRACTICES OPERATION OF AIRCRAFT Annex 6 TO THE CONVENTION ON INTERNATIONAL CIVIL AVAITION Part 1 INTERNATIONAL COMMERCIAL  AIR TRANSPORT – AEROPLANES Sixth edition of Part 1 July 1995"; 
    $category = "Documentation"; 
    $year = "1995";
    $month = "July";
    $day = "07";
    $author = "Civil Aviation";
    $link = "operation-of-aircraft-annex-6-07081995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Paul Lehman introduced to the Inquiry";
    $description = "Notes taken by Cormac Boomer during the session where Paul Lehman presented evidence to the Inquiry"; 
    $category = "Inquiry"; 
    $year = "1997";
    $month = "May";
    $day = "14";
    $author = "Cormac Boomer";
    $link = "paul-lehman-introduced-to-the-inquiry-14051997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Press Complaint Form - 'Movie Bid Over Mystery Flight'";
    $description = "Press Complaint Form, completed by Cormac Boomer, regarding the Sunday Life 'Movie Bid Over Mystery Flight' article"; 
    $category = "Newspaper"; 
    $year = "2001";
    $month = "November";
    $day = "25";
    $author = "Cormac Boomer";
    $link = "press-complaint-form-25112001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Protest outside Malta's Embassy in Tripoli";
    $description = "Newspaper article from The Times Malta regarding protests that occurred outside the Maltese embassy in Tripoli"; 
    $category = "Newspaper"; 
    $year = "2001";
    $month = "December";
    $day = "10";
    $author = "The Times, Malta";
    $link = "protest-outside-maltas-embassy-in-tripoli-01111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Newspaper article by Sharon Spiteri discussing the assassination of Fathi Shqaqi";
    $description = "Newspaper article by Sharon Spiteri published in The Times, Nov 01 1995. Discussing the assassination of Fathi Shqaqi"; 
    $category = "Newspaper"; 
    $year = "1995";
    $month = "November";
    $day = "01";
    $author = "Sharon Spiteri";
    $link = "sharon-spiteri-assassination-of-fathi-shqaqi-01111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Newspaper article reporting that Shqaqi's assaasins may have left Malta on private plane";
    $description = "Newspaper article written by Sharon Spiteri, in The Times, Malta November 9th 1995. reporting that Shqaqi's assaasins may have left Malta on private plane. The police have received information from Interpol detailing how the assassins of an Islamic Jihad leader killed in Malta last month left the island. Police sources told The Times the information was sent on Monday night but would not reveal the contents of the message For security reasons"; 
    $category = "Newspaper"; 
    $year = "1995";
    $month = "November";
    $day = "09";
    $author = "Sharon Spiteri";
    $link = "shqaqis-assaasins-may-have-left-malta-on-private-plane-09111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Issam Hamza reporting the body of Fathi Shqaqi being flown to Damascus";
    $description = "Article by Issam Hamza, published in The Times, Malta on November 01 1995 reporting on the body of Fathi Shqaqi being flown to Damascus"; 
    $category = "Newspaper"; 
    $year = "1995";
    $month = "November";
    $day = "01";
    $author = "Issam Hamza";
    $link = "shqaqis-body-flown-to-damascus-01111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Information relating to assassination of Fathi Shiqaqi";
    $description = "Information from the website called the 'Online Holocaust Museum: The Israeli Holocaust Against The Palestinians'. This was sent to Cormac Boomer by Don Mullan as it contains details on the assassination of Fathi Shqaqi"; 
    $category = "Documentation"; 
    $year = "2002";
    $month = "November";
    $day = "21";
    $author = "Michael Hoffman";
    $link = "state-sponsored-assassination-21102002.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Murder Mystery Riddle Over Belfast Mans Disappearance Published in Sunday Life By Ciaran Barnes";
    $description = "Murder Mystery Riddle Over Belfast Mans Disappearance - Published in Sunday Life By Ciaran Barnes December 11th 2011"; 
    $category = "Newspaper"; 
    $year = "2011";
    $month = "December";
    $day = "11";
    $author = "Ciaran Barnes";
    $link = "sunday-life-11122011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Fabricated Sunday Life 'Movie Bid' Article";
    $description = "Fabricated Sunday Life 'Movie Bid' article suggesting that Hollywood movie moguls were vying for the rights to make a movie regarding the disappearance of 9H-ABU"; 
    $category = "Newspaper"; 
    $year = "2001";
    $month = "November";
    $day = "11";
    $author = "Ciaran McGuigan";
    $link = "sunday-life-movie-article-11112001.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Letter in the Tehran Times Special ceremonies to mark the martydom of Shaqaqi";
    $description = "Letter in the Tehran Times November 01 1995. Special ceremonies to mark the martydom of Shaqaqi"; 
    $category = "Newspaper"; 
    $year = "1995";
    $month = "November";
    $day = "01";
    $author = "Tehran Times";
    $link = "tehran-times-article-on-shaqaqi-01111995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Photographs of the debris supposedly found by Tunisian fisherman in the Gulf Of Gebas";
    $description = "Photographs of the debris supposedly found by Tunisian fisherman in the Gulf Of Gebas. The following is an explanation of the photographs taken by Cormac Boomer on 25th September 1997. Note the volume of debris recovered is very small and specific given the overall size of the plane"; 
    $category = "Inquiry"; 
    $year = "1997";
    $month = "September";
    $day = "25";
    $author = "Cormac Boomer";
    $link = "the-debris-found-by-tunisian-fisherman-25091997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Article by Sharon Spiteri published in The Times Malta";
    $description = "Article by Sharon Spiteri, published in The Times Malta, June 6th 1996. Richard Tua, MD of Unique Travel is giving evidence to the Board of Inquiry"; 
    $category = "Newspaper"; 
    $year = "1996";
    $month = "June";
    $day = "06";
    $author = "Sharon Spiteri";
    $link = "the-times-malta-pilot-had-offered-free-flights-06061996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "The Times Malta Piper lance Inquiry Inconclusive";
    $description = "This newspaper article, published on November 28th 1996 in The Times, Malta, was forward to Cormac Boomer by AFM Warrant Officer Denis Caruana. Denis also included a newspaper cutting of the anniversary notice from the Aqualina family"; 
    $category = "Newspaper"; 
    $year = "1996";
    $month = "November";
    $day = "28";
    $author = "Carmel Attard";
    $link = "the-times-malta-piper-lance-inquiry-inconclusive-28111996.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Threatening Letter Sent To Mrs. Bartolo";
    $description = "Threatening letter sent to Mrs. Bartolo on the 16th December 1997"; 
    $category = "Letter"; 
    $year = "1997";
    $month = "December";
    $day = "16";
    $author = "Afteb Wahlab Salem";
    $link = "threatening-letter-sent-to-mrs-bartolo-16121997.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Translation of article 4th DECEMBER 1998 in IL-GENS By Carmel Attard";
    $description = "Translation of article 4th DECEMBER 1998 in IL-GENS By Carmel Attard"; 
    $category = "Newspaper"; 
    $year = "1998";
    $month = "December";
    $day = "04";
    $author = "Carmel Attard";
    $link = "translation-of-article-in-il-gens-04121998.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Translation of article in Lehen Is-Sewwa";
    $description = "Translation of article in Lehen Is-Sewwa on Saturday 22nd August 1998"; 
    $category = "Newspaper"; 
    $year = "1998";
    $month = "August";
    $day = "22";
    $author = "Lehen Is-Sewwa";
    $link = "translation-of-article-in-lehen-is-sewwa-22081998.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Translation Of Malta TV Documentary";
    $description = "Translation of the Maltese TV documentary aired on the 3rd anniversary of the disappearance of 9H-ABU. Thanks to Charles Mercieca for completing the transation"; 
    $category = "Television"; 
    $year = "1998";
    $month = "December";
    $day = "03";
    $author = "Charles Mercieca";
    $link = "translation-of-malta-tv-documentary-02102011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Report published by the Tunisian Ministry Of Transport";
    $description = "Report published by the Tunisian Ministry Of Transport in to the disappearance of flght 9H-ABU in December 1995"; 
    $category = "Documentation"; 
    $year = "1995";
    $month = "December";
    $day = "18";
    $author = "Tunisian Ministry Of Transport";
    $link = "tunisian-ministry-of-transport-report-18121995.html";

    mysqli_stmt_execute($insertStatement);

    $title = "Malta TV documentary shown on channel pjazza3";
    $description = "Malta TV documentary shown on channel pjazza3. The show featured Matthew and Cecilia Aqualina, Phillip Bartolo, brother of the pilot, Cormac Boomer and Censu Galea Maltese Minister for Transport and Communications and Tunisian Ambassador For Malta E.T. Abdessalem Hetira"; 
    $category = "Television"; 
    $year = "1998";
    $month = "December";
    $day = "03";
    $author = "Malta TV";
    $link = "tv-documentary-first-shown-on-malta-television-26112011.html";

    mysqli_stmt_execute($insertStatement);

    $title = "US Finds Missing Libyan Plane While Searching For 9habu";
    $description = "Information received from a friend of Phillip Farrugia's who said that the US had discovered a missing Libyan plane while searching for 9H-ABU"; 
    $category = "Documentation"; 
    $year = "1999";
    $month = "September";
    $day = "12";
    $author = "Mark Boomer";
    $link = "us-finds-missing-libyan-plane-while-searching-for-9habu-12091999.html";

    mysqli_stmt_execute($insertStatement);

    echo "New records created successfully";

    mysqli_close();

?>