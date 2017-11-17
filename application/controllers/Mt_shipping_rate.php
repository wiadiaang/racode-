<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mt_shipping_rate extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mt_shipping_rate_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $mt_shipping_rate = $this->Mt_shipping_rate_model->get_all();

        $data = array(
            'mt_shipping_rate_data' => $mt_shipping_rate
        );

        $this->template->load('template','mt_shipping_rate_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Mt_shipping_rate_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'merchant_id' => $row->merchant_id,
		'distance_from' => $row->distance_from,
		'distance_to' => $row->distance_to,
		'shipping_units' => $row->shipping_units,
		'distance_price' => $row->distance_price,
	    );
            $this->template->load('template','mt_shipping_rate_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mt_shipping_rate'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mt_shipping_rate/create_action'),
	    'id' => set_value('id'),
	    'merchant_id' => set_value('merchant_id'),
	    'distance_from' => set_value('distance_from'),
	    'distance_to' => set_value('distance_to'),
	    'shipping_units' => set_value('shipping_units'),
	    'distance_price' => set_value('distance_price'),
	);
        $this->template->load('template','mt_shipping_rate_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'merchant_id' => $this->input->post('merchant_id',TRUE),
		'distance_from' => $this->input->post('distance_from',TRUE),
		'distance_to' => $this->input->post('distance_to',TRUE),
		'shipping_units' => $this->input->post('shipping_units',TRUE),
		'distance_price' => $this->input->post('distance_price',TRUE),
	    );

            $this->Mt_shipping_rate_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mt_shipping_rate'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mt_shipping_rate_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mt_shipping_rate/update_action'),
		'id' => set_value('id', $row->id),
		'merchant_id' => set_value('merchant_id', $row->merchant_id),
		'distance_from' => set_value('distance_from', $row->distance_from),
		'distance_to' => set_value('distance_to', $row->distance_to),
		'shipping_units' => set_value('shipping_units', $row->shipping_units),
		'distance_price' => set_value('distance_price', $row->distance_price),
	    );
            $this->template->load('template','mt_shipping_rate_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mt_shipping_rate'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'merchant_id' => $this->input->post('merchant_id',TRUE),
		'distance_from' => $this->input->post('distance_from',TRUE),
		'distance_to' => $this->input->post('distance_to',TRUE),
		'shipping_units' => $this->input->post('shipping_units',TRUE),
		'distance_price' => $this->input->post('distance_price',TRUE),
	    );

            $this->Mt_shipping_rate_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mt_shipping_rate'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mt_shipping_rate_model->get_by_id($id);

        if ($row) {
            $this->Mt_shipping_rate_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mt_shipping_rate'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mt_shipping_rate'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('merchant_id', 'merchant id', 'trim|required');
	$this->form_validation->set_rules('distance_from', 'distance from', 'trim|required');
	$this->form_validation->set_rules('distance_to', 'distance to', 'trim|required');
	$this->form_validation->set_rules('shipping_units', 'shipping units', 'trim|required');
	$this->form_validation->set_rules('distance_price', 'distance price', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mt_shipping_rate.php */
/* Location: ./application/controllers/Mt_shipping_rate.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-02 03:11:29 */
/* http://harviacode.com */