<?php
include_once('connection.php');
 session_start();
    if(isset($_SESSION['username']))
    {
        header('Location: profile.php');
        exit();
    }

    $content = '
        <form action="login.php" method="POST">
            <input name="username" type="text" placeholder="username">
            <input name="password" type="password" placeholder="password">
            <button>LOGIN</button>
        </form>
        ';

    if(isset($_POST['username'])){
        $sql = "SELECT * FROM login";
        $result = $conn->query($sql);

        foreach($result as $user){
            if($user['user_name'] == $_POST['username'] && $user['password'] == $_POST['password']){
                $_SESSION['username'] = $user['user_name'];
                // echo 'logged in';
                header('Location: profile.php');
                $conn->close();
            } else {
                echo "0 results";
                $content = 'error username or password';
            }
        }
    }
    include_once('masterpage.php');
?>

