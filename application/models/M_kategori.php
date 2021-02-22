<?php
class M_kategori extends CI_Model
{
    public function get()
    {
        return $this->db->get('kategori');
    }

   public function tambah($data)
   {
       return $this->db->insert('kategori', $data);
   }

   public function edit($id_kategori, $data)
   {
       $this->db->where('id_kategori', $id_kategori);
       return $this->db->update('kategori', $data);
   }

   public function hapus($id_kategori)
   {
       $this->db->where('id_kategori', $id_kategori);
       return $this->db->delete('kategori');
   }
}
