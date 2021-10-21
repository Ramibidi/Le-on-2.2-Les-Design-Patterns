<?php

require('Model/Modele.php');

function getPosts()

{
    $article = new Article();
    $articles = $article->getArticles();
    var_dump($articles);
    require('View/Vue.php');
}



function addPost()

{
    $article = new Article();
    $articles = $article->postArticle();
    return $articles;
}
