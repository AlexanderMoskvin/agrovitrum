<?php
require 'DB.php';

class ArticleModel {
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function getArticles() {
        $result = $this->_db->query("SELECT * FROM `news` ORDER BY `id` DESC");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneArticle($id) {
        $result = $this->_db->query("SELECT * FROM `news` WHERE `id` = '$id'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}

