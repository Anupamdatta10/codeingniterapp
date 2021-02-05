<?php
class user extends CI_controller{
    function index()
    {   $this->load->model('contact_model');
        $alldata=$this->contact_model->all();
        $data=array();
        $data['user']=$alldata;
        $this->load->view('list',$data);
    }
    function create()
    {   $this->load->model('contact_model');
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('phno','phno','required');
        if($this->form_validation->run()==false)
        {
            $this->load->view('create');
        }
        else
        {
            //save data into database
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['ph_no']=$this->input->post('phno');
            $this->contact_model->create($formArray);
            
            $this->session->set_flashdata('success','data inserted successfully!');
            redirect(baseurl().'index.php/user/index');

        }
        
    }
}
?>