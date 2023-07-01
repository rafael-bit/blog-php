<?php
	$posts = include('data/dados.php');
?>
    <?php include_once("templates/header.php");?>
    <main>
        <div class="contato__container">
            <div class="contato__content">
                <h1>Informações de contato</h1>
                <div class="contato__info">
                    <span class="material-symbols-outlined">call <p>(11)99999-8888</p></span>
                    <span class="material-symbols-outlined">mail <p>contato@1blog.com</p></span>
                </div>
                <pre>ou</pre>
                <a href="mailto:contato@1blog.com?">Clique aqui</a>
            </div>
        </div>
    </main>
    <?php include_once("templates/footer.php");?>