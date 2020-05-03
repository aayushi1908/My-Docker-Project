<?php
     //phpinfo();
     system("php dataphp.php");
     echo "Registratered successfully...\n Redirecting to Home Page in 2 seconds.....";
     header("refresh:2; url= Home.html");