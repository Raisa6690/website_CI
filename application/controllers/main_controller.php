<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        @session_start();
    }


    public function index() {
        $this->load->view('home');
    }

    public function login(){
        $username = $this->input->post('username','true');
        $password = md5($this->input->post('password','true'));

        $temp_account=$this->main_model->cek_user($username,$password)->row();
        $num_account=count($temp_account);


        if($num_account > 0){
            $ses=array(
                'id'=>$temp_account->id,
                'username'=>$temp_account->username,
                'level'=>$temp_account->level
            );
            $this->session->set_userdata($ses);
            if($temp_account->level=="Admin"){
                redirect(site_url('C_Admin'));
            }else{
                redirect(site_url('C_Member'));
            }
        }else{
            ?><script language="JavaScript">alert('Username dan Password Anda Salah!');
                document.location='<?php echo site_url('');?>'</script><?php
        }
	}

    public function logout() {
        $this->session->sess_destroy();
        redirect('main_controller', 'refresh');
    }
}

