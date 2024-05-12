<?php include_once "./inc/header.php"; ?>
<main class="main-content certificate">
    <?php foreach ($certificates as $certificate) : ?>
        <div class="img-wrapper">
            <img src="./assets/img/<?= $certificate ?>" alt="<?= $certificate ?>">
        </div>
    <?php endforeach ?>
</main>
<?php include_once "./inc/footer.php"; ?>