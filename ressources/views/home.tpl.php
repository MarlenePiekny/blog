<?php require 'layouts/header.tpl.php';?>

<!--Afficher les 10 derniers articles du blog-->

<?php if (empty($tenLastPosts)): ?>
    <!--Cas où il n'y a pas de post-->
    <p>Il n'y a pas de post"</p>

<?php else : ?>
    <!-- Cas où il y a des posts, les afficher un par un-->

    <?php $i = 0; ?>
    <?php while ($i < count($tenLastPosts)) : ?>
        <div>
            <h2><?= $tenLastPosts[$i]['title']?></h2>
                <p><?= $tenLastPosts[$i]['content']?></p>
                <p><?= $tenLastPosts[$i]['pseudo']?></p>
        </div>
        <?php $i++ ?>
    <?php endwhile; ?>

<?php endif; ?>

<?php require 'layouts/footer.tpl.php';?>