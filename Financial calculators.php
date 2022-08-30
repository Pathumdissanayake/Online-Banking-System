<!DOCTYPE html>
<html>
<header>
      <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Financial Calculators</title>
      <link rel="stylesheet" type="text/css" href="styles/financialCalculators.css">
</header>

<body>
    <?php
      include_once 'header.php'
      ?>
    <!--Navigation bar-->
    <div class="mainnav">
                <a class="openbtn" onclick="openNav()">&#9776; Services</a>
                <a  href="Home.php">Home</a>
                <?php
                if(isset($_SESSION["useruid"])) {
                    echo "<a href='Profile.php'>Profile</a>";
                    echo "<a href='payment.php'>E-banking</a>";
                }
                else {
                    echo "<a href='Register intro.php'>Register</a>"; 
                }
                ?>
                <a href="contactus.php">Contact us</a>
                <a  href="about us.php">About us</a>
                <a  href="joinwithus.php">Join with us</a>
      </div>
      <br>
      <!--Horizontal line-->
      <hr style="width:100%">          
      <br>
        
        <?php
        include_once 'slide show.php'
        ?>            
    
        <!--Horizontal line-->
        <hr style="width:100%">
        <br><br>
        <h1>Financial calculators</h1>
        <br>
        
        <div class="calrow" width="100%">
            <div class="calcolumn">
                <div class="claimage">
                  <img src="images/loan cal image.png" alt="Loan calculator" style="width:100%">
                  <div class="calcontainer">
                    <p><a href="Loan calculator.html" target= new><button class="calbutton">Loan calculator</button></p></a>
                  </div>
                </div>
            </div>
        
            <div class="calcolumn">
              <div class="claimage">
                <img src="images/currency converter icon.png" alt="Currency convertor" style="width:100%">
                <div class="calcontainer">
                  <p><a href="Currency converter.php" target= new><button class="calbutton">Currency converter</button></a></p>
                </div>
              </div>
            </div>

            <div class="calcolumn">
              <div class="claimage">
                <img src="images/simple cal image.png" alt="Simple calculator" style="width:100%">
                <div class="calcontainer">
                  <p><a href="SimpleCalculator.html" target= new><button class="calbutton">Normal calculator</button></a></p>
                </div>
              </div>
            </div>
        </div>
        <br><br>  
          
    <?php
    include_once 'footer.php'
    ?>

    <script src="js files/Home.js"></script>
    </div>
</body>

</html>