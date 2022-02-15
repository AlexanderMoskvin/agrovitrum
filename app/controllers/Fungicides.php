<?php
class Fungicides extends Controller {
    public function index($id) {
        $product = $this->model('Products');
        $this->view('fungicides/index', $product->getOneProduct($id));
    }
}