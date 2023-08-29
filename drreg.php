<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color:black;  
}  
.container {  
    padding: 50px;  
    background-image: url('https://img.freepik.com/free-vector/white-background-with-blue-tech-hexagon_1017-19366.jpg?w=996&t=st=1664552315~exp=1664552915~hmac=fae6ad882cea6d8159e8e3102fd8905cf1bbad9f390e9cf3b1d75e3a9a4f65a0%27');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form action="drreg.php" method="post">  
  <div class="container">  
  <center>  <h1>Add Doctor </h1> </center>  
  <hr>  
  <label> Name of Doctor </label>   
<input type="text" name="name_of_doctor" placeholder= "name_of_doctor" size="45" required /> 
<br>
<label> Hospital Name </label>   
<input type="text" name=" hospital" placeholder= " hospital " size="45" required /> 
<br>
<label> Qualification </label>   
<input type="text" name=" Qualification" placeholder= "  Qualification " size="45" required />
<br>
<label> Phone Number </label>   
<input type="text" name=" phone_no" placeholder= "  phone_no " size="45" required />
<br> 
<label> E-mail </label>   
<input type="text" name=" email" placeholder= " email" size="45" required />
<br>
<label> Speciality </label>   
<input type="text" name=" speciality" placeholder= " speciality " size="45" required />
<br>
<label> Years of Experience </label>   
<input type="text" name=" experience" placeholder= "  experience" size="45" required />
<br>
<button type="submit" name="Add"  onclick="myfunction()" class="registerbtn">Add</button>    
</form>  
<script type="text/javascript">
  function myfunction()
  {
    alert(" Succesfull");
    window.location.replace("doctor.html");
    return false;
  }
</script>
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
if(isset($_POST['Add']))
{
    $name_of_doctor = $_POST['name_of_doctor'];
    $hospital = $_POST['hospital'];
    $Qualification = $_POST['Qualification'];
    $phone_no = $_POST['phone_no'];
    $speciality=$_POST['speciality'];
    $email = $_POST['email'];
    $experience = $_POST['experience'];

    $sql_query = "INSERT INTO drregistration (name_of_doctor,hospital,Qualification,phone_no,email,speciality,experience) VALUES ('$name_of_doctor','$hospital','$Qualification','$phone_no','$email','$speciality','$experience')";
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
</body>  
</html>  
