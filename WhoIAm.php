<!DOCTYPE html>
<!-- 
Created on : Feb 10, 2015, 12:21:37 PM
Author     : Lacey Taylor
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Code Example 1</title> 
        <link rel="stylesheet" type ="text/css" href="baseCSS.css" media="screen" />
    </head>
    <body>


        <header>
           <?php include 'Header.php';?>
        </header>


        <nav>
            <?php include 'Menu.php';?>
        </nav>

        <div id="centerContent">
           <?php
        // parameterizes the post values and stores into variables
        //-will take all the POST variables and parameterize them(or turn them in variables)
        $first = htmlentities($_POST['first_name']);
        $last = htmlentities($_POST['last_name']);
        $age = htmlentities($_POST['age']);
        $addr = htmlentities($_POST['street_address']);
        $state = htmlentities($_POST['state']);
        $gender = htmlentities($_POST['gender']);
        $stuff = get_theName($first, $last);
        $current = date("Y");

        //Prints the variables out with information
        //-will write all the post variables to the page using the printf() format
        printf(" Your name is: %s <br>", $stuff);
        printf(" You age is: %s <br>", $age);
        printf(" Your address is: %s <br>", $addr);
        printf(" You live in: %s <br>", $state);
        printf(" You are: %s <br>", $gender);
        printf("<br>");


        //Chooses the back ground color based on the gender choosen
        //if the sex is male it will change the background image
        switch ($gender) {
            case female:
                echo '<WhoIAm style="background-color:red; color:white;"  >';
                break;
            case male:
                echo '<WhoIAm style="background-color:blue; color:white;">';
                break;
            case neither:
                echo '<WhoIAm style="background-color:purple; color:white;">';
                break;
            default:
                echo '<WhoIAm style="background-color:white; color:black;">';
                break;
        }


        // For loop which prints out the current year minus progressivly larger age
        //will print all the years from current date back to the year they were born
        for ($count = 0; $count <= $age; $count++) {
            echo $current - $count . "<br>";
        }

        //Concatinates first and last name together for name
        function get_theName($a, $b) {
            $c = strtolower($a);
            $d = strtolower($b);
            return ucfirst($c) . ' ' . ucfirst($d);
        }
        ?>
        </div>


        <footer>
            <?php include 'Footer.php';?>
        </footer>
       
    </body>
</html>
