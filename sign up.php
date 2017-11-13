<?php

require 'connect.forum.signup.php';

$first_name = '';
$last_name = '';
$username = '';
$date_of_birth = '';
$email ='';
$phone_number = '';
$password = '';

@$first_name = $_POST['first_name'];
@$last_name = $_POST['last_name'];
@$username = $_POST['username'];
@$date_of_birth = $_POST['date_of_birth'];
@$email = $_POST['email'];
@$phone_number = $_POST['phone_number'];
@$password = $_POST['password'];



if( isset($first_name, $last_name, $username, $email, $password, $phone_number, $date_of_birth)){
    if(!empty($first_name) and !empty($last_name) and !empty($username) and !empty($email) and !empty($phone_number) and !empty($password) and !empty($date_of_birth)){
        
        $query = "INSERT INTO user( first_name, last_name, user_name, date_of_birth, email, phone_number, password) 
        VALUES( '$first_name', '$last_name', '$username', '$date_of_birth', '$email', '$phone_number', '$password')" ;
            
        if($query_run = mysqli_query($con, $query)){
            session_destroy();
            header('Location: signupsuccess.html');
        }else{
            echo mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            echo 'Sorry, something went wrong!';
        }
    }else{
        echo 'please fill out all fields';
    }
}else{
    /*echo 'cannot set1';*/
}
?>
<html lang="en">


<head>
    <title>
        Sign Up
    </title>

    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/firebirds2.gif" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sign%20up.css">
</head>

<body>

    <!--header start-->

    <header>
        <div id="header-inner">
            <a href="index.html" id="logo"></a>
            <nav id="top_nav">
                <a href="#" id="menu-icon"></a>
                <div id="my_nav_bar">
                    <ul>
                        <li><a href="index.php">Return Home</a></li>
                        <li><a href="#" class="current">Sign Up</a></li>
                        <li><a href="loginredirection.php">Sign In</a></li>


                    </ul>
                </div>
            </nav>

        </div>
    </header>

    <!--header end-->

    <section class="form">
        <div class="container">

            <h1 class="text-center baap">Join Us!</h1>

            
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 sent ">
                        <h3>Enter Your Details!</h3>
                        <form method='post'>
                        <input type="text" placeholder="First Name" class="form-control" name="first_name"><br>
                        <input type="text" placeholder="Last Name" class="form-control " name="last_name"><br>
                        <input type="text" placeholder="Username (think of a cool one)" class="form-control" name="username"><br>
                        <input type="date" placeholder="Date Of Birth" class="form-control" name="date_of_birth"><br>
                        <input type="email" placeholder="E-mail Id" class="form-control" name="email"><br>
                        <input type="number" placeholder="Mobile Number" class="form-control" name="phone_number"><br>
                        <input type="password" placeholder="Password" class="form-control" name="password"><br>
                        <input type="password" placeholder="Confirm Password" class="form-control "><br>
                        <button type="submit" class="button btn-primary cntr" >Make me a member!</button><br>
                        </form>
                    </div>

                </div>

            
        </div>
    </section>


    <footer class="second" id="foot">
        <p>&copy; A Blaze Product</p>
        <address class="credential1"> <a href="mailto:mus.qazi999@gmail.com">Mail me</a>  |    <a href="https://resublaze.netlify.com"> Visit Me</a> </address>
    </footer>

</body>



</html>
