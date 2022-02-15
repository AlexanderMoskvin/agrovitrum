<?php

class Articles extends Controller {
    public function index() {
        $articles = $this->model('ArticleModel');
        $data = ['articles' => $articles->getArticles(), 'title' => 'Все новости на сайте'];
        $this->view("articles/index", $data);
    }
}