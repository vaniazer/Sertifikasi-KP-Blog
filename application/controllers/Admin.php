<?php
class Admin extends CI_Controller
{
    // Ke Halaman Admin 
    public function Ke_HalamanAdmin($page)
    {
        //Memanggil Model kategori dan resep
        $this->load->model('M_kategori');
        $this->load->model('M_tambah');

        //Mengecek file di View
        if($this->load->view('back/admin/'.$page,'',TRUE) === ''){
            
            echo "Terjadi Kesalahan";

        }else{ //File ditemukan
            $judul = '';
            if($page === "index"):
                $judul = 'Home';
            else:
                $judul = ucfirst($page); //digunakan untuk membuat tulisan kata depan menjadi besar disetiap judul
            endif;

            $data['kategori'] = $this->M_kategori->get()->result();

            //Halaman Index digunakan untuk menghitung jumlah resep dan jumlah kategori
            $data['jumlah_resep'] = $this->M_tambah->get()->num_rows(); 
            $data['jumlah_kategori'] = $this->M_kategori->get()->num_rows();

            //Halaman Resep proses join antara tabel resep dengan kategori
            $data['tambah'] = $this->M_tambah->get_join('kategori')->result();

            $data['judul'] = "Halaman ".$judul;
            $this->load->view('back/template/header', $data);
            $this->load->view('back/admin/'.$page, $data);
            $this->load->view('back/template/footer', $data);
        }
       
    }

    //Halaman regis menampilkan view
    public function Ke_Halamanregis()
    {
            $this->load->view('back/regis');
       
    }

    //proses regis
    public function regis()
   {
        $this->load->model('M_user');

        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'status' => $this->input->post('status'),
            'name' => $this->input->post('name')
        );

        //proses insert yang berada di model M_user
       $regis = $this->M_user->regis($data);
       if($regis){ //JIka Berhasil Menambah

            $this->session->set_flashdata('pesan', 'Berhasil Menambah Akun');
            //Langsung menuju ke Laman front
            redirect(base_url());

        }else{

            $this->session->set_flashdata('pesan','Gagal Menambah Akun');
            redirect(base_url());
        }

   }

    public function logout()
    {
        session_destroy();
        //Kembali ke Front Index
        redirect(base_url());

    }
    
    public function login()
    {
        $data['judul'] = "Login Admin";
        $this->load->view('back/login', $data);

    }

    public function proseslogin()
    {
        //Memanggil Model bernama M_user
        $this->load->model('M_user');

        //Data username dan password di pindah ke variabel baru
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //Melakukan Pengecekan
        $cek = $this->M_user->cek_login($username,$password)->num_rows();

        //row() = dikarenakan data hanya satu
        $data = $this->M_user->cek_login($username,$password)->row();
        
        if($cek > 0){ //Jika Benar

                $sess = array(
                    'username' => $data->username,
                    'id_user' => $data->id_user
                );    
                redirect('admin/index');
                $this->session->set_userdata($sess);
                echo "sampai sini sudah";
            
        }else{
            $this->session->set_flashdata('pesan','Maaf Username dan Password Salah!');
            redirect('login_admin');
        }
    }
}
