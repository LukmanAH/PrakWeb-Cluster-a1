<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

    public function loginQuery($where)
    {
        return $this->db->select('*')->from("tbl_users")->where($where)->get();
    }

    public function insertUser($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function uploadArticle($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function getArticle()
    {
        return $this->db->select("*")->from("tbl_article")->order_by("created_at", "desc")->get();
    }

    public function deleteArticle($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function getUpdate($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function updateArticle($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}