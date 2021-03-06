<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Religion extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Religion_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $religion = $this->Religion_model->get_all();

        $data = array(
            'religion_data' => $religion
        );

        $this->template->load('template','ts_religion_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Religion_model->get_by_id($id);
        if ($row) {
            $data = array(
		'religion_id' => $row->religion_id,
		'religion_name' => $row->religion_name,
	    );
            $this->template->load('template','ts_religion_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('religion'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('religion/create_action'),
	    'religion_id' => set_value('religion_id'),
	    'religion_name' => set_value('religion_name'),
	);
        $this->template->load('template','ts_religion_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'religion_name' => $this->input->post('religion_name',TRUE),
	    );

            $this->Religion_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('religion'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Religion_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('religion/update_action'),
		'religion_id' => set_value('religion_id', $row->religion_id),
		'religion_name' => set_value('religion_name', $row->religion_name),
	    );
            $this->template->load('template','ts_religion_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('religion'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('religion_id', TRUE));
        } else {
            $data = array(
		'religion_name' => $this->input->post('religion_name',TRUE),
	    );

            $this->Religion_model->update($this->input->post('religion_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('religion'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Religion_model->get_by_id($id);

        if ($row) {
            $this->Religion_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('religion'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('religion'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('religion_name', 'religion name', 'trim|required');

	$this->form_validation->set_rules('religion_id', 'religion_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Religion.php */
/* Location: ./application/controllers/Religion.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-27 03:36:04 */
/* http://harviacode.com */