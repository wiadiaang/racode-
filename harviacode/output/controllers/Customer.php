<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'customer/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'customer/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'customer/index.html';
            $config['first_url'] = base_url() . 'customer/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Customer_model->total_rows($q);
        $customer = $this->Customer_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'customer_data' => $customer,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','mt_client_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Customer_model->get_by_id($id);
        if ($row) {
            $data = array(
		'client_id' => $row->client_id,
		'social_strategy' => $row->social_strategy,
		'first_name' => $row->first_name,
		'last_name' => $row->last_name,
		'email_address' => $row->email_address,
		'password' => $row->password,
		'street' => $row->street,
		'city' => $row->city,
		'state' => $row->state,
		'zipcode' => $row->zipcode,
		'country_code' => $row->country_code,
		'location_name' => $row->location_name,
		'contact_phone' => $row->contact_phone,
		'lost_password_token' => $row->lost_password_token,
		'date_created' => $row->date_created,
		'date_modified' => $row->date_modified,
		'last_login' => $row->last_login,
		'ip_address' => $row->ip_address,
		'status' => $row->status,
		'token' => $row->token,
		'mobile_verification_code' => $row->mobile_verification_code,
		'mobile_verification_date' => $row->mobile_verification_date,
		'custom_field1' => $row->custom_field1,
		'custom_field2' => $row->custom_field2,
		'avatar' => $row->avatar,
		'email_verification_code' => $row->email_verification_code,
		'is_guest' => $row->is_guest,
		'id_session' => $row->id_session,
	    );
            $this->template->load('template','mt_client_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('customer'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('customer/create_action'),
	    'client_id' => set_value('client_id'),
	    'social_strategy' => set_value('social_strategy'),
	    'first_name' => set_value('first_name'),
	    'last_name' => set_value('last_name'),
	    'email_address' => set_value('email_address'),
	    'password' => set_value('password'),
	    'street' => set_value('street'),
	    'city' => set_value('city'),
	    'state' => set_value('state'),
	    'zipcode' => set_value('zipcode'),
	    'country_code' => set_value('country_code'),
	    'location_name' => set_value('location_name'),
	    'contact_phone' => set_value('contact_phone'),
	    'lost_password_token' => set_value('lost_password_token'),
	    'date_created' => set_value('date_created'),
	    'date_modified' => set_value('date_modified'),
	    'last_login' => set_value('last_login'),
	    'ip_address' => set_value('ip_address'),
	    'status' => set_value('status'),
	    'token' => set_value('token'),
	    'mobile_verification_code' => set_value('mobile_verification_code'),
	    'mobile_verification_date' => set_value('mobile_verification_date'),
	    'custom_field1' => set_value('custom_field1'),
	    'custom_field2' => set_value('custom_field2'),
	    'avatar' => set_value('avatar'),
	    'email_verification_code' => set_value('email_verification_code'),
	    'is_guest' => set_value('is_guest'),
	    'id_session' => set_value('id_session'),
	);
        $this->template->load('template','mt_client_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'social_strategy' => $this->input->post('social_strategy',TRUE),
		'first_name' => $this->input->post('first_name',TRUE),
		'last_name' => $this->input->post('last_name',TRUE),
		'email_address' => $this->input->post('email_address',TRUE),
		'password' => $this->input->post('password',TRUE),
		'street' => $this->input->post('street',TRUE),
		'city' => $this->input->post('city',TRUE),
		'state' => $this->input->post('state',TRUE),
		'zipcode' => $this->input->post('zipcode',TRUE),
		'country_code' => $this->input->post('country_code',TRUE),
		'location_name' => $this->input->post('location_name',TRUE),
		'contact_phone' => $this->input->post('contact_phone',TRUE),
		'lost_password_token' => $this->input->post('lost_password_token',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'status' => $this->input->post('status',TRUE),
		'token' => $this->input->post('token',TRUE),
		'mobile_verification_code' => $this->input->post('mobile_verification_code',TRUE),
		'mobile_verification_date' => $this->input->post('mobile_verification_date',TRUE),
		'custom_field1' => $this->input->post('custom_field1',TRUE),
		'custom_field2' => $this->input->post('custom_field2',TRUE),
		'avatar' => $this->input->post('avatar',TRUE),
		'email_verification_code' => $this->input->post('email_verification_code',TRUE),
		'is_guest' => $this->input->post('is_guest',TRUE),
		'id_session' => $this->input->post('id_session',TRUE),
	    );

            $this->Customer_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('customer'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Customer_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('customer/update_action'),
		'client_id' => set_value('client_id', $row->client_id),
		'social_strategy' => set_value('social_strategy', $row->social_strategy),
		'first_name' => set_value('first_name', $row->first_name),
		'last_name' => set_value('last_name', $row->last_name),
		'email_address' => set_value('email_address', $row->email_address),
		'password' => set_value('password', $row->password),
		'street' => set_value('street', $row->street),
		'city' => set_value('city', $row->city),
		'state' => set_value('state', $row->state),
		'zipcode' => set_value('zipcode', $row->zipcode),
		'country_code' => set_value('country_code', $row->country_code),
		'location_name' => set_value('location_name', $row->location_name),
		'contact_phone' => set_value('contact_phone', $row->contact_phone),
		'lost_password_token' => set_value('lost_password_token', $row->lost_password_token),
		'date_created' => set_value('date_created', $row->date_created),
		'date_modified' => set_value('date_modified', $row->date_modified),
		'last_login' => set_value('last_login', $row->last_login),
		'ip_address' => set_value('ip_address', $row->ip_address),
		'status' => set_value('status', $row->status),
		'token' => set_value('token', $row->token),
		'mobile_verification_code' => set_value('mobile_verification_code', $row->mobile_verification_code),
		'mobile_verification_date' => set_value('mobile_verification_date', $row->mobile_verification_date),
		'custom_field1' => set_value('custom_field1', $row->custom_field1),
		'custom_field2' => set_value('custom_field2', $row->custom_field2),
		'avatar' => set_value('avatar', $row->avatar),
		'email_verification_code' => set_value('email_verification_code', $row->email_verification_code),
		'is_guest' => set_value('is_guest', $row->is_guest),
		'id_session' => set_value('id_session', $row->id_session),
	    );
            $this->template->load('template','mt_client_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('customer'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('client_id', TRUE));
        } else {
            $data = array(
		'social_strategy' => $this->input->post('social_strategy',TRUE),
		'first_name' => $this->input->post('first_name',TRUE),
		'last_name' => $this->input->post('last_name',TRUE),
		'email_address' => $this->input->post('email_address',TRUE),
		'password' => $this->input->post('password',TRUE),
		'street' => $this->input->post('street',TRUE),
		'city' => $this->input->post('city',TRUE),
		'state' => $this->input->post('state',TRUE),
		'zipcode' => $this->input->post('zipcode',TRUE),
		'country_code' => $this->input->post('country_code',TRUE),
		'location_name' => $this->input->post('location_name',TRUE),
		'contact_phone' => $this->input->post('contact_phone',TRUE),
		'lost_password_token' => $this->input->post('lost_password_token',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'status' => $this->input->post('status',TRUE),
		'token' => $this->input->post('token',TRUE),
		'mobile_verification_code' => $this->input->post('mobile_verification_code',TRUE),
		'mobile_verification_date' => $this->input->post('mobile_verification_date',TRUE),
		'custom_field1' => $this->input->post('custom_field1',TRUE),
		'custom_field2' => $this->input->post('custom_field2',TRUE),
		'avatar' => $this->input->post('avatar',TRUE),
		'email_verification_code' => $this->input->post('email_verification_code',TRUE),
		'is_guest' => $this->input->post('is_guest',TRUE),
		'id_session' => $this->input->post('id_session',TRUE),
	    );

            $this->Customer_model->update($this->input->post('client_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('customer'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Customer_model->get_by_id($id);

        if ($row) {
            $this->Customer_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('customer'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('customer'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('social_strategy', 'social strategy', 'trim|required');
	$this->form_validation->set_rules('first_name', 'first name', 'trim|required');
	$this->form_validation->set_rules('last_name', 'last name', 'trim|required');
	$this->form_validation->set_rules('email_address', 'email address', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('street', 'street', 'trim|required');
	$this->form_validation->set_rules('city', 'city', 'trim|required');
	$this->form_validation->set_rules('state', 'state', 'trim|required');
	$this->form_validation->set_rules('zipcode', 'zipcode', 'trim|required');
	$this->form_validation->set_rules('country_code', 'country code', 'trim|required');
	$this->form_validation->set_rules('location_name', 'location name', 'trim|required');
	$this->form_validation->set_rules('contact_phone', 'contact phone', 'trim|required');
	$this->form_validation->set_rules('lost_password_token', 'lost password token', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('last_login', 'last login', 'trim|required');
	$this->form_validation->set_rules('ip_address', 'ip address', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('token', 'token', 'trim|required');
	$this->form_validation->set_rules('mobile_verification_code', 'mobile verification code', 'trim|required');
	$this->form_validation->set_rules('mobile_verification_date', 'mobile verification date', 'trim|required');
	$this->form_validation->set_rules('custom_field1', 'custom field1', 'trim|required');
	$this->form_validation->set_rules('custom_field2', 'custom field2', 'trim|required');
	$this->form_validation->set_rules('avatar', 'avatar', 'trim|required');
	$this->form_validation->set_rules('email_verification_code', 'email verification code', 'trim|required');
	$this->form_validation->set_rules('is_guest', 'is guest', 'trim|required');
	$this->form_validation->set_rules('id_session', 'id session', 'trim|required');

	$this->form_validation->set_rules('client_id', 'client_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-02 02:10:17 */
/* http://harviacode.com */