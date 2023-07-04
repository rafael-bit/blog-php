<?php
	$posts = include('data/dados.php');
    $ultimoPost = end($posts);
?>
    <?php include_once("templates/header.php");?>
    <main class="container">
            <header>
                <h1>1 Blog</h1>
                <p>O blog sobre as novidades do mundo da tecnologia.</p>
            </header>
            <div class="home">
                <div class="content">
                    <h1>Recente</h1>
                    <a href=""><img src="<?=$ultimoPost['img'] ?>" alt="foto do código"></a>
                    <p class="final">Autor: <?=$ultimoPost['autor']['nome']?></p>
                    <h2><?=$ultimoPost['titulo']?></h2>
                    <p><?= $ultimoPost['conteudo']?></p>
                </div>
                <article>
                    <h2>Tag</h2>
                    <ul>
                        <?php $tagCounts = array_count_values(array_column($posts, 'tag'));
                            foreach($posts as $post):
                                if($tagCounts[$post['tag']] === 1): ?>
                                    <li><a href="<?= $post['tag'] ?>.php"><?= $post['tag'] ?></a></li>
                                <?php endif;
                            endforeach;
                        ?>
                    </ul>
                    <h2>Categorias</h2>
                    <ul>
                        <?php $catCounts = array_count_values(array_column($posts, 'categoria'));
                            foreach($posts as $post):
                                if($catCounts[$post['categoria']] === 1): ?>
                                    <li><a href="<?= $post['categoria'] ?>.php"><?= $post['categoria'] ?></a></li>
                                <?php endif;
                            endforeach;
                        ?>
                    </ul>
                </article>
            </div>
    </main>
    <?php include_once("templates/footer.php");?>