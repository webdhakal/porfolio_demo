<?php include_once "./inc/header.php"; ?>

<!-- contents -->
<main class="banner">
    <div class="profile-card-wrapper">
        <div class="profile-card">
            <div class="card">
                <div class="card-head">
                    <div class="avatar-wrapper">
                        <img class="avatar" src="./assets/img/profile.jpg" alt="Profile Image">
                    </div>
                    <p class="title"><?= $user['fullname'] ?></p>
                    <div class="group"><?= $user['status'] ?></div>
                </div>
                <div class="card-footer socials">
                    <?php foreach ($site['socials'] as $social) : ?>
                        <a href="<?= $social['to'] ?>" target="_blank"><i class=<?= $social['icon'] ?>></i></a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="profile-description">
            <p class="title">Hello</p>
            <div class="home-button">
                <a href="resume.php"><button class="home-resume-button">Resume</button></a>
                <a href="blog.php"><button class="home-blog-button">Blog</button></a>
            </div>
            <div class="sub-title">Here's who I am & what I do</div>
            <div class="description">Hi there! I'm Nabin Basnet, a student at Biratnagar International College, part of the S21 batch pursuing a BSc Hons in International Business Management from the University of Wolverhampton.This blog is a great place for me to share my experiences and insights as a student, and I'm excited to connect with fellow learners and readers.</div>
        </div>
    </div>
</main>
<!-- end contents -->

<?php include_once "./inc/footer.php"; ?>