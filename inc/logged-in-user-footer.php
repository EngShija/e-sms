<section class="footer">
        <div class="head">
            <h2>You logged in as
            <?= $data['first_name'] ?>
            <?= $data['middle_name'] ?>
            <?= $data['last_name'] ?>
            <a href="actions-handler/logout-handlerr.php">(logout)</a>
        </h2>
        <?php require_once __DIR__. "/socialmedia.php" ?>
        <p>&#169 2023-2024 EngShija</p>
    </div>
</section>
</body>
</html>