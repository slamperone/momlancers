<?php
$title = $args['title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$content = $args['content'] ?? '';
$img = $args['img'] ?? '';
$link = $args['link'] ?? '';
?>


<div class="card border-0 shadow mh-400" style="width:100%;">
    <figure class="text-center p-4 p-md-2">
        <img src="<?= $img; ?>" alt="<?= $title ?>" />
    </figure>
    <div class="card-body text-center">
        <h5 class="fw-bold"><?= $title ?></h5>
        <h6><?= $subtitle ?></h6>
        <?= $content; ?>
    </div>
</div>