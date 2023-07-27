<?php
 
// Starting the session, necessary
// for using session variables
session_start();
echo "<h2>PHP is Fun1!</h2>";
  
// Declaring and hoisting the variables
$username = "";
$dob = "";
$email = "";
$mobile = "";
$gender = "";
$branch = "";
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
$conn = mysqli_connect("localhost", "root", "", "Registration_Form");
echo "<h2>PHP is Fun2!</h2>";
// User login
if (isset($_POST['login_user'])) {
    echo "<h2>PHP is Fun3!</h2>";
    // Data sanitization to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Checking for the errors
    if (count($errors) == 0) {
        echo "<h2>PHP is Fun4!</h2>";
        // Password matching         
        $query = "SELECT * FROM college WHERE name ='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
  
        // $results = 1 means that one user with the
        // entered username exists
        if (mysqli_num_rows($results) == 1) {


             
            // // Storing username in session variable
            // $_SESSION['username'] = $username;
            echo "<h2>PHP is Fun5!</h2>";

            // // Welcome message
            // $_SESSION['success'] = "You have logged in!";
            // // Page on which the user is sent
            // // to after logging in
            // header('location: index.php');
            // echo "<h2>PHP is Fun6!</h2>";

        }
        else {
             
            // If the username and password doesn't match
            array_push($errors, "Username or password incorrect");
            echo "<h2>PHP is Fun7!</h2>";
        }
    }
}
?>