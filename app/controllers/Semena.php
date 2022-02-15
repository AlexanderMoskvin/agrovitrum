<?php

class Semena extends Controller {
    public function index($id) {
        $product = $this->model('Products');
        $this->view("semena/index", $product->getOneProduct($id));
    }
}