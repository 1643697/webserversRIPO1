<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        
        <h1>Email Sign Up for Daily Facts</h1>
        
        <script src="Javascripts/lettersOnly.js"></script>
        
        <form name = "webinfo" action="action.php" method="POST">

            <br>First Name:<br>
            <input name="firstname" id="firstname" placeholder="firstname" onkeyup="lettersOnly(this)">
            
            <br>Last Name:<br>
            <input name="lastname" id="lastname" placeholder="lastname" onkeyup="lettersOnly(this)"> 

            <br>E-mail: <br> 

            <input name="email" input type="email">

            <br>Message:<br> 
            
            <textarea name=”comment” rows=”4″ cols=”20″> </textarea><br><br> 
            
            <input class="button" type="submit" value="Submit"> 

        </form>

        <br>
        <br>

        <a href="next.php">Cat facts</a>
        <br>
        <a href="index.php">Dog facts</a>
        <br>

        <a href="blinkled.php">Blink the PIN 22</a>
        <br>
        
    </body>
</html>

