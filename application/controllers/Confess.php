<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confess extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        // if(!(isset($_SESSION['user_id']) && isset($_SESSION['name']))){
        //     redirect(CTRL);
        // }
        date_default_timezone_set('Asia/Kolkata');

    }
    public function cs($data = "0")
    {
        $this->load->Model('ConfessModel');
        $sheet = $this->ConfessModel->cs_show();
        $sheet['testfy'] = $data;
        $this->load->view('confess/confess',$sheet);
    }
    public function chat()
    {
        $this->load->view('chat/chat');
    }
    public function page_submit()
    {
        $this->load->view('confess/page_submit');
    }
    public function page_content($id)
    {
        $this->load->Model('ConfessModel');
        $sheet = $this->ConfessModel->page_content($id);
        $this->load->view('confess/page_content',$sheet);
    }
    
    public function new_confess(){
        if(isset($_POST['submit']))
        {
            $data=array();
            $data['username']= $_POST['username'];
            $data['year'] = $_POST['year'];
            $data['feeling'] = $_POST['feel'];
            $data['confession'] = $_POST['conn'];
            $data['conn_id']=md5($_POST['conn']);
            $data['time_conn']=date('Y-m-d H:i:s');
            $this->load->Model('ConfessModel');
            $sheet = $this->ConfessModel->new_confess($data);
            redirect(CTRL."Confess/cs");
        }
    }
    public function new_comment(){
        
            $data=array();
            $data['username'] = $this->input->post('username');
            $data['comments'] = $this->input->post('comment');
            $data['conn_id'] = $this->input->post('conn_id');
            $data['comm_id']=md5($data['comments']);
            $data['time_comm']=date('Y-m-d H:i:s');
            $this->load->Model('ConfessModel');
            $sheet = $this->ConfessModel->new_comment($data);
            
            redirect(CTRL."Confess/cs/".$data['conn_id']);
        
    }
}

?>
