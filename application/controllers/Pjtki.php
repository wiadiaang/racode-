<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pjtki extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pjtki_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pjtki/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pjtki/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pjtki/index.html';
            $config['first_url'] = base_url() . 'pjtki/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pjtki_model->total_rows($q);
        $pjtki = $this->Pjtki_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pjtki_data' => $pjtki,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','ts_pjtki_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pjtki_model->get_by_id($id);
        if ($row) {
            $data = array(
		'vendor_id' => $row->vendor_id,
		'name' => $row->name,
		'email' => $row->email,
		'password' => $row->password,
		'company' => $row->company,
		'display_name' => $row->display_name,
		'address1' => $row->address1,
		'address2' => $row->address2,
		'status' => $row->status,
		'membership' => $row->membership,
		'create_timestamp' => $row->create_timestamp,
		'approve_timestamp' => $row->approve_timestamp,
		'member_timestamp' => $row->member_timestamp,
		'member_expire_timestamp' => $row->member_expire_timestamp,
		'details' => $row->details,
		'last_login' => $row->last_login,
		'facebook' => $row->facebook,
		'skype' => $row->skype,
		'google_plus' => $row->google_plus,
		'twitter' => $row->twitter,
		'youtube' => $row->youtube,
		'pinterest' => $row->pinterest,
		'stripe_details' => $row->stripe_details,
		'paypal_email' => $row->paypal_email,
		'preferred_payment' => $row->preferred_payment,
		'cash_set' => $row->cash_set,
		'stripe_set' => $row->stripe_set,
		'paypal_set' => $row->paypal_set,
		'phone' => $row->phone,
		'mobile' => $row->mobile,
		'keywords' => $row->keywords,
		'description' => $row->description,
		'lat_lang' => $row->lat_lang,
		'area_sip1' => $row->area_sip1,
		'date_sip1' => $row->date_sip1,
		'file_sip1' => $row->file_sip1,
		'area_sip2' => $row->area_sip2,
		'date_sip2' => $row->date_sip2,
		'file_sip2' => $row->file_sip2,
		'area_sip3' => $row->area_sip3,
		'date_sip3' => $row->date_sip3,
		'file_sip3' => $row->file_sip3,
		'area_sip4' => $row->area_sip4,
		'date_sip4' => $row->date_sip4,
		'file_sip4' => $row->file_sip4,
		'area_sip5' => $row->area_sip5,
		'date_sip5' => $row->date_sip5,
		'file_sip5' => $row->file_sip5,
		'area_sip6' => $row->area_sip6,
		'date_sip6' => $row->date_sip6,
		'file_sip6' => $row->file_sip6,
		'area_sip7' => $row->area_sip7,
		'date_sip7' => $row->date_sip7,
		'file_sip7' => $row->file_sip7,
	    );
            $this->template->load('template','ts_pjtki_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pjtki'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pjtki/create_action'),
	    'vendor_id' => set_value('vendor_id'),
	    'name' => set_value('name'),
	    'email' => set_value('email'),
	    'password' => set_value('password'),
	    'company' => set_value('company'),
	    'display_name' => set_value('display_name'),
	    'address1' => set_value('address1'),
	    'address2' => set_value('address2'),
	    'status' => set_value('status'),
	    'membership' => set_value('membership'),
	    'create_timestamp' => set_value('create_timestamp'),
	    'approve_timestamp' => set_value('approve_timestamp'),
	    'member_timestamp' => set_value('member_timestamp'),
	    'member_expire_timestamp' => set_value('member_expire_timestamp'),
	    'details' => set_value('details'),
	    'last_login' => set_value('last_login'),
	    'facebook' => set_value('facebook'),
	    'skype' => set_value('skype'),
	    'google_plus' => set_value('google_plus'),
	    'twitter' => set_value('twitter'),
	    'youtube' => set_value('youtube'),
	    'pinterest' => set_value('pinterest'),
	    'stripe_details' => set_value('stripe_details'),
	    'paypal_email' => set_value('paypal_email'),
	    'preferred_payment' => set_value('preferred_payment'),
	    'cash_set' => set_value('cash_set'),
	    'stripe_set' => set_value('stripe_set'),
	    'paypal_set' => set_value('paypal_set'),
	    'phone' => set_value('phone'),
	    'mobile' => set_value('mobile'),
	    'keywords' => set_value('keywords'),
	    'description' => set_value('description'),
	    'lat_lang' => set_value('lat_lang'),
	    'area_sip1' => set_value('area_sip1'),
	    'date_sip1' => set_value('date_sip1'),
	    'file_sip1' => set_value('file_sip1'),
	    'area_sip2' => set_value('area_sip2'),
	    'date_sip2' => set_value('date_sip2'),
	    'file_sip2' => set_value('file_sip2'),
	    'area_sip3' => set_value('area_sip3'),
	    'date_sip3' => set_value('date_sip3'),
	    'file_sip3' => set_value('file_sip3'),
	    'area_sip4' => set_value('area_sip4'),
	    'date_sip4' => set_value('date_sip4'),
	    'file_sip4' => set_value('file_sip4'),
	    'area_sip5' => set_value('area_sip5'),
	    'date_sip5' => set_value('date_sip5'),
	    'file_sip5' => set_value('file_sip5'),
	    'area_sip6' => set_value('area_sip6'),
	    'date_sip6' => set_value('date_sip6'),
	    'file_sip6' => set_value('file_sip6'),
	    'area_sip7' => set_value('area_sip7'),
	    'date_sip7' => set_value('date_sip7'),
	    'file_sip7' => set_value('file_sip7'),
	);
        $this->template->load('template','ts_pjtki_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'company' => $this->input->post('company',TRUE),
		'display_name' => $this->input->post('display_name',TRUE),
		'address1' => $this->input->post('address1',TRUE),
		'address2' => $this->input->post('address2',TRUE),
		'status' => $this->input->post('status',TRUE),
		'membership' => $this->input->post('membership',TRUE),
		'create_timestamp' => $this->input->post('create_timestamp',TRUE),
		'approve_timestamp' => $this->input->post('approve_timestamp',TRUE),
		'member_timestamp' => $this->input->post('member_timestamp',TRUE),
		'member_expire_timestamp' => $this->input->post('member_expire_timestamp',TRUE),
		'details' => $this->input->post('details',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'facebook' => $this->input->post('facebook',TRUE),
		'skype' => $this->input->post('skype',TRUE),
		'google_plus' => $this->input->post('google_plus',TRUE),
		'twitter' => $this->input->post('twitter',TRUE),
		'youtube' => $this->input->post('youtube',TRUE),
		'pinterest' => $this->input->post('pinterest',TRUE),
		'stripe_details' => $this->input->post('stripe_details',TRUE),
		'paypal_email' => $this->input->post('paypal_email',TRUE),
		'preferred_payment' => $this->input->post('preferred_payment',TRUE),
		'cash_set' => $this->input->post('cash_set',TRUE),
		'stripe_set' => $this->input->post('stripe_set',TRUE),
		'paypal_set' => $this->input->post('paypal_set',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'mobile' => $this->input->post('mobile',TRUE),
		'keywords' => $this->input->post('keywords',TRUE),
		'description' => $this->input->post('description',TRUE),
		'lat_lang' => $this->input->post('lat_lang',TRUE),
		'area_sip1' => $this->input->post('area_sip1',TRUE),
		'date_sip1' => $this->input->post('date_sip1',TRUE),
		'file_sip1' => $this->input->post('file_sip1',TRUE),
		'area_sip2' => $this->input->post('area_sip2',TRUE),
		'date_sip2' => $this->input->post('date_sip2',TRUE),
		'file_sip2' => $this->input->post('file_sip2',TRUE),
		'area_sip3' => $this->input->post('area_sip3',TRUE),
		'date_sip3' => $this->input->post('date_sip3',TRUE),
		'file_sip3' => $this->input->post('file_sip3',TRUE),
		'area_sip4' => $this->input->post('area_sip4',TRUE),
		'date_sip4' => $this->input->post('date_sip4',TRUE),
		'file_sip4' => $this->input->post('file_sip4',TRUE),
		'area_sip5' => $this->input->post('area_sip5',TRUE),
		'date_sip5' => $this->input->post('date_sip5',TRUE),
		'file_sip5' => $this->input->post('file_sip5',TRUE),
		'area_sip6' => $this->input->post('area_sip6',TRUE),
		'date_sip6' => $this->input->post('date_sip6',TRUE),
		'file_sip6' => $this->input->post('file_sip6',TRUE),
		'area_sip7' => $this->input->post('area_sip7',TRUE),
		'date_sip7' => $this->input->post('date_sip7',TRUE),
		'file_sip7' => $this->input->post('file_sip7',TRUE),
	    );

            $this->Pjtki_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pjtki'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pjtki_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pjtki/update_action'),
		'vendor_id' => set_value('vendor_id', $row->vendor_id),
		'name' => set_value('name', $row->name),
		'email' => set_value('email', $row->email),
		'password' => set_value('password', $row->password),
		'company' => set_value('company', $row->company),
		'display_name' => set_value('display_name', $row->display_name),
		'address1' => set_value('address1', $row->address1),
		'address2' => set_value('address2', $row->address2),
		'status' => set_value('status', $row->status),
		'membership' => set_value('membership', $row->membership),
		'create_timestamp' => set_value('create_timestamp', $row->create_timestamp),
		'approve_timestamp' => set_value('approve_timestamp', $row->approve_timestamp),
		'member_timestamp' => set_value('member_timestamp', $row->member_timestamp),
		'member_expire_timestamp' => set_value('member_expire_timestamp', $row->member_expire_timestamp),
		'details' => set_value('details', $row->details),
		'last_login' => set_value('last_login', $row->last_login),
		'facebook' => set_value('facebook', $row->facebook),
		'skype' => set_value('skype', $row->skype),
		'google_plus' => set_value('google_plus', $row->google_plus),
		'twitter' => set_value('twitter', $row->twitter),
		'youtube' => set_value('youtube', $row->youtube),
		'pinterest' => set_value('pinterest', $row->pinterest),
		'stripe_details' => set_value('stripe_details', $row->stripe_details),
		'paypal_email' => set_value('paypal_email', $row->paypal_email),
		'preferred_payment' => set_value('preferred_payment', $row->preferred_payment),
		'cash_set' => set_value('cash_set', $row->cash_set),
		'stripe_set' => set_value('stripe_set', $row->stripe_set),
		'paypal_set' => set_value('paypal_set', $row->paypal_set),
		'phone' => set_value('phone', $row->phone),
		'mobile' => set_value('mobile', $row->mobile),
		'keywords' => set_value('keywords', $row->keywords),
		'description' => set_value('description', $row->description),
		'lat_lang' => set_value('lat_lang', $row->lat_lang),
		'area_sip1' => set_value('area_sip1', $row->area_sip1),
		'date_sip1' => set_value('date_sip1', $row->date_sip1),
		'file_sip1' => set_value('file_sip1', $row->file_sip1),
		'area_sip2' => set_value('area_sip2', $row->area_sip2),
		'date_sip2' => set_value('date_sip2', $row->date_sip2),
		'file_sip2' => set_value('file_sip2', $row->file_sip2),
		'area_sip3' => set_value('area_sip3', $row->area_sip3),
		'date_sip3' => set_value('date_sip3', $row->date_sip3),
		'file_sip3' => set_value('file_sip3', $row->file_sip3),
		'area_sip4' => set_value('area_sip4', $row->area_sip4),
		'date_sip4' => set_value('date_sip4', $row->date_sip4),
		'file_sip4' => set_value('file_sip4', $row->file_sip4),
		'area_sip5' => set_value('area_sip5', $row->area_sip5),
		'date_sip5' => set_value('date_sip5', $row->date_sip5),
		'file_sip5' => set_value('file_sip5', $row->file_sip5),
		'area_sip6' => set_value('area_sip6', $row->area_sip6),
		'date_sip6' => set_value('date_sip6', $row->date_sip6),
		'file_sip6' => set_value('file_sip6', $row->file_sip6),
		'area_sip7' => set_value('area_sip7', $row->area_sip7),
		'date_sip7' => set_value('date_sip7', $row->date_sip7),
		'file_sip7' => set_value('file_sip7', $row->file_sip7),
	    );
            $this->template->load('template','ts_pjtki_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pjtki'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('vendor_id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'company' => $this->input->post('company',TRUE),
		'display_name' => $this->input->post('display_name',TRUE),
		'address1' => $this->input->post('address1',TRUE),
		'address2' => $this->input->post('address2',TRUE),
		'status' => $this->input->post('status',TRUE),
		'membership' => $this->input->post('membership',TRUE),
		'create_timestamp' => $this->input->post('create_timestamp',TRUE),
		'approve_timestamp' => $this->input->post('approve_timestamp',TRUE),
		'member_timestamp' => $this->input->post('member_timestamp',TRUE),
		'member_expire_timestamp' => $this->input->post('member_expire_timestamp',TRUE),
		'details' => $this->input->post('details',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'facebook' => $this->input->post('facebook',TRUE),
		'skype' => $this->input->post('skype',TRUE),
		'google_plus' => $this->input->post('google_plus',TRUE),
		'twitter' => $this->input->post('twitter',TRUE),
		'youtube' => $this->input->post('youtube',TRUE),
		'pinterest' => $this->input->post('pinterest',TRUE),
		'stripe_details' => $this->input->post('stripe_details',TRUE),
		'paypal_email' => $this->input->post('paypal_email',TRUE),
		'preferred_payment' => $this->input->post('preferred_payment',TRUE),
		'cash_set' => $this->input->post('cash_set',TRUE),
		'stripe_set' => $this->input->post('stripe_set',TRUE),
		'paypal_set' => $this->input->post('paypal_set',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'mobile' => $this->input->post('mobile',TRUE),
		'keywords' => $this->input->post('keywords',TRUE),
		'description' => $this->input->post('description',TRUE),
		'lat_lang' => $this->input->post('lat_lang',TRUE),
		'area_sip1' => $this->input->post('area_sip1',TRUE),
		'date_sip1' => $this->input->post('date_sip1',TRUE),
		'file_sip1' => $this->input->post('file_sip1',TRUE),
		'area_sip2' => $this->input->post('area_sip2',TRUE),
		'date_sip2' => $this->input->post('date_sip2',TRUE),
		'file_sip2' => $this->input->post('file_sip2',TRUE),
		'area_sip3' => $this->input->post('area_sip3',TRUE),
		'date_sip3' => $this->input->post('date_sip3',TRUE),
		'file_sip3' => $this->input->post('file_sip3',TRUE),
		'area_sip4' => $this->input->post('area_sip4',TRUE),
		'date_sip4' => $this->input->post('date_sip4',TRUE),
		'file_sip4' => $this->input->post('file_sip4',TRUE),
		'area_sip5' => $this->input->post('area_sip5',TRUE),
		'date_sip5' => $this->input->post('date_sip5',TRUE),
		'file_sip5' => $this->input->post('file_sip5',TRUE),
		'area_sip6' => $this->input->post('area_sip6',TRUE),
		'date_sip6' => $this->input->post('date_sip6',TRUE),
		'file_sip6' => $this->input->post('file_sip6',TRUE),
		'area_sip7' => $this->input->post('area_sip7',TRUE),
		'date_sip7' => $this->input->post('date_sip7',TRUE),
		'file_sip7' => $this->input->post('file_sip7',TRUE),
	    );

            $this->Pjtki_model->update($this->input->post('vendor_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pjtki'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pjtki_model->get_by_id($id);

        if ($row) {
            $this->Pjtki_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pjtki'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pjtki'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('company', 'company', 'trim|required');
	$this->form_validation->set_rules('display_name', 'display name', 'trim|required');
	$this->form_validation->set_rules('address1', 'address1', 'trim|required');
	$this->form_validation->set_rules('address2', 'address2', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('membership', 'membership', 'trim|required');
	$this->form_validation->set_rules('create_timestamp', 'create timestamp', 'trim|required');
	$this->form_validation->set_rules('approve_timestamp', 'approve timestamp', 'trim|required');
	$this->form_validation->set_rules('member_timestamp', 'member timestamp', 'trim|required');
	$this->form_validation->set_rules('member_expire_timestamp', 'member expire timestamp', 'trim|required');
	$this->form_validation->set_rules('details', 'details', 'trim|required');
	$this->form_validation->set_rules('last_login', 'last login', 'trim|required');
	$this->form_validation->set_rules('facebook', 'facebook', 'trim|required');
	$this->form_validation->set_rules('skype', 'skype', 'trim|required');
	$this->form_validation->set_rules('google_plus', 'google plus', 'trim|required');
	$this->form_validation->set_rules('twitter', 'twitter', 'trim|required');
	$this->form_validation->set_rules('youtube', 'youtube', 'trim|required');
	$this->form_validation->set_rules('pinterest', 'pinterest', 'trim|required');
	$this->form_validation->set_rules('stripe_details', 'stripe details', 'trim|required');
	$this->form_validation->set_rules('paypal_email', 'paypal email', 'trim|required');
	$this->form_validation->set_rules('preferred_payment', 'preferred payment', 'trim|required');
	$this->form_validation->set_rules('cash_set', 'cash set', 'trim|required');
	$this->form_validation->set_rules('stripe_set', 'stripe set', 'trim|required');
	$this->form_validation->set_rules('paypal_set', 'paypal set', 'trim|required');
	$this->form_validation->set_rules('phone', 'phone', 'trim|required');
	$this->form_validation->set_rules('mobile', 'mobile', 'trim|required');
	$this->form_validation->set_rules('keywords', 'keywords', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');
	$this->form_validation->set_rules('lat_lang', 'lat lang', 'trim|required');
	$this->form_validation->set_rules('area_sip1', 'area sip1', 'trim|required');
	$this->form_validation->set_rules('date_sip1', 'date sip1', 'trim|required');
	$this->form_validation->set_rules('file_sip1', 'file sip1', 'trim|required');
	$this->form_validation->set_rules('area_sip2', 'area sip2', 'trim|required');
	$this->form_validation->set_rules('date_sip2', 'date sip2', 'trim|required');
	$this->form_validation->set_rules('file_sip2', 'file sip2', 'trim|required');
	$this->form_validation->set_rules('area_sip3', 'area sip3', 'trim|required');
	$this->form_validation->set_rules('date_sip3', 'date sip3', 'trim|required');
	$this->form_validation->set_rules('file_sip3', 'file sip3', 'trim|required');
	$this->form_validation->set_rules('area_sip4', 'area sip4', 'trim|required');
	$this->form_validation->set_rules('date_sip4', 'date sip4', 'trim|required');
	$this->form_validation->set_rules('file_sip4', 'file sip4', 'trim|required');
	$this->form_validation->set_rules('area_sip5', 'area sip5', 'trim|required');
	$this->form_validation->set_rules('date_sip5', 'date sip5', 'trim|required');
	$this->form_validation->set_rules('file_sip5', 'file sip5', 'trim|required');
	$this->form_validation->set_rules('area_sip6', 'area sip6', 'trim|required');
	$this->form_validation->set_rules('date_sip6', 'date sip6', 'trim|required');
	$this->form_validation->set_rules('file_sip6', 'file sip6', 'trim|required');
	$this->form_validation->set_rules('area_sip7', 'area sip7', 'trim|required');
	$this->form_validation->set_rules('date_sip7', 'date sip7', 'trim|required');
	$this->form_validation->set_rules('file_sip7', 'file sip7', 'trim|required');

	$this->form_validation->set_rules('vendor_id', 'vendor_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "ts_pjtki.xls";
        $judul = "ts_pjtki";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Company");
	xlsWriteLabel($tablehead, $kolomhead++, "Display Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Address1");
	xlsWriteLabel($tablehead, $kolomhead++, "Address2");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Membership");
	xlsWriteLabel($tablehead, $kolomhead++, "Create Timestamp");
	xlsWriteLabel($tablehead, $kolomhead++, "Approve Timestamp");
	xlsWriteLabel($tablehead, $kolomhead++, "Member Timestamp");
	xlsWriteLabel($tablehead, $kolomhead++, "Member Expire Timestamp");
	xlsWriteLabel($tablehead, $kolomhead++, "Details");
	xlsWriteLabel($tablehead, $kolomhead++, "Last Login");
	xlsWriteLabel($tablehead, $kolomhead++, "Facebook");
	xlsWriteLabel($tablehead, $kolomhead++, "Skype");
	xlsWriteLabel($tablehead, $kolomhead++, "Google Plus");
	xlsWriteLabel($tablehead, $kolomhead++, "Twitter");
	xlsWriteLabel($tablehead, $kolomhead++, "Youtube");
	xlsWriteLabel($tablehead, $kolomhead++, "Pinterest");
	xlsWriteLabel($tablehead, $kolomhead++, "Stripe Details");
	xlsWriteLabel($tablehead, $kolomhead++, "Paypal Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Preferred Payment");
	xlsWriteLabel($tablehead, $kolomhead++, "Cash Set");
	xlsWriteLabel($tablehead, $kolomhead++, "Stripe Set");
	xlsWriteLabel($tablehead, $kolomhead++, "Paypal Set");
	xlsWriteLabel($tablehead, $kolomhead++, "Phone");
	xlsWriteLabel($tablehead, $kolomhead++, "Mobile");
	xlsWriteLabel($tablehead, $kolomhead++, "Keywords");
	xlsWriteLabel($tablehead, $kolomhead++, "Description");
	xlsWriteLabel($tablehead, $kolomhead++, "Lat Lang");
	xlsWriteLabel($tablehead, $kolomhead++, "Area Sip1");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Sip1");
	xlsWriteLabel($tablehead, $kolomhead++, "File Sip1");
	xlsWriteLabel($tablehead, $kolomhead++, "Area Sip2");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Sip2");
	xlsWriteLabel($tablehead, $kolomhead++, "File Sip2");
	xlsWriteLabel($tablehead, $kolomhead++, "Area Sip3");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Sip3");
	xlsWriteLabel($tablehead, $kolomhead++, "File Sip3");
	xlsWriteLabel($tablehead, $kolomhead++, "Area Sip4");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Sip4");
	xlsWriteLabel($tablehead, $kolomhead++, "File Sip4");
	xlsWriteLabel($tablehead, $kolomhead++, "Area Sip5");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Sip5");
	xlsWriteLabel($tablehead, $kolomhead++, "File Sip5");
	xlsWriteLabel($tablehead, $kolomhead++, "Area Sip6");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Sip6");
	xlsWriteLabel($tablehead, $kolomhead++, "File Sip6");
	xlsWriteLabel($tablehead, $kolomhead++, "Area Sip7");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Sip7");
	xlsWriteLabel($tablehead, $kolomhead++, "File Sip7");

	foreach ($this->Pjtki_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->company);
	    xlsWriteLabel($tablebody, $kolombody++, $data->display_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->address1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->address2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->membership);
	    xlsWriteNumber($tablebody, $kolombody++, $data->create_timestamp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->approve_timestamp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->member_timestamp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->member_expire_timestamp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->details);
	    xlsWriteNumber($tablebody, $kolombody++, $data->last_login);
	    xlsWriteLabel($tablebody, $kolombody++, $data->facebook);
	    xlsWriteLabel($tablebody, $kolombody++, $data->skype);
	    xlsWriteLabel($tablebody, $kolombody++, $data->google_plus);
	    xlsWriteLabel($tablebody, $kolombody++, $data->twitter);
	    xlsWriteLabel($tablebody, $kolombody++, $data->youtube);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pinterest);
	    xlsWriteLabel($tablebody, $kolombody++, $data->stripe_details);
	    xlsWriteLabel($tablebody, $kolombody++, $data->paypal_email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->preferred_payment);
	    xlsWriteLabel($tablebody, $kolombody++, $data->cash_set);
	    xlsWriteLabel($tablebody, $kolombody++, $data->stripe_set);
	    xlsWriteLabel($tablebody, $kolombody++, $data->paypal_set);
	    xlsWriteLabel($tablebody, $kolombody++, $data->phone);
	    xlsWriteLabel($tablebody, $kolombody++, $data->mobile);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keywords);
	    xlsWriteLabel($tablebody, $kolombody++, $data->description);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lat_lang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->area_sip1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_sip1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_sip1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->area_sip2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_sip2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_sip2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->area_sip3);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_sip3);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_sip3);
	    xlsWriteLabel($tablebody, $kolombody++, $data->area_sip4);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_sip4);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_sip4);
	    xlsWriteLabel($tablebody, $kolombody++, $data->area_sip5);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_sip5);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_sip5);
	    xlsWriteLabel($tablebody, $kolombody++, $data->area_sip6);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_sip6);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_sip6);
	    xlsWriteLabel($tablebody, $kolombody++, $data->area_sip7);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_sip7);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_sip7);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=ts_pjtki.doc");

        $data = array(
            'ts_pjtki_data' => $this->Pjtki_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('ts_pjtki_doc',$data);
    }

}

/* End of file Pjtki.php */
/* Location: ./application/controllers/Pjtki.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-24 10:05:29 */
/* http://harviacode.com */