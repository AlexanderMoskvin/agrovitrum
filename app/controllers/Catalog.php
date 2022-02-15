<?php
    class Catalog extends Controller {
        public function index() {
            $this->view("catalog/index");
    }

        public function herbicides() {
            $products = $this->model('Products');
            $data = ['products' => $products->getProductsCategory('Гербициды'), 'title' => 'Гербициды'];
            $this->view("catalog/herbicides", $data);
        }

        public function fungicides() {
            $products = $this->model('Products');
            $data = ['products' => $products->getProductsCategory('Фунгициды'), 'title' => 'Фунгициды'];
            $this->view("catalog/fungicides", $data);
    }

        public function insecticides() {
            $products = $this->model('Products');
            $data = ['products' => $products->getProductsCategory('Инсектициды'), 'title' => 'Инсектициды'];
            $this->view("catalog/insecticides", $data);
    }

        public function protraviteli() {
            $products = $this->model('Products');
            $data = ['products' => $products->getProductsCategory('Протравители'), 'title' => 'Протравители'];
            $this->view("catalog/protraviteli", $data);
    }

        public function adjuvants() {
            $products = $this->model('Products');
            $data = ['products' => $products->getProductsCategory('ПАВы и Адьюванты'), 'title' => 'ПАВы и Адьюванты'];
            $this->view("catalog/adjuvants", $data);
    }

        public function regulators() {
            $products = $this->model('Products');
            $data = ['products' => $products->getProductsCategory('Регуляторы роста'), 'title' => 'Регуляторы роста'];
            $this->view("catalog/regulators", $data);
    }

        public function semena_i_udobreniya() {
            $this->view("catalog/semena_i_udobreniya");
        }

        public function udobreniya() {
            $products = $this->model('Products');
            $data = ['products' => $products->getProductsCategory('Удобрения'), 'title' => 'Удобрения'];
            $this->view("catalog/udobreniya", $data);
        }

        public function semena() {
            $products = $this->model('Products');
            $data = ['products' => $products->getProductsCategory('Семена'), 'title' => 'Семена'];
            $this->view("catalog/semena", $data);
        }
}


