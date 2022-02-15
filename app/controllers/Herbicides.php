<?php

class Herbicides extends Controller {
    public function index($id) {
        $product = $this->model('Products');
        $this->view('herbicides/index', $product->getOneProduct($id));
    }
}