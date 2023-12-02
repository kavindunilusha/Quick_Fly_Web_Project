<?php

require 'config.php';
include 'header.php'

?>

<link rel="stylesheet" href="../css/Book.css">
<form action="payment.php" method="POST">
    <div class="Book">
    <h3>Enter Your Details</h3>
        <div class="name">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
        </div>
        <div class="Contact">
            <label for="tel">Contact:</label>
            <input type="tel" name="contact" required><br>
        </div>
        <div class="Email">
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
        </div>
        <div class="Adress">
            <label for="name">Address:</label>
            <input type="text" name="address" required><br>
        </div>
        <div class="NIC">
            <label for="name">NIC/Passport Number :</label>
            <input type="text" name="nic" required>
        </div>
        <div class="Paynow">
            <button type="submit" name="paynow">Pay-Now</button>
        </div>
        <div class="Cancel">
            <a href="index.php"><button type="button" name="paynow">Cancel</button></a>
        </div>
    </div>
</form>

<?php
    

include 'footer.php';

?>