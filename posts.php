<?php
$posts = include('data/dados.php');

if (isset($_GET['id'])) {
    $artigoID = $_GET['id'];

    $artigo = null;
    foreach ($posts as $post) {
        if ($post['id'] == $artigoID) {
            $artigo = $post;
            break;
        }
    }
    if ($artigo) {
        include_once("templates/header.php");
        ?>

        <main class="posts">
            <h2 class="artigo__h2"><?= $artigo['titulo'] ?></h2>
            <div class="artigo__detalhes">
                <img src="<?= $artigo['img'] ?>" class="img__post" alt="Foto do artigo">
                <p><?= $artigo['conteudo'] ?></p>
            </div>
        </main>

        <?php
        include_once("templates/footer.php");
    } else {
        header("Location: erro.php");
        exit();
    }
} else {
    header("Location: erro.php");
    exit();
}
?>
