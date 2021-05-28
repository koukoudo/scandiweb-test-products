<?php

class ProductModel
{
    protected $db;

    public function __construct()
    {
        $config = include(__DIR__ . '/../config.php');
        $server_name = $config['db']['servername'];
        $username = $config['db']['username'];
        $password = $config['db']['password'];
        $database = $config['db']['database'];
        $this->db = new mysqli($server_name, $username, $password, $database);

        // Check connection
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    function getProducts()
    {
        $sql = "SELECT * FROM product";
        if ($result = $this->db->query($sql)) {
            return $result;
        }
    }

    function insertProduct($product)
    {
        $sql = "INSERT INTO product (sku, name, price, attributes) VALUES $product";
        $this->db->query($sql);
    }

    function removeProducts($products)
    {
        $skus = implode("','", $products);
        $sql = "DELETE FROM product WHERE sku IN ('$skus')";
        $this->db->query($sql);
    }
}