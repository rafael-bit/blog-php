<?php
	$posts = include('data/dados.php');
?>
    <?php include_once("templates/header.php");?>
    <main>
        <?php foreach($posts as $post): ?>
            <li><a href="<?= $post['title'] ?>.php"><?= $post['title'] ?></a></li>
        <?php endforeach; ?>
    </main>
    <?php include_once("templates/footer.php");?>