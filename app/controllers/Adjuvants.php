<?php
class Adjuvants extends Controller {
    public function index($id) {
        $product = $this->model('Products');
        $this->view('adjuvants/index', $product->getOneProduct($id));
    }
}