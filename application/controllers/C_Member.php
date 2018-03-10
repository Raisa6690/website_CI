<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_Member extends CI_Controller {

    public function __construct() {
        parent::__construct();
        @session_start();
        if (($this->session->userdata('id') == null) || ($this->session->userdata('level') != 'Member')) {
            redirect('main_controller');
        }
        /**/
    }

    public function index() {
        $data['judul'] = "Member";
        $data['content'] = "Member/content";
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $data['artikel'] = $this->E_Artikel->list_artikelall();
        $data['comment'] = $this->E_Commentar->list_comment();
        $this->load->view('Member/index', $data);
    }

    public function userprofileview() {
        $data['content'] = 'Member/my_profile/V_Profil';
        $data['userprofile'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('Member/index', $data);
    }

    public function myartikel() {
        $data['content'] = 'Member/Artikel/my_artikel';
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $data['artikel'] = $this->E_Artikel->list_artikel($this->session->userdata('id'));
        $this->load->view('Member/index', $data);
    }

    public function EditProfil() {
        $data['content'] = 'Member/my_profile/Edit_Profil';
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('Member/index', $data);
    }

    public function postartikel() {
        $data['content'] = 'Member/Artikel/Post_Artikel';
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('Member/index', $data);
    }

    public function addcomment($id) {
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $data['artikel'] = $this->E_Commentar->idArtikel($this->session->userdata('id'));
        $komentar = $this->input->post('komentar');
        $cek = $this->E_Commentar->addcomment('comment', array("id_user" => $id, "id_artikel" => $id, "komentar" => $komentar));
        if ($cek >= 1) {
            ?> <script language="JavaScript">alert('Berhasil');
            </script><?php
            redirect('C_Member');
        } else {
            ?> <script language="JavaScript">alert('Gagal');
            </script><?php
        }
        $this->load->view('Member/index', $data);
    }

    public function addartikel($id) {
        $judulartikel = $this->input->post('judulartikel');
        $tglartikel = $this->input->post('tglartikel');
        $isi = $this->input->post('isi');
        $date = date("Y-m-d H:i:s");
        $cek = $this->E_Member->addartikel('artikel', array("id_user" => $id, "judulartikel" => $judulartikel, "tglartikel" => $tglartikel, "isi" => $isi));
        if ($cek >= 1) {
            ?> <script language="JavaScript">alert('Berhasil');
            </script><?php
            redirect('C_Member');
        } else {
            ?> <script language="JavaScript">alert('Gagal');
            </script><?php
        }
    }

    public function metodepelajar() {
        $data['content'] = 'Member/Video/Metode_Pembelajaran';
        $data['video'] = $this->E_Video->list_videoTutorial();
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('Member/index', $data);
    }

    public function laguanak() {
        $data['content'] = 'Member/Video/Lagu_Anak';
        $data['video'] = $this->E_Video->list_videoLagu();
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('Member/index', $data);
    }

    public function updateprofileuser() {
        $id = $this->session->userdata('id');
        $namabaru = $this->input->post('namabaru');
        $nohpru = $this->input->post('nohpru');
        $emailru = $this->input->post('emailru');
        $fotoru = $this->input->post('fotoru');

        $pisah = explode(' ', $namabaru);
        if (count($pisah) == 0) {
            
        } else {
            $namabaru = implode('_', $pisah);
        }
        $config['upload_path'] = 'C:\xampp\htdocs\StudyFunForKids\assets\images\users';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = 'TRUE';
        $config['file_name'] = 'profil_' . $namabaru;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $fotoru = $this->input->post('fotolama');
        } else {
            $tipe = '';
            $upload_data = $this->upload->data();
            if ($upload_data['image_type'] == 'jpeg' || $upload_data['image_type'] == 'JPG') {
                $tipe = 'jpg';
            } else if ($upload_data['image_type'] == 'png' || $upload_data['image_type'] == 'PNG') {
                $tipe = 'png';
            }
            //masukkan ke database
            $fotoru = 'assets/images/users/profil_' . $namabaru . '.' . $tipe;
        }$this->E_Member->update_user('user', array("nama" => $namabaru, "nohp" => $nohpru, "foto" => $fotoru, "email" => $emailru), $id);
        ?><script language="JavaScript">alert('Update Profile Success');
                    document.location = '<?php echo site_url('C_Member/userprofileview'); ?>'</script><?php
        //redirect('C_Member/listuserview');
    }

}
?>