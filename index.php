<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">This is an application to register and login users</span>
</nav>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="col text-center">
            <form action="login.php" method="post">
                <input type="submit" value="Login" class="btn btn-primary"></input>
            </form>
            <form action="register.php" method="post">
                <input type="submit" value="Register" class="btn btn-secondary"></input>
            </form>
        </div>
    </div>
</div>
<?php
require 'vendor/autoload.php';
require 'DBConnection.php';
?>
<h3><div class="col text-center">
    <?php
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['birthday']) && isset($_POST['password'])) {
        if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['birthday']) && !empty($_POST['password'])) {
            echo 'You have registered successfully' . '<br>';
            @$queryInsert = "INSERT INTO users(Name, Email, Birthday, Pass) VALUES('" . $_POST['username'] . "','" . $_POST['email'] . "','" . $_POST['birthday'] . "','" . $_POST['password'] . "')";
            $conn->query($queryInsert);
            $conn->close();
        } else {
            Flight::redirect('register.php');
        }
    }
?>
</div></h3>