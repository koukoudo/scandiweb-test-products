<?php

require_once(__DIR__.'/../models/ProductModel.php');
require_once(__DIR__ . '/../classes/Template.php');

class ProductController
{
    protected $product_model;
    protected $view;

    public function __construct()
    {
        $this->product_model = new ProductModel();
    }

    function render($page, $data = null) {
        $this->view = new Template('wrapper.tpl.php');
        $this->view->content = new Template($page);
        if (isset($data)) {
            $this->view->content->data = $data;
        }
        echo $this->view;
    }

    function home()
    {
        $this->render('home.tpl.php');
    }

    function list()
    {
        $result = $this->product_model->getProducts();
        $result_array = [];
        while ($row = mysqli_fetch_array($result)) {
            $result_array[] = $row;
        }

        $this->render('list.tpl.php', $result_array);
    }

    function add()
    {
        $this->render('add.tpl.php');
    }

    function insert($product)
    {
        $this->product_model->insertProduct($product);
    }

    function delete($products)
    {
        $this->product_model->removeProducts($products);
    }
}