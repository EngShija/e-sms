<section class="footer">
        <div class="head">
            <h2>You logged in as
            <?= $data['first_name'] ?>
            <?= $data['middle_name'] ?>
            <?= $data['last_name'] ?>
            <a href="actions-handler/logout-handlerr.php">(logout)</a>
        </h2>
        <h3>Developed and published by Eng. Shija</h3>
        <h3>Vist us and follow us</h3>
        <?php require_once __DIR__. "/socialmedia.php" ?>
        <p>&#169All Rights Reserved</p>
    </div>
</section>
</body>
</html>