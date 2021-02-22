<?php
class Kategori extends CI_Controller
{
    public function __construct() //Untuk memanggil keseluruhan model agar tidak usah memanggil satu persatu
    {
                parent::__construct();
                $this->load->model('M_kategori');
    }

    //Proses Tambah Data Kategori
    public function tambah()
   {
        $data = array(
            'nama' => $this->input->post('nama')
        );

        //Dari model yaitu dbnya telah ditambahkan di pindah ke variabel baru
       $tambah = $this->M_kategori->tambah($data);
       if($tambah){ //JIka Berhasil Menambah

            $this->session->set_flashdata('kategori', 'Berhasil Menambah Kategori');
            //Langsung menuju ke Laman Kategori
            redirect('admin/kategori');

        }else{

            $this->session->set_flashdata('kategori','Gagal Menambah Kategori');
            redirect('admin/kategori');
        }

   }

   //Proses Edit Kategori
   public function edit($id_kategori)
    {
        $data = array(
            'nama' => $this->input->post('nama')
            
        );

        $edit = $this->M_kategori->edit($id_kategori, $data);
        if($edit){ //Berhasil menghapus
            $this->session->set_flashdata('kategori', 'Berhasil Update Kategori');
            redirect('admin/kategori');
        }else{
            $this->session->set_flashdata('kategori','Gagal Update Kategori');
            redirect('admin/kategori');
        }
    }

    public function hapus($id_kategori)
    {
        $hapus = $this->M_kategori->hapus($id_kategori);
        if($hapus){ //Berhasil menghapus
            $this->session->set_flashdata('kategori', 'Berhasil Menghapus Kategori');
            redirect('admin/kategori');
        }else{
            $this->session->set_flashdata('kategori','Gagal Menghapus Kategori');
            redirect('admin/kategori');
        }
    }
}
