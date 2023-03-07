<?php require_once "database/database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizador</title>
    <?php include_once "partials/style.php" ?>
</head>
<body>
    <!-- Aca viene el header y el nav -->
    <header>
        <?php include_once "partials/header.php" ?>
    </header>
    <div>
        <!-- Aca viene el div de la bienvenida -->
        <section class="p-4 mt-4 container d-flex align-items-center">
            <div class="texto">
                <h1 class="fw-light">Welcome!</h1>
                <h4 class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem vero animi fuga nulla nesciunt earum exercitationem? Iusto dolores obcaecati magnam tempora soluta. Neque amet consectetur tenetur molestias doloribus, beatae ipsum.</h4>
            </div>
            <div class="index-img">
                <img src="images/indeximg.jpg" alt="" class="img-fluid">
            </div>
        </section>
    </div>
        <!-- Aca viene el footer de la pagina-->
    <footer>
        <?php include_once "partials/footer.php" ?>
    </footer>
</body>
</html>