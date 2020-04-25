<?php
 include('connection.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>E-Learning</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">E-Learning</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        </ul>
        <span class="navbar-text">
            <ul class="navbar-nav mr-auto">
            <?php if(isset($_SESSION['username'])){ ?>
            <li class="nav-item">
                <a class="nav-link" href="profile.php"><?= 'Hi, '.$_SESSION['username']; ?> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
            </li>
            <?php } ?>
            </ul>
        </span>
    </div>
    </nav>

</body>
</html>