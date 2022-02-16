<?php
    require 'DB.php';

    class UserModel {
        private $email;
        private $name;
        private $pass;

        private $_db = null;


        public function __construct() {
            $this->_db = DB::getInstence();
        }

        public function setData($email, $name, $pass) {
            $this->email = $email;
            $this->name = $name;
            $this->pass = $pass;
        }

        public function validForm() {
            $check_name = $this->_db->prepare('SELECT * FROM `users` WHERE `name`=:name');
            $check_name->execute(['name' => $this->name]);
            $check_result = $check_name->fetchColumn();

            if(strlen($this->email) < 3)
                return "Email слишком короткий";
            else if(strlen($this->name) < 3)
                return "Логин слишком короткий";
            else if($check_result)
                return "Пользователь с таким логином уже существует";
            else if(strlen($this->pass) < 3)
                return "Пароль не менее 3 символов";
            else
                return "Верно";
        }

        public function addUser() {
            $sql = 'INSERT INTO users(email, name, pass) VALUES(:email, :name, :pass)';
            $query = $this->_db->prepare($sql);

            $pass = password_hash($this->pass, PASSWORD_DEFAULT);
            $query->execute(['email' => $this->email, 'name' => $this->name, 'pass' => $pass]);

            $this->setAuth($this->name);
        }

        public function getUser() {
            $login = $_COOKIE['login'];
            $result = $this->_db->query("SELECT * FROM `users` WHERE `name` = '$login'");
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        public function logOut() {
            setcookie('login', $this->email, time() - 3600, '/');
            unset($_COOKIE['login']);
            header('Location: /user/auth');
        }

        public function auth($name, $pass) {
            $result = $this->_db->query("SELECT * FROM `users` WHERE `name` = '$name'");
            $user = $result->fetch(PDO::FETCH_ASSOC);

            if($user['name'] == '')
                return 'Пользователя с таким логином не существует';
            else if(password_verify($pass, $user['pass']))
                $this->setAuth($name);
            else
                return 'Пароли не совпадают';
        }

        public function setAuth($email) {
            setcookie('login', $email, time() + 3600, '/');
            header('Location: /user/dashboard');
        }
    }
