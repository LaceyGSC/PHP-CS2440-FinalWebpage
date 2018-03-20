<!DOCTYPE html>
<!--
Created on : Feb 10, 2015, 12:21:37 PM
Author     : Lacey Taylor
-->
<html>

    <head>
        <title>Contact Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <form method="post" action="WhoIAm.php">
                        <p>Please enter your First Name: <input type="text" name="first_name"></p>
                        <p>Please enter your Last Name: <input type="text" name="last_name"></p>
                        <p>Please enter your Age: <input type="text" name="age"></p>
                        <p>Please enter your Street Address: <input type="text" name="street_address"></p>
                        <p>Please enter your State: 
                            <select name ="state">
                                <option></option>
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>Arizona</option>
                                <option>Arkansas</option>
                                <option>California</option>
                                <option>Colorado</option>
                                <option>Connecticut</option>
                                <option>Delaware</option>
                                <option>Florida</option>
                                <option>Georgia</option>
                                <option>Hawaii</option>
                                <option>Idaho</option>
                                <option>Illinois</option>
                                <option>Indiana</option>
                                <option>Iowa</option>
                                <option>Kansas</option>
                                <option>Kentucky</option>
                                <option>Louisiana</option>
                                <option>Maine</option>
                                <option>Maryland</option>
                                <option>Massachusetts</option>
                                <option>Michigan</option>
                                <option>Minnesota</option>
                                <option>Mississippi</option>
                                <option>Missouri</option>
                                <option>Montana</option>
                                <option>Nebraska</option>
                                <option>Nevada</option>
                                <option>New Hampshire</option>
                                <option>New Jersey</option>
                                <option>New Mexico</option>
                                <option>New York</option>
                                <option>North Carolina</option>
                                <option>North Dakota</option>
                                <option>Ohio</option>
                                <option>Oklahoma</option>
                                <option>Oregon</option>
                                <option>Pennsylvania</option>
                                <option>Rhode Island</option>
                                <option>South Carolina</option>
                                <option>South Dakota</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Utah</option>
                                <option>Vermont</option>
                                <option>Virginia</option>
                                <option>Washington</option>
                                <option>West Virginia</option>
                                <option>Wisconsin</option>
                                <option>Wyoming</option>
                            </select>
                        </p>
                        <p>Please choose your Gender:
                            <br>
                            <input type="radio" name="gender" value="female" checked>Female
                            <br>
                            <input type="radio" name="gender" value="male">Male
                            <br>
                            <input type="radio" name="gender" value="neither"> Neither
                        </p> 
                        <br>
                        <input type="submit">            
                    </form>
                </div>


        <footer>
            <?php include 'Footer.php';?>
        </footer>
       
    </body>
</html>


