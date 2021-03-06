<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/main.css">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <div class="logo">
        <h1>Game of Thrones</h1>
        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" id="home">
                            <a class="nav-link" href="/">Home </a>
                        </li>
                        <li class="nav-item" id="lore">
                            <a class="nav-link" href="/lore">Histories & Lore</a>
                        </li>
                        <li class="nav-item" id="great-houses">
                            <a class="nav-link" href="/great_houses">Great houses</a>
                        </li>
                        <li class="nav-item dropdown" id="characters">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Сharacters</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/character/stark">Stark</a>
                                <a class="dropdown-item" href="/character/lannister">Lannister</a>
                                <a class="dropdown-item" href="/character/targaryen">Targaryen</a>
                                <a class="dropdown-item" href="/character/other">Other</a>
                            </div>
                        </li>
                        <li class="nav-item" id="about">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item dropdown" id="account">
                            <?php
                            if (isset($_COOKIE['login']) && isset($_COOKIE['token'])) {
                                ?>
                                <a class="nav-link" href="/account" id="navbardrop2">Account</a>
                                <?php
                            } else {
                                ?>
                                <a class="nav-link dropdown-toggle" href="/account" id="navbardrop2"
                                   data-toggle="dropdown">Account</a>
                                <div class="dropdown-menu" id="del">
                                    <a class="dropdown-item" href="/account/signup">Registration</a>
                                    <a class="dropdown-item" href="/account/signin">Authorization</a>
                                </div>
                                <?php
                            }
                            ?>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">

                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>

<main>
    <?php include __DIR__ . '/' . $content_view; ?>
</main>

<footer id="footer" class="footer navbar-fixed-bottom bg-light">
    <div class="navbar-fixed-bottom row-fluid text-center">
        <div class="navbar-inner">
            <div class="container">
                <a href="">social</a>
                <p>© 2020 Watchers on the Wall</p>
            </div>
        </div>
    </div>
</footer>
<script>
    document.getElementById("<?=$activeNavBtn?>").classList.add('active');
</script>
<?php
if (isset($scripts)) foreach ($scripts as $script) {
    print("<script src=\"/assets/js/${script}.js\"></script>\n");
}
?>
</body>
</html>