<?php

declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/sketchy/bootstrap.min.css">
        <title></title>
    </head>
    <body class="background">
        <header>
      <div class="jumbotron" id="header">
          <h1>The Daily Prophet</h1>
      </div>
        </header>

        <div class= "container">
            <?php foreach ($newsItems as $newsItem) :?>
            <article class="jumbotron" id="article">
                <h2><?= $newsItem['title']; ?></h2>
                <div class= 'articleInfo'>
                    <h5 class="publishInfo"><?= $newsItem['author']; ?></h5>
                    <h5 class="publishInfo"><?= $newsItem['publish date']; ?> </h5>
                </div>
                <p><?= $newsItem['content']; ?></p>
                <button type="button" class="btn btn-primary btn-sm"><?= $newsItem['likes'] . " Likes" ?></button>
                <button type="button" class="btn btn-primary btn-sm"><?= 'Read more...' ?></button>
            </article>
            <?php endforeach; ?>
        </div>

    </body>
</html>