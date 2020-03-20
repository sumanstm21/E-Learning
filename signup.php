<?php
include('index.php');

if(isset($_POST['username'])){
    // echo 'posted';
$sql = "INSERT INTO login (`user_name`, `password`) VALUES ('".$_POST['username']."', '".$_POST['password']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Username : ".$_POST['username']." already exits. ";
}

$conn->close();
}
?>

<form method="POST" action="signup.php">
  <div class="form-row">
    <div class="col-3">
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="col-3">
      <input type="text" name="password" class="form-control" placeholder="Password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>