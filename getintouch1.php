<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "database_form";
    $name = $_POST["Fullname"];
    $email = $_POST["emailid"];
    $mobile = $_POST["Phone"];
   $branch=$_POST["branch"];
   $programme=$_POST["programme"];
   $gender=$_POST["gender"];
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    
    $sql = "INSERT INTO `database_table2` (`Name`, `Email`,`Phone`,`Programme`,`Branch`,`Gender`) VALUES ('$name', '$email','$mobile','$programme','$branch','$gender')";
    $result = mysqli_query($conn, $sql);
    if(isset($_POST['register'])){
        if(empty($_POST['Fullname'])||empty($_POST['emailid'])||empty($_POST['Phone'])||empty($_POST['programme'])){
     echo "Complete the field";
        }
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
    header("Location:http://localhost/WNPC-SOIT/getintouch1.php");
    }














?>