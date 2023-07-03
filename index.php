<?php
	$posts = include('data/dados.php');
    $ultimoPost = end($posts);
?>
    <?php include_once("templates/header.php");?>
    <main>
        <div class="container__home">
            <header>
                <h1>1 Blog</h1>
                <p>O blog sobre as novidades do mundo da tecnologia.</p>
            </header>
            <div class="content">
                <h1>Recente</h1>
                <a href=""><img src="<?=$ultimoPost['img'] ?>" alt="foto do código"></a>
                <p class="final">Autor: <?=$ultimoPost['autor']['nome']?></p>
                <h2><?=$ultimoPost['titulo']?></h2>
                <p><?= $ultimoPost['conteudo']?></p>
            </div>
        </div>
        <article>

        </article>
    </main>
    <?php include_once("templates/footer.php");?>