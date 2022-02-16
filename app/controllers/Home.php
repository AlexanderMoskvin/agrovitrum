<?php
    class Home extends Controller {
        public function index() {

            if(($_COOKIE['login'] == '')) {
                $data = [];
                if(isset($_POST['email'])) {
                    $user = $this->model('UserModel');
                    $user->setData($_POST['email'], $_POST['name'], $_POST['pass']);

                    $isValid = $user->validForm();
                    if($isValid == "Верно")
                        $user->addUser();
                    else
                        $data['message'] = $isValid;
                }
            } else {
                $links = $this->model('Links');
                $links->setData($_POST['id'], $_POST['long_link'], $_POST['short_name'], $_COOKIE['login']);

                $isValid = $links->validLinkForm();
                if($isValid == "Верно") {
                    $links->addLinks();
                    $data = ['links' => $links->getLinks(), 'title' => 'Главная страница'];
                } else
                $data = ['links' => $links->getLinks(), 'title' => 'Главная страница', 'message' => $isValid];

                if(isset($_POST['id'])) {
                    $links->deleteLinks();
                    $data = ['links' => $links->getLinks(), 'title' => 'Главная страница'];
                }
            }

            $this->view('home/index', $data);
        }
    }