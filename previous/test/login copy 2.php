<?php
$content = '
<form action="login.php" method="POST">
    <input name="username" type="text" placeholder="username">
    <input name="password" type="text" placeholder="password">
    <button>LOGIN</button>
</form>
';
include('masterpage.php');
    if(isset($_SESSION['username']))
    {
        header('Location: profile.php');
        exit();
    }

    if(isset($_POST['username'])){
        $sql = "SELECT * FROM login";
        $result = $conn->query($sql);

        foreach($result as $user){
            if($user['user_name'] == $_POST['username'] && $user['password'] == $_POST['password']){
                $_SESSION['username'] = $user['user_name'];
                echo 'logged in';
                header('Location: login.php');
                $conn->close();
            } else {
                echo "0 results";
            }
        }
    }
?>

