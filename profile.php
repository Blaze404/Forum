<?php
    
/*
    include 'connect.forum.php';   
*/
    $mysql_server = 'localhost';
    $mysql_user = 'root';
    $mysql_password = '';
    $mysql_database = 'forum';

    $con = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_database);
    
    if(!$con){
    die('Error');
    }

    $username = '';
    $password = '';

    @$username = $_POST['username'];
    @$password = $_POST['password'];

   /* @$con = getcon();*/
    echo '1';
    if(isset($username, $password)){
        echo '2';
        if( !empty($username) and !empty($password)){
            $query = "SELECT user_id FROM user WHERE user_name = '$username' and password = '$password'";
            echo '3';
            if($query_run = mysqli_query($con, $query)){
                $query_num_rows = mysqli_num_rows($query_run);
                echo '4';
                if($query_num_rows === 0){
                    echo 'invalid credentials';
                } else if( $query_num_rows == 1){
                    $user_info = mysqli_fetch_assoc($query_run);
                    $user_id = $user_info['user_id'];
                    echo $user_id;
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_id'] = $user_id;
                    echo $_SESSION['user_id'];
                    header('Location: loginredirection.php');
                }
            }else{ echo 'couldnt login';}
        }else { echo 'put everything';}
    }echo 'nothing';

?>

<html lang="en">


<head>
    <title>
        Login
    </title>

    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/firebirds2.gif" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="profile.css">
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
                        <li><a href="sign up.php">Sign Up</a></li>
                        <li><a href="#wander" class="current">Sign In</a></li>


                    </ul>
                </div>
            </nav>

        </div>
    </header>

    <!--header end-->

    <section class="form">


        <h1 class="text-center baap">Your Profile</h1>
        <form method="post">

        <section class="inner-wrapper">
            <div class="row text-center logins">
                <div class=" dun_dun">
                    <h2 class="txt">Login Details</h2>
                    <input type="text" placeholder="username" class="form-control inpt" name="username"><br>
                    <input type="email" placeholder="email" class="form-control inpt"><br>
                    <input type="password" placeholder="Password" class="form-control inpt" name="password"><br>
                    <button type="submit" class="button btn-primary inpt butt1">Login</button><br>

                </div>


            </div>
        </section>
        </form>
        <section class="inner-wrapper-2">
            <div class="guest">
                <aside id="guest" class="guest">
                    <h2>Login As Guest</h2><br>
                    <div class="btn-div">
                        <button class="button btn-primary inpu">Login as guest!</button>
                    </div>
                    <p>Terms of Loging in as guest:<br> -> You cant comment on stuff<br> -> You cant like stuff<br> -> You can however bookmark stuff<br>
                    </p>

                </aside>
            </div>
        </section>

    </section>
    <!--<section class="gap11">
         <span style="display: block; height: 10px"></span>
        </section>-->

    <footer class="second" id="foot">
        <p>&copy; A Blaze Product</p>
        <address class="credential1"> <a href="mailto:mus.qazi999@gmail.com">Mail me</a>  |    <a href="https://resublaze.netlify.com/"> Visit Me</a> </address>
    </footer>

</body>

</html>
