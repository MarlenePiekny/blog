<?php require 'layouts/header.tpl.php';?>

    <!--Afficher un article du blog par id-->

    <div>
        <h2><?= $postById['title']?></h2>
        <p><?= $postById['content']?></p>
        <p><?= $postById['pseudo']?></p>
    </div>

    debug($comments);

<?php require 'layouts/footer.tpl.php';?>