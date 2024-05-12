<?php
include_once "./inc/header.php";

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
    $message = '<div class="alert alert-' . $message['type'] . '">' . $message['content'] . '</div>';
}
?>

<main class="main-content contact">
    <section class="contact-form">
        <?php if (isset($message)) : ?>
            <p class="form-message"><?= $message ?></p>
        <?php endif; ?>
        <h2 class="page-title">Get In Touch</h2>
        <form action="form/contact.php" class="form" method="POST">
            <div class="form-wrap">
                <div class="form-control">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name">
                </div>
                <div class="form-control">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name">
                </div>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-control">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject">
            </div>
            <div class="form-control">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="10" cols="10"></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </section>
</main>
<?php include_once "./inc/footer.php"; ?>