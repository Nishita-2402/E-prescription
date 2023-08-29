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
<form action="addmedicine.php" method="post">  
  <div class="container">  
  <center>  <h1>Add Medicines </h1> </center>  
  <hr>  
  <label> Name of medicine </label>   
<input type="text" name="name_of_medicine" placeholder= "name_of_medicine" size="45" required /> 
<br>
<label> Quantity </label>   
<input type="text" name="Quantity" placeholder= " Quantity " size="45" required /> 
<br>
<label> Brand/Company Name </label>   
<input type="text" name="brand_name" placeholder= "  brand_name " size="45" required />
<br> 
<label> Manufactuing date </label>   
<br>
<br>
<select id="form_manufacturing_month" name="manufacturing_month">
	<option value="-">month</option>
	<option value="1">January</option>
	<option value="2">Febuary</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
</select>
<select id="form_manufacturing_year" name="manufacturing_year">
	<option value="-">year</option>
    <option value="2021">2024</option>
	<option value="2020">2023</option>
	<option value="2019">2022</option>
    <option value="2021">2021</option>
	<option value="2020">2020</option>
	<option value="2019">2019</option>
</select>  
<br>
<br>
<label> Expiry date </label>   
<br>
<br>
<select id="form_expiry_month" name="expiry_month">
	<option value="-">month</option>
	<option value="1">January</option>
	<option value="2">Febuary</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
</select>
<select id="form_expiry_year" name="expiry_year">
	<option value="-">year</option>
    <option value="2021">2027</option>
	<option value="2020">2026</option>
	<option value="2019">2025</option>
    <option value="2021">2024</option>
	<option value="2020">2023</option>
	<option value="2019">2022</option>
    <option value="2021">2021</option>
	<option value="2020">2020</option>
	<option value="2019">2019</option>
</select>  
<br>
<br>
<button type="submit" name="Add" onclick="myfunction()" class="registerbtn">Add</button>    
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
    $name_of_medicine = $_POST['name_of_medicine'];
    $Quantity = $_POST['Quantity'];
    $brand_name = $_POST['brand_name'];
    $manufacturing_month = $_POST['manufacturing_month'];
    $manufacturing_year= $_POST['manufacturing_year'];
    $expiry_month= $_POST['expiry_month'];
    $expiry_year = $_POST['expiry_year'];

    $sql_query = "INSERT INTO addmedicine(name_of_medicine,Quantity,brand_name,manufacturing_month,manufacturing_year,expiry_month,expiry_year) VALUES ('$name_of_medicine',' $Quantity','$brand_name','$manufacturing_month','$manufacturing_year','$expiry_month','$expiry_year')";
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
