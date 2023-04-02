<?php

class Product_model
{
    private $table = 'product';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM product');
        return $this->db->resultSet();
    }

    public function getProductById($id)
    {
        $this->db->query('SELECT * FROM product WHERE id =' . $id);
        // $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addProduct()
    {
        if (isset($_POST['submit'])) {
            $data = $_POST;
            $merk = $data['merk'];
            $tahun = $data['tahun'];
            $os = $data['os'];
            $ram = $data['ram'];

            $query = "INSERT INTO product VALUES (NULL, '$merk','$tahun','$os','$ram')";
            $this->db->query($query);
            // $this->db->bind('merk', $merk);
            // $this->db->bind('tahun', $data['tahun']);
            // $this->db->bind('os', $data['os']);
            // $this->db->bind('ram', $data['ram']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function editProduct($id)
    {
        if (isset($_POST['submit'])) {
            $merk = $_POST['merk'];
            $tahun = $_POST['tahun'];
            $os = $_POST['os'];
            $ram = $_POST['ram'];

            $this->db->query("UPDATE product SET merk = '$merk', tahun = '$tahun', os = '$os', ram = '$ram'  WHERE id = $id");
            $this->db->execute();

            return $this->db->rowCount();
            var_dump($_POST);
        }
    }

    public function searchProduct()
    {
        if (isset($_POST['submit'])) {
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM product WHERE merk LIKE '%n%'";
            $this->db->query($query);
            return $this->db->resultSet();
        }
    }
}
