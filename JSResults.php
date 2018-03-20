<!DOCTYPE html>
<!-- 
Created on : Apr 16, 2015, 12:21:37 PM
Author     : Lacey Taylor
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Validated Contact Results</title>
        <link rel="stylesheet" type ="text/css" href="baseCSS.css" media="screen" />
        <script type="text/javascript">
      </script>
      <noscript>
      </noscript>
    </head>
    <body>
        <header>
            <?php include 'Header.php'; ?>
        </header>


        <nav>
            <?php include 'Menu.php'; ?>
        </nav>

        <div id="centerContent">
            <?php
            require_once 'dblogin.php';
            $conn = mysql_connect($hostname, $username, $password) or die('Error connecting to mysql: ' . mysql_error());
            mysql_select_db("Acme") or die("Unable to connect to database: " . mysql_error());

            // parameterizes the post values and stores into variables
            //-will take all the POST variables and parameterize them(or turn them in variables)
            $first = htmlentities($_POST['first_name']);
            $last = htmlentities($_POST['last_name']);
            $phone = htmlentities($_POST['phone']);
            $addr = htmlentities($_POST['street_address']);
            $city = htmlentities($_POST['city']);
            $state = htmlentities($_POST['state']);
            $zip = htmlentities($_POST['zcode']);
            $month = htmlentities($_POST['month']);
            $day = htmlentities($_POST['day']);
            $year = htmlentities($_POST['year']);
            $uname = htmlentities($_POST['uname']);
            $pword = htmlentities($_POST['pword']);
            $gender = htmlentities($_POST['gender']);
            $relation = htmlentities($_POST['rship']);
            $type = htmlentities($_POST['requestType']);
            
            //Sanitize variables
            $first = sanitizeString($first);
            $last = sanitizeString($last);
            $phone = sanitizeString($phone);
            $addr = sanitizeString($addr);
            $city = sanitizeString($city);
            $state = sanitizeString($state);
            $zip = sanitizeString($zip);
            $month = sanitizeString($month);
            $day = sanitizeString($day);
            $year = sanitizeString($year);
            $uname = sanitizeString($uname);
            $pword = sanitizeString($pword);
            $gender = sanitizeString($gender);
            $relation = sanitizeString($relation);


            //Methods which build the strings to display/enter to database
            //Do after sanitize to enter slashes in bday
            $fullname = get_theName($first, $last);
            $fullbday = set_bDay($month, $day, $year);
          
            //Heading
            echo"<h2>Validated Creation/Search Form Results</h2>";


            if ($type == "create")
            {
                //Prints the variables out with information
                //-will write all the post variables to the page using the printf() format
                printf(" Full Name: %s <br>", $fullname);
                printf(" Phone %s <br>", $phone);
                printf(" Address:  %s , %s , %s, %s <br>", $addr, $city, $state, $zip);
                printf(" Birthday: %s <br>", $fullbday);
                printf(" Username: %s <br>", $uname);
                printf(" Password: %s <br>", $pword);
                printf(" Relation: %s <br>", $relation);
                printf("<br>");


                //Creates a value on the database table People
                $query = "INSERT INTO `Acme`.`People`
                (`fname`,
                `lname`,
                `phone`,
                `address`,
                `city`,
                `state`,
                `zip`,
                `birthday`,
                `uname`,
                `pword`,
                `gender`,
                `relation`)
                VALUES
                    ('$first',
                    '$last',
                    '$phone',
                    '$addr',
                    '$city',
                    '$state',
                    '$zip',
                    '$fullbday',
                    '$uname',
                    '$pword' ,
                    '$gender' ,
                    '$relation')";
                $results = mysql_query($query);

                if (!$results)
                {
                    die("Create table failed: " . mysql_error());
                }
            }

            //Section that runs if the update button is selected
            if ($type == "update")
            {

                //Checks to see if info is edited, and only updates fields that have been modified
                if ($first != null)
                {
                    if ($last != null)
                    {
                        $query = "UPDATE `Acme`.`People` SET lname ='$last' WHERE fname = '$first';";
                        $results = mysql_query($query);
                        echo "$first's last name has been changed to $last <br>";
                    }
                    if ($phone != null)
                    {
                        $query = "UPDATE `Acme`.`People` SET phone ='$phone' WHERE fname ='$first';";
                        $results = mysql_query($query);
                        echo "$first's phone has been changed to $phone <br>";
                    }
                    if ($addr != null)
                    {
                        $query = "UPDATE `Acme`.`People` SET address ='$addr' WHERE fname ='$first'";
                        $results = mysql_query($query);
                        echo "$first's address has been changed to $addr <br>";
                    }
                    if ($city != null)
                    {
                        $query = "UPDATE `Acme`.`People` SET city='$city' WHERE fname = '$first';";
                        $results = mysql_query($query);
                        echo "$first's city has been changed to $city <br>";
                    }
                    if ($state != "")
                    {
                        $query = "UPDATE `Acme`.`People` SET state =$state' WHERE fname = '$first';";
                        $results = mysql_query($query);
                        echo "$first's state has been changed to $state <br>";
                    }
                    if ($zip != null)
                    {
                        $query = "UPDATE `Acme`.`People` SET zip ='$zip' WHERE fname = '$first';";
                        $results = mysql_query($query);
                        echo "$first's zip has been changed to $zip <br>";
                    }
                    if ($fullbday != "//")
                    {
                        $query = "UPDATE `Acme`.`People` SET birthday ='$fullbday' WHERE fname = '$first';";
                        $results = mysql_query($query);
                        echo "$first's birthday has been changed to $fullbday <br>";
                    }
                    if ($uname != null)
                    {
                        $query = "UPDATE `Acme`.`People` SET uname ='$uname' WHERE fname = '$first';";
                        $results = mysql_query($query);
                        echo "$first's user name has been changed to $uname <br>";
                    }
                    if ($pword != null)
                    {
                        $query = "UPDATE `Acme`.`People` SET pword='$pword' WHERE fname = '$first';";
                        $results = mysql_query($query);
                        echo "$first's password has been changed to $pword <br>";
                    }
                    if ($relation != null)
                    {
                        $query = "UPDATE `Acme`.`People` SET relation='$relation' WHERE fname = '$first';";
                        $results = mysql_query($query);
                        echo "$first's relation has been changed to $relation <br>";
                    }


                    //Shows the updated entry, with all information   
                    $query = "SELECT * 
                    FROM Acme.People
                    WHERE fname = '$first';";

                    $results = mysql_query($query);
                   
                    if (!$results)
                    {
                        die("Update Table failed" . mysql_error());
                    }

                    $row = mysql_fetch_array($results);

                    echo"<br><br>Fully updated record: <br>"
                    . "++++++++++++++++++++++++++++++++++++++++ <br>";
                    echo"Name: " . $row[fname] . " " . $row[lname] . "<br>"
                    . "Phone: " . $row[phone] . "<br>"
                    . "Address: " . $row[address] . "<br>"
                    . "City: " . $row[city] . "<br>"
                    . "State: " . $row[state] . "<br>"
                    . "Zip: " . $row[zip] . "<br>"
                    . "Birthday: " . $row[birthday] . "<br>"
                    . "Username: " . $row[uname] . "<br>"
                    . "Password: " . $row[pword] . "<br>"
                    . "Gender: " . $row[gender] . "<br>"
                    . "Relation: " . $row[relation] . "<br>";

                    echo "++++++++++++++++++++++++++++++++++++++++ <br>";
                } else
                {
                    echo "You must identify record by first name";
                }
            }

            //Section that runs if the search button is selected
            if ($type == "search")
            {

                //int value to count out the number of results returned
                $x = 1;

                //Searches by first name only
                $query = "SELECT * 
                    FROM Acme.People
                    WHERE fname LIKE '%$first%';";

                $results = mysql_query($query);
                if (!$results)
                {
                    die("Search Table failed" . mysql_error());
                }

                //Cycles through the array of returned results, then outputs them in an ordered format
                while ($row = mysql_fetch_array($results))
                {
                    echo"Result $x <br>"
                    . "++++++++++++++++++++++++++++++++++++++++ <br>";
                    echo"Name: " . $row[fname] . " " . $row[lname] . "<br>"
                    . "Phone: " . $row[phone] . "<br>"
                    . "Address: " . $row[address] . "<br>"
                    . "City: " . $row[city] . "<br>"
                    . "State: " . $row[state] . "<br>"
                    . "Zip: " . $row[zip] . "<br>"
                    . "Birthday: " . $row[birthday] . "<br>"
                    . "Username: " . $row[uname] . "<br>"
                    . "Password: " . $row[pword] . "<br>"
                    . "Gender: " . $row[gender] . "<br>"
                    . "Relation: " . $row[relation] . "<br>";

                    echo "++++++++++++++++++++++++++++++++++++++++ <br>";

                    $x++;
                }
            }

            //Concatinates first and last name together for name
            function get_theName($a, $b)
            {
                $c = strtolower($a);
                $d = strtolower($b);
                return ucfirst($c) . ' ' . ucfirst($d);
            }

            //Concatinates the birthday info together for one record
            function set_bDay($m, $d, $y)
            {
                return $m . "/" . $d . "/" . $y;
            }

            //Sanitizes the entry
            function sanitizeString($str)
            {
                $str = stripslashes($str);
                $str = strip_tags($str);
                return $str;
                
            }

            mysql_close("Acme");
            ?>
        </div>


        <footer>
<?php include 'Footer.php'; ?>
        </footer>

    </body>
</html>

