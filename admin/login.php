<?php
session_start();
include "includes/functions.php";
login();
?>

<head>
    <title>
    </title>
    <link rel="icon" href="../images/logo.png" type="image/icon type">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
body {
        background-image: url('https://img.freepik.com/free-vector/white-background-with-blue-tech-hexagon_1017-19366.jpg?w=996&t=st=1664552315~exp=1664552915~hmac=fae6ad882cea6d8159e8e3102fd8905cf1bbad9f390e9cf3b1d75e3a9a4f65a0%27');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Admin Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                
                <form id="loginform" class="form-horizontal" role="form" method="post" action="login.php">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="adminEmail" value="" placeholder="email">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="adminPassword" placeholder="password">
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <input id="btn-login" class="btn btn-success" type="submit" value="login" name="login" />
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Regular user?
                                <a href="../login.php">
                                    Sign In Here
                                </a>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>

</div>
</div>