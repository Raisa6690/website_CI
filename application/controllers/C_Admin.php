<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        @session_start();
        if (($this->session->userdata('id') == null) || ($this->session->userdata('level') != 'Admin')) {
            redirect('main_controller');
        }
        /**/
    }

    public function index() {
        $data['judul'] = "Admin";
        $data['content'] = "Admin/content";
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('admin/index', $data);
    }

    public function addadmin() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nohp = $this->input->post('nohp');
        $email = $this->input->post('email');
        $level = $this->input->post('level');
        $date = date("Y-m-d H:i:s");
        //Upload Foto

        $config['upload_path'] = 'C:\xampp\htdocs\StudyFunForKids\assets\images\users';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = 'TRUE';
        $config['file_name'] = 'profil_' . $this->input->post('username');
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            ?><script language="JavaScript">alert('Harap mengisi semua data.');
                            document.location = '<?php echo site_url(); ?>'</script><?php
        } else {
            $tipe = '';
            $upload_data = $this->upload->data();
            if ($upload_data['image_type'] == 'jpeg' || $upload_data['image_type'] == 'JPG') {
                $tipe = 'jpg';
            } else if ($upload_data['image_type'] == 'png' || $upload_data['image_type'] == 'PNG') {
                $tipe = 'png';
            }
            //masukkan ke database
            $foto = 'assets/images/users/profil_' . $this->input->post('username') . '.' . $tipe;
            $cek = $this->main_model->add_user('user', array("username" => $username, "password" => $password, "nama" => $nama_lengkap, "nohp" => $nohp, "email" => $email, "foto" => $foto, "terdaftar" => $date, "level" => $level));
            if ($cek >= 1) {
                ?> <script language="JavaScript">alert('Tambah Admin Berhasil');
                </script><?php
                redirect('C_Admin');
            } else {
                ?> <script language="JavaScript">alert('Tambah Admin Gagal');
                </script><?php
            }
        }
    }

    public function addvideo() {
        $judul = $this->input->post('judul');
        $jenis = $this->input->post('jenis');
        $date = date("Y-m-d H:i:s");
        $ringkasan = $this->input->post('ringkasan');

        $target_dir = "assets/video/";
        $target_file = $target_dir . basename($_FILES["video"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if ($_FILES["video"]["size"] > 100000000) {
            ?><script language="JavaScript">alert('Maaf ukuran video tidak boleh lebih dari 100MB');
                            document.location = '<?php echo site_url('C_Admin/myvideos'); ?>'</script><?php
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            ?><script language="JavaScript">alert('Maaf video ini sudah ada');
                            document.location = '<?php echo site_url('C_Admin/myvideos'); ?>'</script><?php
            $uploadOk = 0;
        }
        if ($imageFileType != "mp4") {
            ?><script language="JavaScript">alert('Hanya video dengan ekstensi .mp4 yang dapat diupload');
                            document.location = '<?php echo site_url('C_Admin/myvideos'); ?>'</script><?php
            $uploadOk = 0;
        }
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
                $this->E_Video->add_video('video', array("judul" => $judul, "jenis" => $jenis, "tglupload" => $date,
                    "data" => $target_file, "ringkasan" => $ringkasan));
                ?><script language="JavaScript">alert('Video berhasil diupload');
                                    document.location = '<?php echo site_url('C_Admin/myvideos'); ?>'</script><?php
            } else {
                ?><script language="JavaScript">alert('Error pada proses upload video!');
                                    document.location = '<?php echo site_url('C_Admin/myvideos'); ?>'</script><?php
            }
        }
    }

    public function listuserview() {
        $data['content'] = 'admin/management/listuser_content';
        $data['member'] = $this->
                E_Member->list_Member("Member");
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('admin/index', $data);
    }

    public function ViewAddAdmin() {
        $data['content'] = 'admin/management/FormAdmin';
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('admin/index', $data);
    }

    public function ViewAdmin() {
        $data['content'] = 'admin/management/AddAdmin';
        $data['listadmin'] = $this->E_Admin->list_Admin("Admin");
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('admin/index', $data);
    }

    public function myvideos() {
        $data['content'] = 'admin/Video/my_videos';
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('admin/index', $data);
    }

    public function datavideos() {
        $data['content'] = 'admin/Video/datavideo';
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('admin/index', $data);
    }

    public function kumpulanvideos() {
        $data['content'] = 'admin/Video/kumpulan_videos';
        $data['video'] = $this->E_Video->list_videoAll();
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('admin/index', $data);
    }

    public function dataartikel() {
        $data['content'] = 'admin/Artikel/data_artikel';
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $this->load->view('admin/index', $data);
    }

    public function deletE_Member($id) {
        $this->E_Admin->deletE_Member($id);
        redirect('C_Admin/listuserview');
    }

    public function deletE_Admin($id) {
        $this->E_Admin->deletE_Admin($id);
        redirect('C_Admin/ViewAdmin');
    }

    public function userprofileview($id) {
        $data['content'] = 'admin/management/userprofile_content';
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
        $data['userprofile'] = $this->main_model->pilih_user($id);
        $this->load->view('admin/index', $data);
    }

    public function updateprofileuser($id) {
        $userbaru = $this->input->post('userbaru');
        $passbaru = md5($this->input->post('passbaru'));
        $nohpru = $this->input->post('nohpru');
        $emailru = $this->input->post('emailru');
        $lvlbaru = $this->input->post('levelbaru');

        $this->E_Admin->updatE_Admin('user', array(
            "username" => $userbaru,
            "password" => $passbaru,
            "nohpru" => $nohpru,
            "emailru" => $emailru,
            "level" => $lvlbaru
                ), $id);
        ?><script language="JavaScript">alert('Update Profile Success');
                    document.location = '<?php echo site_url('C_Admin/listuserview'); ?>'</script><?php
        //redirect('C_Manager/listuserview');
    }

}
?>