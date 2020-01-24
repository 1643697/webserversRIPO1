<!DOCTYPE html>
<html>
    <head>
        <title>Dog Facts</title>
        <meta charset="UTF-8">
        <h1> 
            hello
        </h1>

        <link rel="stylesheet" href="Style.css">
    </head>

    <body>
        <h1>Dog Facts</h1>
        
        <img src="Images/TigerClose.png" onmouseover="this.src='Images/TigerOpen.png'" onmouseout="this.src='Images/TigerClose.png'" />

        <h3>Fact 1</h3>
        <p>
                Your dog is as smart as a <strong> 2-year-old toddler.</strong>
                There is a reason your tot and your pup get along so well: <br>they speak the same language. Or at least, they likely understand roughly the same number of words and gestures, 250!
        </p>

        <img id="mjpeg_dest" onclick="toggle_fullscreen(this);" src="/html/cam_pic.php?time=1579881933588&amp;pDelay=16666">
        
        <h3>Fact 2</h3>
        <h4>Most Popular Dog breeds in Order</h3>
            <ol>
                <li> Labrador Retriever</li>
                <li> English Cocker Spaniel</li>
                <li> English Springer Spaniel</li>
                <li> German Shepherd</li>
                <li> Staffordshire Bull Terrier</li>
                <li> Golden Retriever</li>
                <li> West Highland White Terrier</li>
                <li> Poodles</li>
            </ol>

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

        <a href="next.php">Cat facts</a>
        <br>
        <a href="email.php">Email Sign up</a>
        <br>
       <a href="https://www.cesarsway.com/10-facts-you-may-not-know-about-dogs/" target="_blank">link that i used for my dog facts</a>
    </body>
</html>

