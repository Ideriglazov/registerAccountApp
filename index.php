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
<style type = "text/css">
#my_elem {
2
position: absolute;
3
width: 100px;
4
left: 50%;
5
margin-left: -50px;
6
text-align: center;
7
}
</style>
<?php
require 'vendor/autoload.php';
require 'DBConnection.php';
/*
Flight::route('/', function(){
    echo 'hello world!';
});
*/
//Flight::start();
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['birthday']) &&isset($_POST['password'])) {
    echo 'Data has been submitted'.'<br>';
    echo $_POST['username'].'<br>';
    echo $_POST['email'].'<br>';
    echo $_POST['birthday'].'<br>';
    echo $_POST['password'].'<br>';
}

@$queryInsert = "INSERT INTO users(Name, Email, Birthday, Pass) VALUES('".$_POST['username']."','".$_POST['email']."','".$_POST['birthday']."','".$_POST['password']."')";
if ($conn->query($queryInsert) === true) {
    echo "You have registered successfully";
}
$conn->close();
?>