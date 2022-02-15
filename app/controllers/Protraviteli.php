<?php

class Protraviteli extends Controller {
    public function index($id) {
        $product = $this->model('Products');
        $this->view('protraviteli/index', $product->getOneProduct($id));
    }
}