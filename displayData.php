<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Display Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    
    <!-- display form data to check if data is being sent to database -->

      <?php 
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

     echo 'Your name is ' . $firstname . ' ' . $lastname .' '. $email;
     
     ?>
</body>
</html>