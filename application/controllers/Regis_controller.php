<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regis_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        @session_start();
    }
    public function index() {
		$this->load->view('V_Register');
    }
		public function adduser(){
            $username =$this->input->post('username');
            $password =md5($this->input->post('password'));
            $nama_lengkap =$this->input->post('nama_lengkap');
            $nohp =$this->input->post('nohp');
            $email =$this->input->post('email');
            $level =$this->input->post('level');
            $date = date("Y-m-d H:i:s");
            //Upload Foto

            $config['upload_path'] = 'C:\xampp\htdocs\StudyFunForKids\assets\images\users';
            $config['allowed_types'] = 'jpg|png';
            $config['overwrite'] = 'TRUE';
            $config['file_name'] = 'profil_'.$this->input->post('username');
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')){

                ?><script language="JavaScript">alert('Harap mengisi semua data.');
                document.location='<?php echo site_url();?>'</script><?php

            }
            else{
                $tipe='';
                $upload_data = $this->upload->data();
                if($upload_data['image_type']=='jpeg'|| $upload_data['image_type']=='JPG'){
                    $tipe='jpg';
                }else if($upload_data['image_type']=='png'|| $upload_data['image_type']=='PNG'){
                    $tipe='png';
                }
                //masukkan ke database
                $foto = 'assets/images/users/profil_'.$this->input->post('username').'.'.$tipe;
                $cek = $this->main_model->add_user('user',array ("username" => $username, "password" => $password, "nama" => $nama_lengkap, "nohp" => $nohp, "email" => $email,"foto"=>$foto, "terdaftar" => $date,"level" => $level));
                if ($cek >= 1){
                    ?> <script language="JavaScript">alert('Add User Success');
                        document.location='<?php echo site_url('main_controller');?>'</script><?php
                    //redirect();
                }
                else {
                    ?> <script language="JavaScript">alert('Add User Failed');
                        document.location='<?php echo site_url();?>'</script><?php
                }
            }
    }
}