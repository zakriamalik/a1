<!Doctype html>
<html lang="en">
<!--start of html head --> 
    <head>
    <!--head php part --> 
        <?php include("php/phphead.php"); ?>
    </head>

<!--start of html body --> 
    <body>

    <!--header php part --> 
        <header>
            <?php include("php/header.php"); ?>
        </header>

    <!--start of main body -->        
        <main>            

            <fieldset>
                <legend>About me</legend>
                    <h2>Zakria Malik</h2>
                    <p>I live in Round Rock, Texas. I immigrated to United States about 20 years ago, now a patriotic US Citizen, and a proud Texan. I am married and have two kids. I work for Hewlett Packard Enterprise in the Information Technology organization as a business planner in the strategy and planning team. I am with HPE for about 10 years. Previously I have worked for Dell Inc, Siemens, and Exxon Corp. I have two associates from Austin Community College. I have two under graduate degrees - BSC from University of Punjab in Pakistan and BBA from University of Texas at Austin. I obtained my MBA degree from the Texas State University at San Marcos. I am looking forward to get my second graduate degree from Harvard University in Management Information Systems.</p>
                    <img src="img/IMG_0831.JPG" alt="Business Intelligence and Analytics" width="640" height="450" >
                    <br/><br/>
                    <h2>My favorite quotes</h2>
                    
                    <!--call of php function stored in head -->        
                    <?php            
                        echo getRandomQuote();        
                    ?>

                    <br/>
            </fieldset>  
            <br/><br/>
      </main>

     <!--footer php part --> 
        <footer>
            <?php include("php/footer.php"); ?>
        </footer>
      
    </body>
</html>
