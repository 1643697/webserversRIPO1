<!DOCTYPE html>
<html>
    <head>
        <title>Cat Facts</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Style.css">
    </head>

    <body>
        <h1>Cat Facts</h1>
        <img src="Images/TigerClose.png" onmouseover="this.src='Images/TigerOpen.png'" onmouseout="this.src='Images/TigerClose.png'" />

        <h3>Fact 1</h3>
        <p>
         A cat has the power to sometimes heal themselves by purring. A domestic cat’s purr has a frequency of between 25 and 150 Hertz, which happens to be the frequency at which muscles and bones best grow and repair themselves. 
        </p>
        
        <h3>Fact 2</h3>
        <p>
            Cats only use their meows to talk to humans, not each other. The only time they meow to communicate with other felines is when they are kittens to signal to their mother.
        </p>

        <button>Switch Background</button>
        <script type="text/javascript">
            var color = ["#222f3e","#f368e0","10ac84"];
            var i = 0;
            document.querySelector("button").addEventListener("click",
            function(){
                i=i<color.length ? ++i : 0;
                document.querySelector("body").style.background = color[i]
            })
        </script>
        <br>
       
        <a href="index.php">Dog facts</a>
        <br>
        <a href="email.php">Email Sign up</a>
        <br>
       <a href="https://coleandmarmalade.com/2018/12/31/25-interesting-facts-about-cats-you-may-not-have-known/" target="_blank">link that i used for my Cat facts</a>
    </body>
</html>