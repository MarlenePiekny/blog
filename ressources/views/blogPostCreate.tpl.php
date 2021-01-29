<?php require 'layouts/header.tpl.php';?>

    <h2>Je crée mon article</h2>

<!--Formulaire de création d'article-->
    <form action="" method="post">

        <!--Titre article-->

        <div>
            <label for="title">Le titre de mon article</label>
            <input type=”text” id="title" name="Posts.title">
            <?php $postTitle = filter_input(INPUT_POST, 'Posts.title')?>
        </div>

        <div>
            <label for="content">Le contenu de mon article</label>
            <textarea type=”text” id="content" name="Posts.content"></textarea>
            <?php $postContent = filter_input(INPUT_POST, 'Posts.content')?>
        </div>

        <div>
            <label for="publicationStartDate">Date de début de publication</label>
            <input type="datetime-local" id="publicationStartDate" name="publicationStartDate"  min="2021-01-01 00:00:00" max="2025-01-01 00:00:00">
            <?php $publicationStartDate = filter_input(INPUT_POST, 'publicationStartDate')?>
        </div>

        <div>
            <label for="publicationEndDate">Date de fin de publication</label>
            <input type="datetime-local" id="publicationEndDate " name="publicationEndDate"  min="2021-01-01 00:00:00" max="2025-01-01 00:00:00">
            <?php $publicationEndDate = filter_input(INPUT_POST, 'publicationEndDate')?>
        </div>

        <div>
            <label for="postImportance">Importance de l'article </label>
            <select name="postImportance">
                <option value="1">#1 importance</option>
                <option value="2">#2 importance</option>
                <option value="3">#3 importance</option>
                <option value="4">#4 importance</option>
                <option value="5">#5 importance</option>
            </select>
            <?php $postImportance = filter_input(INPUT_POST, 'postImportance')?>
        </div>

        <div>
            <?php debug($listAuthor) ?>

            <label for="pseudo">Votre pseudo</label>
            <select name="authorsPseudo">
            <?php foreach ($listAuthor as $index): ?>
                <option value="<?= $index['id']?>"><?= $index['pseudo']?></option>
            <?php endforeach ?>
            </select>
            <?php $pseudo = filter_input(INPUT_POST, 'pseudo')?>
        </div>

        <div class="form-button">
            <input type="submit" name="submit" value="Je publie mon article">
        </div>

    </form>



<?php require 'layouts/footer.tpl.php';?>