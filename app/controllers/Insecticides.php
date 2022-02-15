<?php
class Insecticides extends Controller {
    public function index($id) {
        $product = $this->model('Products');
        $this->view('insecticides/index', $product->getOneProduct($id));
    }
}