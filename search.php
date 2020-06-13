<?php
    if ($_GET["q"] == "Search...") {
        header("Location: search.php");
    }

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

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Custom Search Engine</title>

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

    <body>         
        <div id="filter-container">
            
            <div class="drop-down">
                <div class="category-container">
                    <label>Category : </label>
                    <select id="category" name="category">
                    <option value="">Select Category</option>
                    <?php 
                        $sqlCatg = "SELECT DISTINCT category FROM articles ORDER BY category ASC";
                        $rsCatg  = mysqli_query($conn, $sqlCatg);

                        while($rows = mysqli_fetch_assoc($rsCatg)) {
                            echo '<option value="'.$rows['category'].'">'.$rows['category'].'</option>';
                        }
                    ?>
                    </select>
                <img src="" id="loader">
                </div>
            </div>

            <div class="drop-down">
                <div class="author-container">
                    <label>Author : </label>
                    <select id="author" name="author">
                    <option value="">Select Author</option>
                    <?php 
                        $sqlAuth = "SELECT DISTINCT author FROM articles ORDER BY author ASC";
                        $rsAuth  = mysqli_query($conn, $sqlAuth);

                        while($rows = mysqli_fetch_assoc($rsAuth)) {
                            echo '<option value="'.$rows['author'].'">'.$rows['author'].'</option>';
                        }
                    ?>
                    </select>
<!--                <img src="" id="loader">-->
                </div>
            </div>

            <div class="drop-down">
                <div class="year-container">
                    <label>Year : </label>
                    <select id="year" name="year">
                    <option value="">Select Year</option>
                    <?php 
                        $sqlYear = "SELECT DISTINCT year     FROM articles ORDER BY year ASC";
                        $rsYear  = mysqli_query($conn, $sqlYear);

                        while($rows = mysqli_fetch_assoc($rsYear)) {
                            echo '<option value="'.$rows['year'].'">'.$rows['year'].'</option>';
                        }
                    ?>
                    </select>
                <img src="" id="loader">
                </div>
            </div>

            <div class="drop-down">
                <div class="month-container">
                    <label>Month : </label>
                    <select id="month" name="month">
                    <option value="">Select Month</option>
                    <?php 
                        $sqlMnth = "SELECT DISTINCT month FROM articles ORDER BY year ASC";
                        $rsMnth  = mysqli_query($conn, $sqlMnth);

                        while($rows = mysqli_fetch_assoc($rsMnth)) {
                            echo '<option value="'.$rows['month'].'">'.$rows['month'].'</option>';
                        }
                    ?>
                    </select>
                <img src="" id="loader">
                </div>
            </div>

            <div class="drop-down">
                <div class="day-container">
                    <label>Day : </label>
                    <select id="day" name="day">
                    <option value="">Select Day</option>
                    <?php 
                        $sqlDays = "SELECT DISTINCT day FROM articles ORDER BY day ASC";
                        $rsDays  = mysqli_query($conn, $sqlDays);

                        while($rows = mysqli_fetch_assoc($rsDays)) {
                            echo '<option value="'.$rows['day'].'">'.$rows['day'].'</option>';
                        }
                    ?>
                    </select>
                <img src="" id="loader">
                </div>
            </div>

            <div id="search" class="drop-down">
                <form id="searchForm" method="GET" action="search.php" >
                    <input id="searchBox" name="q" type="text" placeholder="" value="Search..." maxlength="50" autocomplete="off" onmousedown="active();" onblur="inactive();" /><input id="searchBtn" name="submit" type="submit" value="Go!" />
                </form>

            </div>

        </div>

        <?php
            if (!isset($searchString)) {
                echo "no search entered";
            } else {
                    $queryString = 'SELECT * FROM articles WHERE title LIKE "%' .$searchString . '%" OR description LIKE "%' .$searchString . '%"';

                    $query = mysqli_query($conn, $queryString);    
                    $num_rows = mysqli_num_rows($query);

                    if ($num_rows == 1) {
                        echo "<p><strong>" . $num_rows . "</strong> result for " . $searchString . "</p>";
                    } else {
                        echo "<p><strong>" . $num_rows . "</strong> results for " . $searchString . "</p>";
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

                        echo "<div id='results'>";

                            echo "<h3>" . $title . "</h3>" . "<p>" . $description . "</p>" . "<p><strong>Category : </strong>" . $category . "<br>" . "<strong>Author : </strong>" . $author . "<br>" . "<strong>Date : </strong>" . $day . "/" . $month . "/" . $year . "<br>" . "<strong>Article : </strong><a href='articles/" . $link . "'>" . $title . "</a>" . "<br>";

                        echo "</div>";
                        }
                    $q = "";
                    $searchString = "";
            }
        ?>
                
    </body>

</html>
<!-- =================================================================== -->
<!--        Connect from command line                                    -->
<!--        mysql -u 9habu_db -p -h mysql.9habu.com 9habu_archive        -->
<!-- =================================================================== -->
        
<!--
                     <select id = "myList">
                       <option value = "1">one</option>
                       <option value = "2">two</option>
                       <option value = "3">three</option>
                       <option value = "4">four</option>
                     </select>

-->
