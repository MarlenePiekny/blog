<?php require 'layouts/header.tpl.php';?>

    <!--Afficher un article du blog par id-->

    <div>
        <h2><?= $postById['title']?></h2>
        <p><?= $postById['content']?></p>
        <p><?= $postById['pseudo']?></p>
    </div>

    <!--Afficher le ou les commentaires si il.s existe.nt-->
    <?php if ($comments): ?>
        <?php foreach ($comments as $index): ?>
            <div>
                <h3>Commentaires</h3>
                <p><?= $index['content']?></p>
                <p><?= $index['pseudo']?></p>
            <div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Pas de commentaires</p>
    <?php endif ?>


<?php require 'layouts/footer.tpl.php';?>