<!DOCTYPE html>
<!--
Created on : Apr 16, 2015, 12:21:37 PM
Author     : Lacey Taylor
-->
<html>

    <head>
        <title>Validated Contact Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type ="text/css" href="baseCSS.css" media="screen" />
        <script type="text/javascript">
            
            //Function to check if names are good before searching
            function checkOnSearch(PeopleForm)
            {
                //Sets variables, and sets name format
                var fname = document.forms["PeopleForm"]["first_name"].value;
                var lname = document.forms["PeopleForm"]["last_name"].value;
                var nameFormat = /^[a-zA-Z]+$/;
                
                    //Checks if the first name has info
                    //Sets the borders of incorrect elements to red to differentiate
                    if (fname.length === 0)
                    {
                        document.getElementById('fn').style.borderColor = "red";
                        alert("Please enter a valid first name for your contact");
                        return false;
                    }

                    //Checks if the last name has info
                    //Sets the borders of incorrect elements to red to differentiate
                    if (lname.length === 0)
                    {
                        document.getElementById('ln').style.borderColor = "red";
                        alert("Please enter a valid last name for your contact");
                        return false;
                    }

                    //Checks to make sure the name is proper format
                    if (!fname.match(nameFormat) || !lname.match(nameFormat))
                    {
                        alert("Names can only contain letters on this form.");
                                return false;
                    }
                return true;
            }

            //Function that is run by the update and the create buttons to verify everything is filled out
            function checkOnModify(PeopleForm)
            {
                //Sets variables, and sets name format, and phone format
                var fname = document.forms["PeopleForm"]["first_name"].value;
                var lname = document.forms["PeopleForm"]["last_name"].value;
                var phone = document.forms["PeopleForm"]["phone"].value;
                var address = document.forms["PeopleForm"]["street_address"].value;
                var city = document.forms["PeopleForm"]["city"].value;
                var state = document.forms["PeopleForm"]["state"].value;
                var zip = document.forms["PeopleForm"]["zcode"].value;
                var month = document.forms["PeopleForm"]["month"].value;
                var day = document.forms["PeopleForm"]["day"].value;
                var year = document.forms["PeopleForm"]["year"].value;
                var uname = document.forms["PeopleForm"]["uname"].value;
                var pword = document.forms["PeopleForm"]["pword"].value;
                var gender = document.forms["PeopleForm"]["gender"].value;
                var rship = document.forms["PeopleForm"]["rship"].value;
                var nameFormat = /^[a-zA-Z]+$/;
                var phoneFormat = /^[0-9]+$/;
                
                    //Checks to see if anyting is not filled out, and pops an error message.
                    if (fname.length === 0 || lname.length === 0 || phone.length === 0 || address.length === 0 || city.length === 0 || state.length === 0 ||
                            zip.length === 0 || month.length === 0 || day.length === 0 || year.length === 0 || uname.length === 0 || pword.length === 0 ||
                            rship.length === 0)
                    {
                        //Sets the border color to red if the field is not filled out, then sets back to green if it is
                        if (fname.length === 0)
                        {
                            document.getElementById('fn').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('fn').style.borderColor = "green";    
                        }   

                        if (lname.length === 0)
                        {
                            document.getElementById('ln').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('ln').style.borderColor = "green";    
                        }   

                        if (phone.length === 0)
                        {
                            document.getElementById('ph').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('ph').style.borderColor = "green";    
                        }   

                        if (address.length === 0)
                        {
                            document.getElementById('sa').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('sa').style.borderColor = "green";    
                        }   

                        if (city.length === 0)
                        {
                            document.getElementById('ct').style.borderColor = "red";
                        }
                         else 
                        {
                            document.getElementById('ct').style.borderColor = "green";    
                        }   

                        if (state.length === 0)
                        {
                            document.getElementById('st').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('st').style.borderColor = "green";    
                        }   

                        if (zip.length === 0)
                        {
                            document.getElementById('zc').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('zc').style.borderColor = "green";    
                        } 

                        if (month.length === 0)
                        {
                            document.getElementById('mn').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('mn').style.borderColor = "green";    
                        } 

                        if (day.length === 0)
                        {
                            document.getElementById('dy').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('dy').style.borderColor = "green";    
                        } 

                        if (year.length === 0)
                        {
                            document.getElementById('yr').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('yr').style.borderColor = "green";    
                        } 

                        if (uname.length === 0)
                        {
                            document.getElementById('un').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('un').style.borderColor = "green";    
                        } 

                        if (pword.length === 0)
                        {
                            document.getElementById('pw').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('pw').style.borderColor = "green";    
                        } 

                        if (rship.length === 0)
                        {
                            document.getElementById('rs').style.borderColor = "red";
                        }
                        else 
                        {
                            document.getElementById('rs').style.borderColor = "green";    
                        } 

                    //Alerts that something has not been completed, and kicks back
                        alert("You must fill out the form completly");
                                return false;
                    }

                //checks that the first and last name are letters only
                if (!fname.match(nameFormat) || !lname.match(nameFormat))
                {
                alert("Names can only contain letters on this form.");
                        return false;
                }

                //checks that the phone number is in the correct format
                if (!phone.match(phoneFormat))
                {
                alert("Please remove any special characters from your phone number");
                        return false;
                }

                return true;
            }
        </script>
    </head>
    <body>

        <header>
            <?php include 'Header.php'; ?>
        </header>
        <nav>
            <?php include 'Menu.php'; ?>
        </nav>

        <div id="centerContent">
            <form method="post" action="JSResults.php" name="PeopleForm">
                <h2> Validated Creation/Search Form</h2>
                <p></p>

                <p>First Name: <input type="text" name="first_name" id="fn"></p>
                <p>Last Name: <input type="text" name="last_name" id="ln"></p>
                <p>Phone Number: <input type="text" name="phone" id="ph"></p>
                <p>Street Address: <input type="text" name="street_address" id="sa"></p>
                <p>City: <input type="text" name="city" id="ct"></p>
                <p>Choose your State:
                    <select name ="state" id="st">
                        <option value="">State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </p>
                <p>Zip Code: <input type="text" name="zcode" id="zc"></p>
                <p>Birthday:
                    <select name ="month" id="mn">
                        <option value="">Month</option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select name ="day" id="dy">
                        <option value="">Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                    <select name="year" id="yr">
                        <option value="">Year<option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                    </select>
                </p>
                <p>Username: <input type="text" name="uname" id="un"></p>
                <p>Password:  <input type="text" name="pword" id="pw"></p>
                <p>Gender:
                    <br>
                    <input type="radio" name="gender" value="female" >Female
                    <br>
                    <input type="radio" name="gender" value="male">Male
                    <br>
                    <input type="radio" name="gender" value="other" checked>Other
                </p>
                <p>Relationship: <input type="text" name="rship" id="rs"></p>

                <br>
                <input id="button_create" type="submit" name="requestType" value="create" onclick="return checkOnModify()">
                <input id="button_update" type="submit" name="requestType" value="update" onclick="return checkOnModify()">
                <input id="button_search" type="submit" name="requestType" value="search" onclick="return checkOnSearch()">
            </form>
        </div>


        <footer>
            <?php include 'Footer.php'; ?>
        </footer>

    </body>
</html>


