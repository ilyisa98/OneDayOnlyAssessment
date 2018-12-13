<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OneDayOnly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link type="text/css" rel="stylesheet" href="css/style.css">
 
    <script src="js/main.js"></script>
    
</head>
<body>
    
    <!-- container- outer most div-->
    <div class="container">

<!--    small grey block-->
        <div class="logo">
        
        
        </div>
        
        <!-- h1 title-->
        <div class="title">

       
            <h1>TITLE GOES HERE</h1>

        </div>

        <!-- form section -->
        <div class="myform">

            <!-- form to retrieve data from the user -->
            <form action="insert.php" name="signUp" method="post">

                <!-- h2 subtitle-->
                <h2>SUBTITLE GOES HERE</h2>

                <!-- dummy text -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem ducimus architecto nulla ipsum aliquam accusantium reprehenderit, eveniet molestiae error impedit. Similique totam necessitatibus dolor ea</p>

                <!-- first name -->
                <input type="text" name="firstname" id="first_name" placeholder="First name" required autofocus>

                <!-- last name -->
                <input type="text" name="lastname" id="last_name" placeholder="Last name" required>

                <!-- email address -->
                <input type="email" name="emailaddress" id="email_address" placeholder="Email address" required>

                <!-- onclick events (1)posting of data (2)validating of form input data -->
                <button type="submit" onclick="ajax_request();allLetter(document.signUp.firstname);allLetter(document.signUp.lasttname);"><p>Sign Up</p></button>

                <!-- terms and conditions link -->
                <a href="">Terms and conditions</a>

            </form>

        </div>

        <!-- big grey block -->
        <div class="img">

        </div>s

    </div>

        <!-- validates user input -->
        <script src="js/validate.js"></script>

</body>
</html>