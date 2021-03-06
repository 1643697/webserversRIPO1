<!DOCTYPE html>

<html>
    <head>
        <title> Confirmation</title>
        <link rel="stylesheet" type="text/css" href="style/mainStyle.css"> <!--external css-->
    </head>

    <body>
        <div class="center">

             Hi <?php echo htmlspecialchars($_POST['firstname']); ?> ! 
            
            <?php 
                //login credentials to db
                $servername = "localhost";
                $username = "php";
                $password = "vm";
                $dbname = "userinfo";

                //store form inputs to variables
                $firstname = htmlspecialchars($_POST['firstname']);
                $lastname = htmlspecialchars($_POST['lastname']);
                $email = htmlspecialchars($_POST['email']);
                $comment = htmlspecialchars($_POST['comment']);
            
            ?>

            <?php
                //connection to db
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                //insert data to db
                $sql = "INSERT INTO users (firstname, lastname, email, comment)
                    VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$comment}')";

                 //confirmation
                 if (mysqli_query($conn, $sql)) {
                    echo "Thank you for submitting your application.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                //close connection 
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>