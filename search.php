<?php
//    if ($_GET["q"] == "Search...") {
//        header("Location: search.php");
//    }

    $servername = "mysql.9habu.com";
    $username   = "9habu_db";
    $password   = "9habu_document_archive";
    $db         = "9habu_archive";
        
    $searchString = $_GET["q"];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //    echo "Connected successfully";
?>
<!-- =================================================================== -->
<!--        Connect from command line                                    -->
<!--        mysql -u 9habu_db -p -h mysql.9habu.com 9habu_archive        -->
<!-- =================================================================== -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <title>Document Archive Search</title>
    
        <meta name="viewport" content="width=device-width initial-scale=1"> <!-- sets initial scale to 100% -->
      
        <link rel="shortcut icon" type="image/ico" href="../img/icons/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/130d5316ba.js" crossorigin="anonymous"></script>

        <meta name="description" content="Document archoive search. Allows search on category, author, year, month and day" >

        <meta name="keywords" content="'9HABU','9H-ABU','Malta','Djerba','Lybia,'disappearance of flight','mysterious disappearance','Desmond Boomer','conspiracy theory','air crash investigation','cover up','plane crash investigation'" />
        <meta name="author" content="Mark Boomer" />
        <meta name="category" content="Search" />
        <meta name="created-day" content="16" />
        <meta name="created-month" content="June" />
        <meta name="created-year" content="2020" />

        <!-- this is a downloaded google font  Use font-family: 'Cinzel', serif; in CSS-->
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
  
        <link rel="stylesheet" href="../styles.css">
        <link rel="stylesheet" href="search-style.css" />
      
        <script type="text/javascript">
            function active() {
                var searchBar = document.getElementById("searchBox");
                
                if (searchBar.value == 'Search...') {
                    searchBar.value = ''
                    searchBar.placeholder = 'Search...'
                }
            }
            function inactive() {
                var searchBar = document.getElementById("searchBox");
                
                if (searchBar.value == '') {
                    searchBar.value = 'Search...'
                    searchBar.placeholder = ''
                }
            }
        </script>
    </head>

    <!-- ******************************************************************************************* -->

    <body id="body-top"> <!-- the jquery will scroll to this point -->
        
        <!-- ********************************************************************************** -->
        <!-- navigation menu displayed across the top of the page                               -->
        <!-- ********************************************************************************** -->
        <header id="header-menu">
            <h2><a href="#" target="_blank"><img src="../img/logo.jpg" alt="Piper Lance 9h-abu"></a></h2>
            <nav>
                <ul>
                    <li><a href="#body-top">Top</a></li>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../death-in-the-mediterranean.html">An Investigation By Don Mullan</a></li>
                    <li><a href="../maltese-board-of-inquiry-report.html">Maltese Board of Inquiry Report</a></li>
                    <li><a href="../malta-tv-documentary.html">Malta TV Documentary</a></li>
                    <li><a href="../contact-me.php">Contact Us</a></li>
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
        <!-- section for the text on the main page                                        -->
        <!-- **************************************************************************** -->

        <div id="main-text-area">

            <div class="main-text main-text-wide">

                <span class="header-blue">Document Archive Search</span>

                <p></p>
                
                <div id="filter-container">

                    <form id="search-form" method="GET" action="search.php" >

                        <div class="drop-down">
                            <fieldset id="category">
                                <legend>Category</legend>
                                <select id="category" name="category">
                                <option value="">Select...</option>
                                <?php 
                                    $sqlCatg = "SELECT DISTINCT category FROM articles ORDER BY category ASC";
                                    $rsCatg  = mysqli_query($conn, $sqlCatg);

                                    while($rows = mysqli_fetch_assoc($rsCatg)) {
                                        echo '<option value="'.$rows['category'].'">'.$rows['category'].'</option>';
                                    }
                                ?>
                                </select>
                            </fieldset>
                        </div>

                        <div class="drop-down">
                            <fieldset id="author">
                                <legend>Author : </legend>
                                <select id="author" name="author">
                                <option value="">Select...</option>
                                <?php 
                                    $sqlAuth = "SELECT DISTINCT author FROM articles ORDER BY author ASC";
                                    $rsAuth  = mysqli_query($conn, $sqlAuth);

                                    while($rows = mysqli_fetch_assoc($rsAuth)) {
                                        echo '<option value="'.$rows['author'].'">'.$rows['author'].'</option>';
                                    }
                                ?>
                            </select>
                            </fieldset>
                        </div>

                        <div class="drop-down">
                            <fieldset id="year">
                                <legend>Year</legend>
                                <select id="year" name="year">
                                <option value="">Select...</option>
                                <?php 
                                    $sqlYear = "SELECT DISTINCT year FROM articles ORDER BY year ASC";
                                    $rsYear  = mysqli_query($conn, $sqlYear);

                                    while($rows = mysqli_fetch_assoc($rsYear)) {
                                        echo '<option value="'.$rows['year'].'">'.$rows['year'].'</option>';
                                    }
                                ?>
                                </select>
                            </fieldset>
                        </div>

                        <div class="drop-down">
                            <fieldset id="month">
                                <legend>Month</legend>
                                <select id="month" name="month">
                                <option value="">Select...</option>
                                <?php 
                                    $sqlMnth = "SELECT DISTINCT month FROM articles ORDER BY year ASC";
                                    $rsMnth  = mysqli_query($conn, $sqlMnth);

                                    while($rows = mysqli_fetch_assoc($rsMnth)) {
                                        echo '<option value="'.$rows['month'].'">'.$rows['month'].'</option>';
                                    }
                                ?>
                                </select>
                            </fieldset>
                        </div>

                        <div class="drop-down">
                            <fieldset id="day">
                                <legend>Day</legend>
                                <select id="day" name="day">
                                <option value="">Select...</option>
                                <?php 
                                    $sqlDays = "SELECT DISTINCT day FROM articles ORDER BY day ASC";
                                    $rsDays  = mysqli_query($conn, $sqlDays);

                                    while($rows = mysqli_fetch_assoc($rsDays)) {
                                        echo '<option value="'.$rows['day'].'">'.$rows['day'].'</option>';
                                    }
                                ?>
                                </select>
                            </fieldset>
                        </div>

                        <div class="drop-down">
                            <fieldset id="search">
                                <input id="searchBox" name="q" type="text" placeholder="Search..." value="" maxlength="100" autocomplete="off" onmousedown="active();" onblur="inactive();" /><input id="searchBtn" name="submit" type="submit" value="Go!" />
                            </fieldset>
                        </div>
                    </form>

                </div>

                <?php

                    $_category = $_GET["category"];
                    $_author   = $_GET["author"];
                    $_year     = $_GET["year"];
                    $_month    = $_GET["month"];
                    $_day      = $_GET["day"];

                    if (!isset($searchString)) {
                        echo "<div class='results'>No Search Entered</div>";
                    } else {
                            $queryString = 'SELECT * FROM articles WHERE (title LIKE "%' .$searchString . '%" OR description LIKE "%' .$searchString . '%")';

                            if ($_category !== "") {
                                $queryString = $queryString . ' AND (category = "' . $_category . '")';
                            }                
                            if ($_author !== "") {
                                $queryString = $queryString . ' AND (author = "' . $_author . '")';
                            }
                            if ($_year !== "") {
                                $queryString = $queryString . ' AND (year = "' . $_year . '")';
                            }
                            if ($_month !== "") {
                                $queryString = $queryString . ' AND (month = "' . $_month . '")';
                            }
                            if ($_day !== "") {
                                $queryString = $queryString . ' AND (day = "' . $_day . '")';
                            }

                            // echo $queryString;

                            $query = mysqli_query($conn, $queryString);    
                            $num_rows = mysqli_num_rows($query);

                           if ($_category !== "") {
                                $searchString = $searchString . ' category: ' . $_category;
                            }                
                            if ($_author !== "") {
                                $searchString = $searchString . ' author: ' . $_author;
                            }
                            if ($_year !== "") {
                                $searchString = $searchString . ' year: ' . $_year;
                            }
                            if ($_month !== "") {
                                $searchString = $searchString . ' month: ' . $_month;
                            }
                            if ($_day !== "") {
                                $searchString = $searchString . ' day: ' . $_day;
                            }

                            if ($num_rows == 1) {
                                echo "<p class='result-header'><strong>" . $num_rows . "</strong> Result For Search &quot;" . $searchString . "&quot;</p>";
                            } else {
                                echo "<p class='result-header'><strong>" . $num_rows . "</strong> Results For Search &quot;" . $searchString . "&quot;</p>";
                            }

                            while($row = mysqli_fetch_array($query)) {
                                $id          = $row["id"];
                                $title       = $row["title"];
                                $description = $row["description"];
                                $category    = $row["category"];
                                $year        = $row["year"];
                                $month       = $row["month"];
                                $day         = $row["day"];
                                $author      = $row["author"];
                                $link        = $row["link"];

                                echo "<div class='results'>";

                                    echo "<h3>" . $title . "</h3>" . "<p>" . $description . "</p>" . "<p><strong>Category : </strong>" . $category . "<br>" . "<strong>Author : </strong>" . $author . "<br>" . "<strong>Date : </strong>" . $month . " " . $day . " " . $year . "<br>" . "<strong>Article : </strong><a class='result-link' href='articles/" . $link . "'>" . $title . "</a>" . "<br>";

                                echo "</div>";
                                }
                            $q = "";
                            $searchString = "";
                    }
                ?>
                
            </div> <!-- end of main-text -->

        </div> <!-- end of main-text-area -->
        
        <!-- ****************************************************************************** -->
        <!-- section holding the links to latest articles, most popular, coming soon, links -->
        <!-- ****************************************************************************** -->
        
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
        <script src="../main.js"></script>

    </body>
</html>

