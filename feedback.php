<?php
$server_name= "localhost";
$username= "root";
$password= "";
$database_name= "miniproject";
$conn= mysqli_connect($server_name, $username, $password, $database_name);
if(!$conn)
{
die("Connection Failed:". mysqli_connect_error());
} 
if(isset($_POST['Submit']))
{
    $names = $_POST['names'];
    $email= $_POST['email'];
    $messages= $_POST['messages'];

    $sql_query = "INSERT INTO index1(names,email,messages) VALUES ('$names','$email','$messages')";
    if (mysqli_query($conn, $sql_query))
    {
        echo "Your feedback is noted Successfull";
        echo "Thanks for your feedback!!!!";
    }
    else
    {
        echo "Errror: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}