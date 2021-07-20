<?php

class M_admin extends CI_Model
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

    public function getMempelaiPria()
    {
        return $this->db->query("SELECT pernikahan.*, penduduk.nama, kua.kode_kua, kua.kota,kua.kecamatan FROM pernikahan,penduduk,kua WHERE pernikahan.id_penduduk = penduduk.id AND kua.id = pernikahan.id_kua")->result();
    }

    public function getMempelaiPriaRow($id)
    {
        return $this->db->query("SELECT pernikahan.*, penduduk.nama, penduduk.email, kua.kode_kua, kua.kota,kua.kecamatan FROM pernikahan,penduduk,kua WHERE pernikahan.id_penduduk = penduduk.id AND kua.id = pernikahan.id_kua AND pernikahan.id = '$id'")->row();
    }

    public function getMempelaiWanitaRow($id)
    {
        return $this->db->query("SELECT pernikahan.*, penduduk.nama, kua.kode_kua, kua.kota,kua.kecamatan FROM pernikahan,penduduk,kua WHERE pernikahan.id_pasangan = penduduk.id AND kua.id = pernikahan.id_kua AND pernikahan.id = '$id'")->row();
    }

    public function getMempelaiWanita()
    {
        return $this->db->query("SELECT * FROM penduduk")->result();
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
