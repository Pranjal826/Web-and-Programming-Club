
<?php
include_once "conatactform.html";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$servername = "localhost";
$username = "root";
$password = "";
$database = "database_form";
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$enquiry = $_POST["message"];
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

$sql = "INSERT INTO `database_table1` (`Use_nam`, `Email`,`Mobile`,`User_message`) VALUES ('$name', '$email','$mobile','$enquiry')";
$result = mysqli_query($conn, $sql);
if(isset($_POST['submit_form'])){
    if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['mobile'])||empty($_POST['message'])){
 echo "Complete the field";
    }
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
header("Location:http://localhost/WNPC-SOIT/wnpc1.html");
}
?>


