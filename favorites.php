<?php
//Require functions for actions
require_once "includes/actions.php";

//Based on the existence of the GET parameter, 1 of the 2 functions will be called
if (!isset($_GET['id'])) {
    $data = getDishes();
} else {
    $data = getDishDetails($_GET['id']);
}

//Set the header & output JSON so the client will know what to expect.
/* header("Content-Type: application/json");
echo json_encode($data);
exit;
*/


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Favorites</title>
</head>
<body>
<header>
    <section class="banner">

    </section>

    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <div class="navbar-burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index.php">
                    Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="cars.php">
                        Aanbod
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="cars.php#audi">
                            Audi
                        </a>
                        <a class="navbar-item" href="cars.php#bugatti">
                            Bugatti
                        </a>
                        <a class="navbar-item" href="cars.php#ferrari">
                            Ferrari
                        </a>
                        <a class="navbar-item" href="cars.php#lamborghini">
                            Lamborghini
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-rounded" href="favorites.php">
                            <i class="fa-regular fa-star"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <section class="section is-large">
        <div class="columns">
            <div class="column is-one-third">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="./img/audirs6.jpeg" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-footer-item">Meer</a>
                        <a href="#" class="card-footer-item">Select</a>
                    </div>
                </div>
            </div>
            <div class="column is-one-third">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="./img/audir8.jpeg" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-footer-item">Meer</a>
                        <a href="#" class="card-footer-item">Select</a>
                    </div>
                </div>
            </div>
            <div class="column is-one-third">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="./img/audiq8.jpeg" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-footer-item">Meer</a>
                        <a href="#" class="card-footer-item">Select</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="https://jgthms.com">Ward van Assche</a>
            </p>
        </div>
    </footer>
</body>
</html>