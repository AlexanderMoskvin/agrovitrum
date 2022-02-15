<?php

class Regulators extends Controller {
    public function index($id) {
        $product = $this->model('Products');
        $this->view('regulators/index', $product->getOneProduct($id));
    }
}