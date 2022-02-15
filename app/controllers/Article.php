<?php
class Article extends Controller {
    public function index($id) {
        $product = $this->model('ArticleModel');
        $this->view('article/index', $product->getOneArticle($id));
    }
}