<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/app.css">
	<title>Laravel Blog</title>
</head>
<body>
	<article>
		<h1><?= $post->title; ?></h1>
		<div>
			<?= $post->body; ?>
		</div>
	</article>
	<a href="/">Go Back</a>
</body>
</html>