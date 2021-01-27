<?php debug($tenLastPosts); ?>

//Afficher les 10 derniers articles du blog
<?php if (empty($tenLastPosts)): ?>
    //Cas où il n'y a pas de post
    <p>Il n'y a pas de post"</p>

<?php else : ?>
    //Cas où il y a des posts, les afficher un par un
    $i =0;
    while ($i < count($tenLastPosts)){
    var_dump($tenLastPosts[$i]);
    echo'\n';
    $i = $i +1;
    }

    <table>
        <tr>
            <td><?= $tenLastPosts[0]['title']?></td>
            <td></td>
            <td></td>
        </tr>

    </table>


<?php endif; ?>
require 'ressources/views/home.tpl.php';






