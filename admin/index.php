<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital@1&family=Pacifico&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap 4 cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/loading.css">
    <!-- custom js -->
</head>

<body>
    <div class="loading d-none">
        <div class="d-flex justify-content-center align-items-center w-100 h-100">
            <i class="fa fa-spinner fa-spin fa-3x text-primary"></i>
        </div>
    </div>
    <div class="form-bg">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <form class="form-horizontal login-form">
                        <div class="heading">Login</div>
                        <div class="form-group">
                            <input class="form-control" name='email' type="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" type="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-default">Sign In</button>
                        <div class="form-footer">
                        <a href="#" class="text-dark d-block mb-2">Forgot Username/Password?</a>
                        <a href="./register.php">Create New Account <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="position:absolute;z-index:100;top:85%;right:0px;overflow:hidden">
        <div style="width:350px;height:55px;" class="notification">
            
        </div>
    </div>



<script src="./js/login.js"></script>


</body>

</html>