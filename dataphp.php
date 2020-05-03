<?php
    $firstname = $_POST['firstname'];
    $lastname =$__POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database connection
    $conn = mysqli_connect('dbos','root','redhat','project') or die(mysqli_error($conn));
    $sqlquery = "INSERT INTO registration ( firstname, lastname, email, password ) VALUES ('$firstname', '$lastname' ,'$email', '$password')";
    $user_submit = mysqli_query($conn, $sqlquery) or die(mysqli_error($conn));
    echo "Registration Sucessfully...Redirecting to Home Page in 2 seconds....";
    header("refresh:2; url=Home.html");
?>
