<?php

class M_user extends CI_Model
{
    public function get($table)
    {
        $this->db->from($table);
        return $this->db->get()->result();
    }

    public function getWhere($table, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function getWhereRow($table, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->row();
    }

    public function getLastRecord()
    {
        return $this->db->query("SELECT * FROM pernikahan ORDER BY id DESC LIMIT 1")->row();
    }

    public function insertReturnID($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update($table, $data, $id)
    {
        $this->db->update($table, $data, $id);
    }

    public function delete($table, $id)
    {
        $this->db->delete($table, ['id' => $id]);
    }
}
