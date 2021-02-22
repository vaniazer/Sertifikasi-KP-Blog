<?php
class M_tambah extends CI_Model
{
    public function get()
    {
        return $this->db->get('tambah');
    }

    public function get_where($id_resep)
    {
        return $this->db->get_where('tambah', array('id_resep' => $id_resep));
    }

    public function get_join($table)
    {
        $this->db->select('*, tambah.id_resep AS ID_RESEP');
        $this->db->join($table,$table.'.id_kategori = tambah.'.$table);
        return $this->db->get('tambah');
    }

    public function tambah($data)
    {
        return $this->db->insert('tambah', $data);
    }

    public function hapus($id_resep)
    {
        $this->db->where('id_resep', $id_resep);
        return $this->db->delete('tambah');
    }

    public function edit($id_resep, $data)
    {
        $this->db->where('id_resep', $id_resep);
        return $this->db->update('tambah', $data);
    }

  
}

