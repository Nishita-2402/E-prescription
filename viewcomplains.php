<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Complain</title>
</head>
<style>
    body {
        background-image: url('https://img.freepik.com/free-vector/white-background-with-blue-tech-hexagon_1017-19366.jpg?w=996&t=st=1664552315~exp=1664552915~hmac=fae6ad882cea6d8159e8e3102fd8905cf1bbad9f390e9cf3b1d75e3a9a4f65a0%27');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    <style>
 {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
h1 {
    width:500px;
    margin: 0 auto;
    background: gray;
    text-align: center;
}
</style>
</style>
<body>


<body>
     <h1>Complains</h1>
</body>
  <div style="display:flex; flex-direction: row; justify-content: center; align-items: center" class="row">  

<table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">Name</th>
        <th scope="col">Phone-no</th>
        <th scope="col">Email</th>
        <th scope="col">Post</th>
        <th scope="col">Problem</th>
    <tbody>
      <?php 
        $con=mysqli_connect("localhost","root","","miniproject");
        global $con;
        $query = "select * from problem";
        $result = mysqli_query($con,$query);
        while ($row = mysqli_fetch_array($result)){
          $name_user = $row['name_user'];
          $phone = $row['phone'];
          $email = $row['email'];
          $post = $row['post'];
          $problem = $row['problem'];
        
          
          echo "<tr>
            <td>$name_user</td>
            <td>$phone</td>
            <td>$email</td>
            <td>$post</td>
            <td>$problem</td>
            
          </tr>";
        }

      ?>
    </tbody>
  </table>
</body>
</html>