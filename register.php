<?php require_once "database/database.php"; ?>
<?php require_once "functions/funcreg.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php include_once "partials/style.php" ?>
</head>
<body>
    <header>
        <?php include_once "partials/header.php" ?>
    </header>
    <section>
        <div class="container p-4">
            <form action="" method="POST" class="form-signup rounded border bg-light">
                <h4 class="fw-light text-center">Register</h4>
                <p class="text-center">Registrate para poder acceder a la pagina</p>
                <!-- Nombre y apellido -->
                <div class="form-group">
                    <div class="d-flex row">
                        <div class="col-sm-6">
                            <input type="text" placeholder="First Name" class="form-control" name="first_name" id="first_name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Last Name" class="form-control" name="last_name" id="last_name">
                        </div>
                    </div>
                </div>
                <!-- Username -->
                <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control" name="username" id="username">
                </div>
                <!-- Email -->
                <div class="form-group">
                    <input type="enail" placeholder="Email" class="form-control" name="email" id="email">
                </div>
                <!-- Pwd y confirmar pwd -->
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" name="pwd" id="pwd">
                </div>
                <div class="form-group">
                    <input type="repassword" placeholder="Confirm password" class="form-control" name="confpwd" id="confpwd">
                </div>
                <!-- Pfp -->
                <div class="">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="pfp" id="pfp">                
                </div>
                <!-- Terminos y privacidad -->
                <div class="">
                    <label for="">
                        <input type="checkbox" name="">
                        I accept the <a href="#">Terms of use</a> & <a href="#">Privacy Policy</a>
                    </label>
                </div>
                <!-- Submit --> 
                <input type="submit" class="btn btn-success btn-block" value="register" name="register">
            </form>
        </div>
    </section>
    <footer>
        <?php include_once "partials/footer.php" ?>
    </footer>
</body>
</html>