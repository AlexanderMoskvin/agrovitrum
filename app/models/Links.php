<?php
    require 'DB.php';

    class Links {
        private $id;
        private $long_link;
        private $short_name;
        private $user;

        private $_db = null;

        public function __construct() {
            $this->_db = DB::getInstence();
        }

        public function setData($id, $long_link, $short_name, $user) {
            $this->id = $id;
            $this->long_link = $long_link;
            $this->short_name = $short_name;
            $this->user = $user;
        }

        public function validLinkForm() {
            $check_short_name = $this->_db->prepare('SELECT * FROM `links` WHERE `short_name`=:short_name');
            $check_short_name->execute(['short_name' => $this->short_name]);
            $check_result = $check_short_name->fetchColumn();

            if($check_result)
                return "Такое сокращение уже используется в базе";
            else
                return "Верно";
        }

        public function addLinks() {
            $sql = 'INSERT INTO links(long_link, short_name, user) VALUES(:long_link, :short_name, :user)';
            $query = $this->_db->prepare($sql);
            $query->execute(['long_link' => $this->long_link, 'short_name' => $this->short_name, 'user' => $this->user]);
        }

        public function getLinks() {
            $user = $_COOKIE['login'];
            $result = $this->_db->query("SELECT * FROM `links` WHERE `user` = '$user' ORDER BY `id` ASC");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function deleteLinks() {
            $sql = 'DELETE FROM `links` WHERE `id` =:id';
            $query = $this->_db->prepare($sql);
            $query->execute(['id' => $this->id]);
        }
    }