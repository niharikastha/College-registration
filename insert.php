<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "Registration_Form");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['First_Name'];        
        $dob = $_REQUEST['dob'];
        $regdno = $_REQUEST['regdno'];
        $email_id = $_REQUEST['Email_Id'];
        $mobile_number =  $_REQUEST['Mobile_Number'];
        $password = $_REQUEST['password'];
        $gender = $_REQUEST['Gender'];
        $branch =  $_REQUEST['branch'];
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO student  VALUES ('$first_name',
            '$dob','$regdno','$email_id','$mobile_number','$password','$gender','$branch')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $dob\n $regdno\n  "
                . "$email_id\n $mobile_number\n $gender \n $branch");
        } else{
            echo "ERROR $sql. "
            . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>