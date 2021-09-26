<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Your account</span>
</nav>
<html>
<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="col-sm-8" id="content" style="border-left: #dbe0e3 1px solid;">
    <form action="login.php" method="post">
        <input type="submit" value="Log out" class="btn btn-primary"></input>
    </form>

</body>
</html>
<?php
require 'vendor/autoload.php';
require 'DBConnection.php';
if (isset($_POST['newName']) && isset($_POST['newEmail']) && isset($_POST['newBirthday']) && isset($_POST['newPassword'])) {
    session_start();
    $oldData = $_SESSION["a"];
    $queryUpdate = "UPDATE users SET Name = '".$_POST['newName']."', Email = '".$_POST['newEmail']."', Birthday = '".$_POST['newBirthday']."', Pass = '".$_POST['newPassword']."' WHERE Email = '".$oldData['Email']."' AND Pass = '".$oldData['Pass']."'";
    $query_run = mysqli_query($conn,$queryUpdate);
    Flight::redirect('myAccount.php');
    echo 'Name: '.$_POST['newName'].'<br>';
    echo 'Email: '.$_POST['newEmail'].'<br>';
    echo 'Birthday: '.$_POST['newBirthday'];
}
if (isset($_POST['email']) && isset($_POST['password'])) {
    $querySelect = "SELECT Email, Pass FROM users WHERE Email = '".$_POST['email']."' AND Pass = '".$_POST['password']."'";
    if($queryRun = mysqli_query($conn,$querySelect))
    {
        if(mysqli_num_rows($queryRun)==NULL)
        {
            //Flight::redirect('login.php');
        }
        else
        {
            session_start();
            $oldData = [];
            $oldEmail = $_POST['email'];
            $oldPassword = $_POST['password'];
            $queryDisplay = "SELECT * FROM users WHERE Email = '".$_POST['email']."' AND Pass = '".$_POST['password']."'";
            $query_run = mysqli_query($conn,$queryDisplay);
            if(mysqli_num_rows($query_run))
            {
                while ($query_row = mysqli_fetch_assoc($query_run))
                {
                    foreach ($query_row as $key=>$item) {
                        $oldData[$key] = $item;
                        if ($key == 'Pass') {
                            break;
                        }
                        echo $key.': '.$item.'<br>';
                    }
                }
            }
            $_SESSION["a"] = $oldData;
        }
    }
}
if (empty($_POST['email']) || empty($_POST['password'])) {
    Flight::redirect('login.php');
}

?>
<form action="myAccount.php" name="form_login" id="form_login" method="post" class="form-horizontal">
    <fieldset>
        <legend class="text-center">Update your accout details.</legend>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-7">
                <input type="text" name="newName" id="name" class="form-control" maxlength="20" />
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-7">
                <input type="text" name="newEmail" id="email" class="form-control" maxlength="20" />
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Date of birth</label>
            <div class="col-sm-7">
                <input type="text" name="newBirthday" id="birthday" class="form-control" maxlength="20" />
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-7">
                <input type="password" name="newPassword" id="password" class="form-control" maxlength="20" />
            </div>
        </div>
        <input type="submit" value="Update account info" class="btn btn-secondary"></input>
</form>
