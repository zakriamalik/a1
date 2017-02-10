<?php require('php/quote.php'); ?>
<!Doctype html>
<html lang="en">
<!--start of html head -->
    <head>
        <title>Assignment 1</title>
            <meta charset="utf-8" />

            <!--reference to css libraries -->
            <link rel="stylesheet" href="css/main.css" />
    </head>

<!--start of html body -->
    <body>

    <!--html page header -->
        <header>
            <h1>Assignment 1</h1>
        </header>

    <!--start of main body -->
        <main>

            <fieldset>
                <legend>About me</legend>
                    <h2>Zakria Malik</h2>
                    <p>I live in Round Rock, Texas. I immigrated to United States about 20 years ago, now a patriotic citizen, and a proud Texan. I am married and have two children. I work for Hewlett Packard Enterprise in the Information Technology organization as a business planner in the strategy and planning team. I am with HPE for about 10 years. Previously I have worked for Dell Inc, Siemens, and Exxon Corp. I have two associates degrees from Austin Community College. I have two under graduate degrees - BS from the University of Punjab in Pakistan and BBA from the University of Texas at Austin. I obtained my MBA degree from the Texas State University at San Marcos. I am looking forward to attain my second graduate degree from the Harvard University in Management Information Systems.</p>
                    <img src="img/IMG_0831.JPG" alt="Business Intelligence and Analytics" width="340" height="250">
                    <h2>My favorite quotes</h2>

                    <!--call of php function stored in quote.php -->
                    <?php
                        echo getRandomQuote();
                    ?>

                    <br/>
            </fieldset>

      </main>

     <!--html footer part -->
    <footer>
            <p>CSCI E-15. dwa15-spring2017</p>
    </footer>

    </body>
</html>
