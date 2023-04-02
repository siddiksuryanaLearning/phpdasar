<?php

class Product extends Controller
{
    public function index()
    {
        // $data['judul'] = 'Product';
        $data['pro'] = $this->model('Product_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('product/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Product';
        $data['pro'] = $this->model('Product_model')->getProductById($id);
        $this->view('templates/header', $data);
        $this->view('product/detail', $data);
        $this->view('templates/footer', $data);
    }

    public function add()
    {
        if ($this->model('Product_model')->addProduct($_POST) > 0) {
            Flasher::setFlash('Success !', '', 'blue');
            header('Location: http://localhost/phpmvc/public/product/add');
            exit;
        } else {
            // Flasher::setFlash('Failed !', '', 'red');
            // // header('Location: http://localhost/phpmvc/public/product/add');
            // // exit;
        }

        $data['judul'] = 'Tambah Product';
        $this->view('templates/header', $data);
        $this->view('product/add', $data);
        $this->view('templates/footer', $data);
    }

    public function delete($id)
    {
        if ($this->model('Product_model')->deleteProduct($id) > 0) {
            Flasher::setFlash('Deleted !', '', 'red');
            header('Location: http://localhost/phpmvc/public/product');
            exit;
        }
    }

    public function edit($id)
    {
        if ($this->model('Product_model')->editProduct($id)) {
            Flasher::setFlash('Edit!', '', 'red');
            header('Location: http://localhost/phpmvc/public/product');
            exit;
        }
        $data['judul'] = 'Tambah Product';
        $data = $this->model('Product_model')->getProductById($id);
        $this->view('templates/header', $data);
        $this->view('product/edit', $data);
        $this->view('templates/footer', $data);
    }

    public function search()
    {
        $data['judul'] = 'Product';
        $data['pro'] = $this->model('Product_model')->searchProduct();
        $this->view('templates/header', $data);
        $this->view('product/index', $data);
        $this->view('templates/footer', $data);
    }
}
