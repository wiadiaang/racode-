<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Country extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Country_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $country = $this->Country_model->get_all();

        $data = array(
            'country_data' => $country
        );

        $this->template->load('template','ts_country_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Country_model->get_by_id($id);
        if ($row) {
            $data = array(
		'countryId' => $row->countryId,
		'countryName' => $row->countryName,
		'countryCode' => $row->countryCode,
	    );
            $this->template->load('template','ts_country_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('country'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('country/create_action'),
	    'countryId' => set_value('countryId'),
	    'countryName' => set_value('countryName'),
	    'countryCode' => set_value('countryCode'),
	);
        $this->template->load('template','ts_country_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'countryName' => $this->input->post('countryName',TRUE),
		'countryCode' => $this->input->post('countryCode',TRUE),
	    );

            $this->Country_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('country'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Country_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('country/update_action'),
		'countryId' => set_value('countryId', $row->countryId),
		'countryName' => set_value('countryName', $row->countryName),
		'countryCode' => set_value('countryCode', $row->countryCode),
	    );
            $this->template->load('template','ts_country_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('country'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('countryId', TRUE));
        } else {
            $data = array(
		'countryName' => $this->input->post('countryName',TRUE),
		'countryCode' => $this->input->post('countryCode',TRUE),
	    );

            $this->Country_model->update($this->input->post('countryId', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('country'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Country_model->get_by_id($id);

        if ($row) {
            $this->Country_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('country'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('country'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('countryName', 'countryname', 'trim|required');
	$this->form_validation->set_rules('countryCode', 'countrycode', 'trim|required');

	$this->form_validation->set_rules('countryId', 'countryId', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Country.php */
/* Location: ./application/controllers/Country.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-27 07:31:31 */
/* http://harviacode.com */