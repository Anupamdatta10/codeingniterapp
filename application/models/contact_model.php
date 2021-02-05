<?php



    class contact_model extends CI_Model{
        function create($formArray)
        {//insert data
            $this->db->insert('contact',$formArray);
        }
        function all(){
            //fetch all data
            $data=$this->db->get('contact')->result_array();//setect * from contact
            return $data;
        }
    }

?>