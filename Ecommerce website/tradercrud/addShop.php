<?php

include 'connection.php';

//check to see if form has been submitted
if(isset($_POST['submitShop'])){

    //gather data from form
    $shopName=$_POST['shopname'];
    $traderName=$_POST['tradername'];
    $location=$_POST['location'];

    $subject = "Request to add Shop";
    $message = "Shop Name: $shopName\n Trader Name: $traderName\n Address: $location\n : $contact\n Shop : $shop\n  : $productType";
    $sender = "From: noreply@flavoursmart21";
    if(mail('flavoursmart21@gmail.com', $subject, $message, $sender)){
        $info = "Shop Detail";
        $_SESSION['info'] = $info;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:  trader.php');
        exit();
    }

    //relocte back to front page
    ?>
    <script type="text/javascript">
    alert("You will be notified later.");
    window.location = "trader.php";
     </script>
     <?php
}
?>
