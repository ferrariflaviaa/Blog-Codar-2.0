<?php
    include_once ("templates/header.php");
?>
    <main>
        <div class="title">
            <h1>Hora de Codar</h1>
            <p>Blog Programação</p>
        </div>

        <div class="container_post">
                <?php foreach ($post as $post): ?>
                    <div class="post_box">
                        <img src="<?= $BASE_URL; ?>/img/<?= $post['img']?>" alt="<?= $post['title']?>">
                        <h2 class="post_title">
                            <a href="<?=$BASE_URL; ?>post.php?if=<?=$post['id']?>"><?= $post['title']?></a>
                        </h2>
                        <p class="post_description"><?= $post['description']?></p>
                        <div class="tags_container">
                            <?php foreach ($post['tags'] as $tag): ?>
                                <a href="#"><?= $tag ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
        
        
    </main>

<?php
    include_once("templates/footer.php")
?>