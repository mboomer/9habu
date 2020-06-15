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
                        <input id="searchBox" name="q" type="text" placeholder="Search..." value="" maxlength="50" autocomplete="off" onmousedown="active();" onblur="inactive();" /><input id="searchBtn" name="submit" type="submit" value="Go!" />
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
                
                    echo $queryString;
                    
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

                            echo "<h3>" . $title . "</h3>" . "<p>" . $description . "</p>" . "<p><strong>Category : </strong>" . $category . "<br>" . "<strong>Author : </strong>" . $author . "<br>" . "<strong>Date : </strong>" . $month . " " . $day . " " . $year . "<br>" . "<strong>Article : </strong><a href='articles/" . $link . "'>" . $title . "</a>" . "<br>";

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
