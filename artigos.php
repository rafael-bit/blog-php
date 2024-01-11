<?php
	$posts = include('data/dados.php');
?>
    <?php include_once("templates/header.php");?>
    <main>
        <ul class="artigos__grid">
            <?php foreach ($posts as $post): ?>
                <li class="artigos__item">
                    <div class="artigos__cards">
                        <img src="<?= $post['img'] ?>" alt="Foto do artigo">
                        <h3><a href="posts.php?id=<?= $post['id'] ?>"><?= $post['titulo'] ?></a></h3>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <?php include_once("templates/footer.php");?>