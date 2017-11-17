<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rating_meaning extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Rating_meaning_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'rating_meaning/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'rating_meaning/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'rating_meaning/index.html';
            $config['first_url'] = base_url() . 'rating_meaning/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Rating_meaning_model->total_rows($q);
        $rating_meaning = $this->Rating_meaning_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'rating_meaning_data' => $rating_meaning,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','mt_rating_meaning_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Rating_meaning_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'rating_start' => $row->rating_start,
		'rating_end' => $row->rating_end,
		'meaning' => $row->meaning,
		'date_created' => $row->date_created,
		'date_modified' => $row->date_modified,
		'ip_address' => $row->ip_address,
	    );
            $this->template->load('template','mt_rating_meaning_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('rating_meaning'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('rating_meaning/create_action'),
	    'id' => set_value('id'),
	    'rating_start' => set_value('rating_start'),
	    'rating_end' => set_value('rating_end'),
	    'meaning' => set_value('meaning'),
	    'date_created' => set_value('date_created'),
	    'date_modified' => set_value('date_modified'),
	    'ip_address' => set_value('ip_address'),
	);
        $this->template->load('template','mt_rating_meaning_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'rating_start' => $this->input->post('rating_start',TRUE),
		'rating_end' => $this->input->post('rating_end',TRUE),
		'meaning' => $this->input->post('meaning',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
	    );

            $this->Rating_meaning_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('rating_meaning'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Rating_meaning_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('rating_meaning/update_action'),
		'id' => set_value('id', $row->id),
		'rating_start' => set_value('rating_start', $row->rating_start),
		'rating_end' => set_value('rating_end', $row->rating_end),
		'meaning' => set_value('meaning', $row->meaning),
		'date_created' => set_value('date_created', $row->date_created),
		'date_modified' => set_value('date_modified', $row->date_modified),
		'ip_address' => set_value('ip_address', $row->ip_address),
	    );
            $this->template->load('template','mt_rating_meaning_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('rating_meaning'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'rating_start' => $this->input->post('rating_start',TRUE),
		'rating_end' => $this->input->post('rating_end',TRUE),
		'meaning' => $this->input->post('meaning',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
	    );

            $this->Rating_meaning_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('rating_meaning'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Rating_meaning_model->get_by_id($id);

        if ($row) {
            $this->Rating_meaning_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('rating_meaning'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('rating_meaning'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('rating_start', 'rating start', 'trim|required');
	$this->form_validation->set_rules('rating_end', 'rating end', 'trim|required');
	$this->form_validation->set_rules('meaning', 'meaning', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('ip_address', 'ip address', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Rating_meaning.php */
/* Location: ./application/controllers/Rating_meaning.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-02 03:11:05 */
/* http://harviacode.com */