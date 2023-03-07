<?php require_once "database/database.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include_once "partials/style.php" ?>
</head>
<body>
    <header>
        <?php include_once "partials/header.php" ?>
    </header>
    <section>
        <div class="container p-4">
            <form action="" class="form-signup rounded border bg-light">
                <h4 class="fw-light text-center">Login</h4>
                <p class="text-center">Logueate para poder acceder a la pagina</p>
                <!-- Email -->
                <div class="form-group">
                    <input type="text" placeholder="Email or username" class="form-control">
                </div>
                <!-- Pwd y confirmar pwd -->
                <div class="form-group">
                    <input type="text" placeholder="Password" class="form-control">
                </div>
                <input type="submit" class="btn btn-success btn-block" value="Login">
            </form>
        </div>
    </section>
    <footer>
        <?php include_once "partials/footer.php" ?>
    </footer>
</body>
</html>