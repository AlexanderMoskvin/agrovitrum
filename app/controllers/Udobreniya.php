<?php

class Udobreniya extends Controller {
    public function index($id) {
        $product = $this->model('Products');
        $this->view("udobreniya/index", $product->getOneProduct($id));
    }
}