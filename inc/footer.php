<footer class="footer">
    <div>&copy; <span><?= date('Y') ?></span> <span>by <?= $user['fullname'] ?></span></div>
    <div class="footer-info">
        <div class="call-info">
            <span>Call</span>
            <a href="tel:<?= $user['contact'] ?>"><?= $user['contact'] ?></a>
        </div>
        <div class="email-info">
            <span>Email</span>
            <a href="mailto:<?= $user['email'] ?>"><?= $user['email'] ?></a>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function() {
        $('.mobnav').click(function() {
            $(this).prev('nav').toggleClass('active');
            var iconElement = $(this).find('.hamburger i');
            if (iconElement.hasClass('fa-bars')) {
                iconElement.removeClass('fa-bars').addClass('fa-xmark');
            } else {
                iconElement.removeClass('fa-xmark').addClass('fa-bars');
            }
        });

        var currentUrl = window.location.href;

        console.log(currentUrl);
        $('nav a').each(function() {
            var linkUrl = $(this).attr('href');
            console.log(linkUrl);
            if (currentUrl.indexOf(linkUrl) !== -1) {
                $(this).closest('a').addClass('current');
            }
        });
    });
</script>
</body>

</html>