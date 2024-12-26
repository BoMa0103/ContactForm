<?php

    require_once dirname(__DIR__).'\model\articles.php';

    $articles = getArticles();

    echo json_encode($articles);
?>