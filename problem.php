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
    background-image: url('https://img.freepik.com/free-vector/white-background-with-blue-tech-hexagon_1017-19366.jpg?w=996&t=st=1664552315~exp=1664552915~hmac=fae6ad882cea6d8159e8e3102fd8905cf1bbad9f390e9cf3b1d75e3a9a4f65a0');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;;  
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
<form action="problem.php" method="post">  
  <div class="container">  
  <center>  <h1>Problem/Inconvinence </h1> </center>  
  <hr>  
  <label><b> Name  ( First Name - Middle Name - Last Name)</b> </label>   
<input type="text" name="name_user" placeholder= "Firstname-middlename-lastname" size="45" required /> 
<br>
<br>
<b>Phone : </b> 
</label>   
<input type="text" name="phone" placeholder="phone no." size="10"/ required>   
<br>
<br>
<label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required> 
 <br>
 <br>
 <label><b> Post</b> </label> 
 <br>
<select id="form_post" name="post">
	<option value="-">-Select-</option>
	<option value="1">Pharmacist</option>
	<option value="2">Doctor</option>
</select>  
<br>
<br>
 <b>Problem/Inconvinence:</b>
<textarea cols="80" rows="5" name="problem" placeholder="Current Address" value="address" required>  
</textarea> 
<br>
<br> 
<button type="submit" name="Post"  onclick= "myfunction()" class="registerbtn">Post</button>    
</form>  
<script type="text/javascript">
  function myfunction()
  {
    alert("Succesfull");
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
if(isset($_POST['Post']))
{
    $name_user = $_POST['name_user'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $post = $_POST['post'];
    $problem = $_POST['problem'];

    $sql_query = "INSERT INTO problem (name_user,phone,email,post,problem) VALUES ('$name_user','$phone','$email','$post','$problem')";
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