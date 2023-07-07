<?php
	$posts = include('data/dados.php');
?>
    <?php include_once("templates/header.php");?>
    <main>
        <ul>
            <?php foreach ($posts as $post): ?>
                <li>
                    <div class="artigos__cards">
                        <img src="<?= $post['img'] ?>" alt="Foto do arigo">
                        <h3><a href="<?= $post['titulo'] ?>.php"><?= $post['titulo'] ?></a></h3>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

    </main>
    <?php include_once("templates/footer.php");?>