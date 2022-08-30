<!DOCTYPE html>
<html>

<?php
include_once 'header.php'
?>

<head>
<link rel="stylesheet" href="styles/accounts.css">
</head>
<body>
        <!--Navigation bar-->
        <div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a href="Home.php">Home</a>
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
        <br><br>
    <?php
        include_once 'slide show.php'
    ?>    
    <div class="a-row">
        <div class="a-column">
            <div class="account">
                <img src="images/Savings.jpg" alt="Avatar" style="width:100%">
                <div class="acc-container">
                <p><a href="savingsAccounts.php"><button class="button">Savings Accounts</button></a></p>
                </div>
            </div>
        </div>
        <div class="a-column">
            <div class="account">
                <img src="images/Current.jpg" alt="Avatar" style="width:100%">
                <div class="acc-container">
                <p><a href="currentAccounts.php"><button class="button">Current Accounts</button></a></p>
                </div>
            </div>
        </div>
    </div>
</body>       
    <?php
        include_once 'footer.php'
    ?>  
</html>