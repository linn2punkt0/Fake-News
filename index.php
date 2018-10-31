<?php

declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

$sortedItems = sortByDropDown($newsItems, $selectedVal);
$sortBy = $_GET['sortBy'] ?? "0";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/sketchy/bootstrap.min.css" rel="stylesheet" integrity="sha384-5cy8WdlNAGqQwyB33aLiqJoRQQxZsc3TDUkSTahHAx2gMK3o0te7Xqm+nNLe4Ou3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>The Daily Prophet</title>
    </head>
    <body class="background">
        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
            <h2>The Daily Prophet</h2>
                <div class="form-group m-0">
                <form action="index.php" method="get">
                    <select name="sortBy" class="custom-select" onchange='this.form.submit()'>
                        <option <?php selected($sortBy,0);?> selected>Sort by</option>
                        <option <?php selected($sortBy,1);?> value="1">Most recent</option>
                        <option <?php selected($sortBy,2);?> value="2">Most ancient</option>
                    </select>
                </form>
                </div>
            </div>
        </nav>

        <div class= "newsFeed">
            <?php foreach ($sortedItems as $newsItem) :?>
            <article class="jumbotron">
                <h2><?= $newsItem['title']; ?></h2>
                <div class= 'articleInfo'>
                    <h5 class="publishInfo"><?= $newsItem['author']; ?></h5>
                    <h5 class="publishInfo"><?= date("d/m-Y", $newsItem['publishDate']); ?>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 order-2 order-md-1">
                        <p><?= $newsItem['content']; ?></p>
                    </div>
                    <div class="gifContainer col-12 col-md-6 order-1 order-md-2">
                        <img src="<?= $newsItem['authorImage'];?>" alt="Image"> 
                    </div>
                </div> 
                <button type="button" class="btn btn-primary btn-sm likes" ><?= $newsItem['likes'] . " Likes" ?></button>
            </article>
            <?php endforeach; ?>
        </div>
		<script src="./functions.js"></script>
    </body>
</html>
