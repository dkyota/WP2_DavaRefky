<?php

class ModelMobil extends CI_Model 
{
    // Manajemen Mobil
    public function getMobil()
    {
        return $this->db->get('mobil');
    }

    public function mobilWhere($where)
    {
        return $this->db->get_where('mobil', $where);
    }

    public function simpanMobil($data = null)
    {
        $this->db->insert('mobil', $data);
    }

    public function updateMobil($data = null, $where = null)
    {
        $this->db->update('mobil', $data, $where);
    }
    public function HapusMobil($where = null)
    {
        $this->db->delete('mobil', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('mobil');
        return $this->get()->row($field);
    }

    // Manajemen Kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    public function updateKategori($data = null, $where = null)
    {
        $this->db->update('kategori', $data, $where);
    }
    public function HapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }
    // join
    public function joinKategoriMobil($where)
    {
        $this->db->select('mobil.id_kategori, kategori.kategori');
        $this->db->from('mobil');
        $this->db->join('kategori', 'kategori.id_mobil.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}