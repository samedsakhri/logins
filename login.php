<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<nav role="navigation">
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">search</a> 
    </li>
    <li class="nav-item">
        <a class="nav-link " id="sign_in" href="#">Sign in</a>
    </li>
</ul>
</nav>
<br/>


<form>
    <div class="form-group row">
        <label for="firstname" class="col-sm-2 col-form-label">Firstname</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="firstname" value="">
        </div>
    </div>

    <div class="form-group row">
        <label for="lastname" class="col-sm-2 col-form-label">Lastname</label>
        <div class="col-sm-10">
             <input type="text"   class="form-control" id="lastname" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text"   class="form-control" id="email" value="email@example.com">
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
    </div>

</form>


</body>
</html>