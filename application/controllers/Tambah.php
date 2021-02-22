<?php
class Tambah extends CI_Controller
{
    public function __construct() //Untuk memanggil keseluruhan model agar tidak usah memanggil satu persatu
    {
                parent::__construct();
                $this->load->model('M_tambah');
                $this->load->model('M_kategori');
    }

    public function edit($id_resep)
    {   
        
        $data['judul'] = "Halaman Edit Resep";
        $data['tambah'] = $this->M_tambah->get_where($id_resep)->row();
        $data['kategori'] = $this->M_kategori->get()->result();

        $this->load->view('back/template/header', $data);
        $this->load->view('back/admin/edit_resep', $data);
        $this->load->view('back/template/footer', $data);
    }

    public function ke_edit($id_resep)
    {

        if($this->input->post('gambar') !== null): //Jika Gambar ingin Diubah

                //Upload
                $config['upload_path']      = './assets/gambar/';
                $config['allowed_types']      = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('gambar')){
                    echo "Gagal";
                }else{
                    $data = $this->upload->data();
                    $filename = $data['file_name'];
                }
        endif;
        if($this->input->post('gambar') !== null):
            $data = array(
                    'judul'     => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar'    => $filename,
                    'kategori'  => $this->input->post('kategori'),
                    'waktu'     => $this->input->post('waktu'),
                    'porsi'     => $this->input->post('porsi'),
                    'cara'      => $this->input->post('cara'),
                
            );
        else:
                $data = array(
                    'judul'     => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'kategori'  => $this->input->post('kategori'),
                    'waktu'     => $this->input->post('waktu'),
                    'porsi'     => $this->input->post('porsi'),
                    'cara'      => $this->input->post('cara'),
                
            );
        endif;

        $ke_edit = $this->M_tambah->edit($id_resep, $data);
        if($ke_edit){ //Berhasil menghapus
            $this->session->set_flashdata('resep', 'Berhasil Update Resep');
            redirect('admin/tambah');
        }else{
            $this->session->set_flashdata('resep','Gagal Update Resep');
            redirect('admin/tambah');
        }
    }


    public function tambah()
    {
        
        
       

        


            
            

            $data = array(
                'judul'     => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                
                'kategori'  => $this->input->post('kategori'),
                'tanggal'   => NULL,
                'waktu'     => $this->input->post('waktu'),
                'porsi'     => $this->input->post('porsi'),
                'cara'      => $this->input->post('cara'),
            );

            $insert = $this->M_tambah->tambah($data);

            if($insert){
                $this->session->set_flashdata('resep', 'Berhasil Menambahkan Data Resep');
                redirect('admin/tambah');
            }else{
                $this->session->set_flashdata('resep','Gagal Menambah Data Resep');
                redirect('admin/tambah');
            }


    }

    public function lihat($id_resep) //Untuk melihat detail resep di front
    {   
        
        $data['judul'] = "Halaman Lihat Resep";
        $data['tambah'] = $this->M_tambah->get_where($id_resep)->row();
        $data['kategori'] = $this->M_kategori->get()->result();

        $this->load->view('back/template/header', $data);
        $this->load->view('back/admin/lihat_resep', $data);
        $this->load->view('back/template/footer', $data);
    }

    public function lihat_kefront($id_resep) //Untuk melihat detail resep di front
    {   
        
        $data['judul'] = "Halaman Lihat Resep";
        $data['tambah'] = $this->M_tambah->get_where($id_resep)->row();
        $data['kategori'] = $this->M_kategori->get()->result();

        $this->load->view('front/template/header', $data);
        $this->load->view('front/lihat', $data);
        $this->load->view('front/template/footer', $data);
    }

    public function hapus($id_resep)
    {   
        //Ambil Data
        $data = $this->M_tambah->get_where($id_resep)->row();

        //Hapus di Folder Gambar
        $gambar = $data->gambar;
        $path = base_url('assets/gambar/'.$gambar);
        unlink($path);  //Hapus File

        //Hapus di Database
        $hapus = $this->M_tambah->hapus($id_resep);

        if($hapus){
            $this->session->set_flashdata('pesan', 'Berhasil Menghapus Data Resep');
            redirect('admin/tambah');
        }else{
            $this->session->set_flashdata('pesan','Gagal Menghapus Data Resep');
            redirect('admin/tambah');
        }
    }
}