<?php
include "includes/head.php";
?>
<style>
    body {
        background-image: url('https://img.freepik.com/free-vector/white-background-with-blue-tech-hexagon_1017-19366.jpg?w=996&t=st=1664552315~exp=1664552915~hmac=fae6ad882cea6d8159e8e3102fd8905cf1bbad9f390e9cf3b1d75e3a9a4f65a0%27');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<body>

  <?php
  include "includes/header.php";
  ?>

  <div class=" container-fluid">

    <?php
    include "includes/sidebar.php";
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <br>
      <div class="row">
        <div class="card" style="width: 25rem;margin-bottom: 20px ;margin-right: 200px ;">
          <a href="orders.php">
            <img class="card-img-top" src="../images/shopping-cart.svg" alt="Card image cap" style="width: 5rem;margin-top: 20px ;">
          </a>
          <div class="card-body">
            <h5 class="card-title">Orders</h5>
            <p class="card-text">Display and modify the orders details.</p>
            <a href="orders.php" class="btn btn-primary">Go to orders page</a>
          </div>
        </div>
        <div class="card" style="width: 25rem;margin-bottom: 20px ;">
          <a href="products.php">
            <img class="card-img-top" src="../images/package.svg" alt="Card image cap" style="width: 5rem;margin-top: 20px ;">
          </a>
          <div class="card-body">
            <h5 class="card-title">Products</h5>
            <p class="card-text">Display and modify the products details.</p>
            <a href="products.php" class="btn btn-primary">Go to products page</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card" style="width: 25rem;margin-top: 20px ;margin-right: 200px ;">
          <a href="customers.php">
            <img class="card-img-top" src="../images/users.svg" alt="Card image cap" style="width: 5rem;margin-top: 20px ;">
          </a>
          <div class="card-body">
            <h5 class="card-title">Customers</h5>
            <p class="card-text">Display and modify the customers details.</p>
            <a href="customers.php" class="btn btn-primary">Go to customers page</a>
          </div>
        </div>
        <div class="card" style="width: 25rem;margin-top: 20px ;">
          <a href="admin.php">
            <img class="card-img-top" src="../images/user.svg" alt="Card image cap" style="width: 5rem;margin-top: 20px ;">
          </a>
          <div class="card-body">
            <h5 class="card-title">Pharmacists</h5>
            <p class="card-text">Display and modify the Pharmacist details.</p>
            <a href="admin.php" class="btn btn-primary">Go to Pharmacist page</a>
          </div>
        </div>
      </div>
    </main>
  </div>

  <?php
  include "includes/footer.php"
  ?>
</body>

</html>