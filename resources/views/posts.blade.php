<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" type="text/css" href="/app.css">
<body>

    <?php foreach ($posts as $post) : ?>

    <article>
        <h1>
            <a href="/posts/<?= $post->slug; ?>"><?= $post->title; ?></a>
        </h1>
        <div> 
            <?= $post->excerpt; ?>
        </div>
    </article>

    <?php endforeach; ?>

</body>