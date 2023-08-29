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
if(isset($_POST['Register']))
{
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $dob_day = $_POST['dob_day'];
    $dob_month=$_POST['dob_month'];
    $dob_year = $_POST['dob_year'];
    $Maritial_Status = $_POST['Maritial_Status'];
    $addr = $_POST['addr'];
    $insurance = $_POST['insurance'];
    $langs = $_POST['langs'];
    $email = $_POST['email'];
    $Aadhar = $_POST['Aadhar'];

    $sql_query = "INSERT INTO registration (fullname,gender,phone,dob_day,dob_month,dob_year,Maritial_Status,addr,insurance,langs,email,Aadhar) VALUES ('$fullname','$gender','$phone','$dob_day','$dob_month','$dob_year','$Maritial_Status','$addr','$insurance','$langs','$email','$Aadhar')";
    if (mysqli_query($conn, $sql_query))
    {
        echo "New entry details inserted sucessfully";
    }
    else
    {
        echo "Errror: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>