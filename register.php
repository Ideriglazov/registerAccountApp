
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Registration page</span>
</nav>
<html>
<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <form action="index.php" method="post">
                <input type="submit" value="Home page" class="btn btn-primary"></input>
            </form>
        </div>
    </div>
</div>
<div class="col-sm-8" id="content" style="border-left: #dbe0e3 1px solid;">
    <form action="index.php" name="form_register" id="form_register" method="post" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Enter your details below.</legend>
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Name *</label>
                <div class="col-sm-7">
                    <input type="text" name="username" id="username" class="form-control" maxlength="40" required />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Email *</label>
                <div class="col-sm-7">
                    <input type="text" name="email" id="email" class="form-control" maxlength="20" />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Date of birth *</label>
                <div class="col-sm-7">
                    <input type="date" name="birthday" id="birthday" class="form-control" maxlength="20" />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password *</label>
                <div class="col-sm-7">
                    <input type="password" name="password" id="password" class="form-control" maxlength="20" />
                </div>
            </div>
            <input type="submit" value="Register" class="btn btn-secondary"></input>
    </form>
</body>
</html>
