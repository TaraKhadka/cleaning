 <?php
session_start();
if (isset($_SESSION['username'])) {

    echo "Welcome " . $_SESSION['username'] . " your email is " . $_SESSION['email'];
}
else{
    echo "Login to continue";
}
?> 
