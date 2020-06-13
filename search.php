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
        <form id="searchForm" method="GET" action="search.php" >
            <input id="searchBox" name="q" type="text" placeholder="" value="Search..." maxlength="50" autocomplete="off" onmousedown="active();" onblur="inactive();" /><input id="searchBtn" name="submit" type="submit" value="Go!" />
        </form>
        
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
        
