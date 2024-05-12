<?php
require './site-data.php';

$user         = $site['user'];
$navItems     = $site['navItems'];
$certificates = $site['certificates'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="header-wrapper sticky-header">
        <header>
            <a href="/">
                <div class="brand">
                    <i class=<?= $user['icon'] ?>></i>
                    <p><?= $user['fullname'] ?></p>
                    <p>/<?= $user['status'] ?></p>
                </div>
            </a>
            <nav>
                <?php foreach ($navItems as $navItem) : ?>
                    <a href="<?= $navItem['to'] ?>"><?= $navItem['title'] ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="mobnav">
                <span class="hamburger"><i class="fa-solid fa-bars"></i></span>
            </div>
        </header>
    </div>