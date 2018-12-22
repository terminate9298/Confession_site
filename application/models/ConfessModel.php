<?php
Class ConfessModel extends CI_Model
{
    Public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function new_confess($data){
            $query=$this->db->insert('confess',$data);
            if($query){
            $result['status_1'] = true;
                    }
            return $result;

        }
        public function new_comment($data){
            $query=$this->db->insert('comment',$data);
            if($query){
            $result['status_1'] = true;
                    }
            return $result;

        }
        public function page_content($data)
        {
            $this->db->select('comm_id,comments,username');
            $this->db->order_by('time_comm','DESC');
            $this->db->where('conn_id',$data);
            $this->db->from('comment');
            $result['comments']=$this->db->get()->result_array();
            $this->db->select('confession,feeling,username,conn_id');
            $this->db->where('conn_id',$data);
            $this->db->from('confess');
            $result['confession']=$this->db->get()->result_array();
            return $result;
        }   
        public function cs_show(){
            
            $this->db->select('conn_id,confession,year,feeling,username');
            $this->db->order_by('time_conn','DESC');
            $this->db->from('confess');
            $result['confessions']=$this->db->get()->result_array();
            return $result;
        }


}
?>
