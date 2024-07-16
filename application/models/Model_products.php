<?php

class Model_products extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
public function getProductData($id = null)
{
    if ($id) {
        $sql = "SELECT p.*, c.name as category FROM products p LEFT JOIN categories c ON category_id = c.id WHERE p.id = ?";
        $query = $this->db->query($sql, array($id));
        return $query->row_array();
    }

    $sql = "SELECT p.*, c.name as category FROM products p LEFT JOIN categories c ON category_id = c.id ORDER BY p.id DESC";
    $query = $this->db->query($sql);
    return $query->result_array();
}

public function getActiveProductData()
{
    $sql = "SELECT p.*, c.name as category FROM products p LEFT JOIN categories c ON category_id = c.id WHERE p.availability = ? ORDER BY p.id DESC";
    $query = $this->db->query($sql, array(1));
    return $query->result_array();
}

    public function create($data)
    {
        if ($data) {
            $insert = $this->db->insert('products', $data);
            return ($insert == true) ? true : false;
        }
    }

    public function update($data, $id)
    {
        if ($data && $id) {
            $this->db->where('id', $id);
            $update = $this->db->update('products', $data);
            return ($update == true) ? true : false;
        }
    }

    public function remove($id)
    {
        if ($id) {
            $this->db->where('id', $id);
            $delete = $this->db->delete('products');
            return ($delete == true) ? true : false;
        }
    }

    public function countTotalProducts()
    {
        $sql = "SELECT * FROM products";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function countTotalbrands()
    {
        $sql = "SELECT * FROM brands";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function countTotalcategory()
    {
        $sql = "SELECT * FROM categories";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function countTotalattribures()
    {
        $sql = "SELECT * FROM attributes";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
