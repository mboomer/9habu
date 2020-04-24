<?php
    if($_POST["submit"]) {
        $recipient="mark.boomer@9habu.com";
        $subject="Message from 9habu contact form";
        $senderFirst=$_POST["firstname"];
        $senderLast=$_POST["lastname"];
        $senderEmail=$_POST["email"];
        $senderMessage=$_POST["message"];

        $mailBody="Name: $senderFirst $senderLast \n Email: $senderEmail\n\n $senderMessage";

        mail($recipient, $subject, $mailBody, "From: $senderEmail <$senderEmail>");

        $thankYou="<p><br /><strong>Thank you! Your message has been sent.</strong><br /></p>";
    }
?>
<!DOCTYPE html>
    <html lang="en">
      <head>
            <meta charset="UTF-8" >
            <title>Contact Form</title>
          
            <meta name="viewport" content="width=device-width initial-scale=1"> <!-- sets initial scale to 100% -->

            <link rel="shortcut icon" type="image/ico" href="img/icons/favicon.ico">
            <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway&display=swap" rel="stylesheet">

            <script src="https://kit.fontawesome.com/130d5316ba.js" crossorigin="anonymous"></script>

            <meta name="description" content="If you have any articles or documents that you would like to have published on the site then you can use this form to attach files and send them be published. If you would like to provide any feedback on the site you can use this form to email me. If you have any information in relation to the disappearance of these men you can use this form to email me." >

            <!-- this is a downloaded google font  Use font-family: 'Cinzel', serif; in CSS-->
            <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="styles.css">

        </head>

    <!-- ******************************************************************************************* -->

        <body id="body-top"> <!-- the jquery will scroll to this point -->

            <!-- ********************************************************************************** -->
            <!-- navigation menu displayed across the top of the page                               -->
            <!-- ********************************************************************************** -->
            <header>
                <h2><a href="#" target="_blank"><img src="img/logo.jpg" alt="Piper Lance 9h-abu"></a></h2>
                <nav>
                    <ul>
                        <li><a href="#body-top">Top</a></li>         <!-- returns to top the site -->

                        <li><a href="index.html" title="Home Page" >Home</a></li>
                        <li><a href="death-in-the-mediterranean.html" title="An Investigation By Don Mullan" >An Investigation By Don Mullan</a></li>
                        <li><a href="maltese-board-of-inquiry-report.html" title="Maltese Board of Inquiry Report" >Maltese Board of Inquiry Report</a></li>
                        <li><a href="malta-tv-documentary.html" title="Malta TV Documentary" >Malta TV Documentary</a></li>
                        <li><a href="contact-me.php" title="Contact Us">Contact Us</a></li>
                    </ul>
                </nav>
            </header>
            <!-- ********************************************************************************** -->

        <!-- **************************************************************************** -->
        <!-- section holding the images of the missing passengers                         -->
        <!-- **************************************************************************** -->
        <ul id="missing-passengers" class="the-missing" >

            <passenger-details 
                v-for="(missingperson, index) in passengers" v-bind:passenger="missingperson" :key="index">         
            </passenger-details>                              
            
        </ul> <!-- end of "the-missing" -->
    

        <!-- **************************************************************************** -->

            <!-- **************************************************************************** -->
            <!-- section for the text on the main page                                        -->
            <!-- **************************************************************************** -->

            <div id="main-text-area">

                <div id="formcontainer">

                    <span class="header-blue">Contact Form</span>

                    <form id="formwrapper" method="post" action="contact-me.php">
                        <section id="left-col">
                            <fieldset>
                                <legend>Personal Details</legend>
                                <?=$thankYou ?>                         <!-- insert thank you test via php -->   
                                <p>
                                    <input id="firstname" name="firstname" type="text"  placeholder="First Name" autofocus tabindex="1">
                                    <input id="lastname"  name="lastname"  type="text"  placeholder="Last Name" tabindex="2">
                                    <input id="email"     name="email"     type="email" placeholder="email@address.com" tabindex="3" required >
                                </p>
                            </fieldset>
                        </section>
                        <section id="right-col">
                            <fieldset>
                                <legend>Message</legend>
                                <textarea id="message" name="message" rows="10" cols="40" placeholder="Enter text here..." tabindex="4"></textarea>
                            </fieldset>
                                <input type="submit" name="submit" value="Submit Form" tabindex="5">
                        </section>    
                    </form>

                </div> <!-- end of formcontainer -->

            </div> <!-- end of main-text-area -->

            <!-- **************************************************************************** -->
            <!-- section holding the links to latest articles, most popular, coming soon, links                                    -->
            <!-- **************************************************************************** -->

            <div id="latest-popular-soon">

                  <div class="article-lists">
                    <p>{{ latestArticlesTitle }}...</p>
                    <ul>
                        <latest 
                            v-for="(article, index) in latestArticles"                 
                            v-bind:latestarticle="article"                           
                            :key="index">                                            
                        </latest>                                                   
                    </ul>
                  </div>

                  <div class="article-lists">
                    <p>{{ mostReadArticlesTitle }}...</p>
                    <ul>
                        <most-read 
                            v-for="(article, index) in mostReadArticles"                 
                            v-bind:mostreadarticle="article"                           
                            :key="index">                                            
                        </most-read>                                        
                    </ul>
                  </div>

                  <div class="article-lists">
                    <p>{{ comingSoonArticlesTitle }}...</p>
                    <ul>
                        <coming-soon 
                            v-for="(article, index) in comingSoonArticles"                 
                            v-bind:comingsoonarticle="article"                           
                            :key="index">                                            
                        </coming-soon>                                      
                    </ul>
                  </div>

                  <div class="article-lists">
                    <p>{{ relatedSitesTitle }}...</p>
                    <ul>
                        <related-sites 
                            v-for="(site, index) in relatedSites"                 
                            v-bind:sitelist="site"                           
                            :key="index">                                            
                        </related-sites>         
                    </ul>
                  </div>
            </div>              <!-- end of latest-popular-soon -->

            <!-- **************************************************************************** -->
            <!-- section holding the links to social media                                    -->
            <!-- **************************************************************************** -->

            <footer id="social-media">
                <ul>
                    <li><a href="https://www.facebook.com/The-mysterious-disappearance-of-flight-9h-Abu-110054825767796/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                </ul>   
                <p>&copy; <script>document.write(new Date().getFullYear());</script> The Mysterious Disappearance Of Flight 9H-ABU</p>
                <p>&ldquo;All Rights Reserved&mdash;Designed by Mark Boomer&rdquo; </p>
            </footer>
            
            <!-- **************************************************************************** -->
            <!-- Load the VUE.js libraries to access Vue functionality                                    -->
            <!-- **************************************************************************** -->
            <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11/dist/vue.js"></script>
            <script src="main.js"></script>

        </body>
    </html>
