<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mt_merchant extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mt_merchant_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $mt_merchant = $this->Mt_merchant_model->get_all();

        $data = array(
            'mt_merchant_data' => $mt_merchant
        );

        $this->template->load('template','mt_merchant_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Mt_merchant_model->get_by_id($id);
        if ($row) {
            $data = array(
		'merchant_id' => $row->merchant_id,
		'restaurant_slug' => $row->restaurant_slug,
		'restaurant_name' => $row->restaurant_name,
		'restaurant_phone' => $row->restaurant_phone,
		'contact_name' => $row->contact_name,
		'contact_phone' => $row->contact_phone,
		'contact_email' => $row->contact_email,
		'country_code' => $row->country_code,
		'street' => $row->street,
		'city' => $row->city,
		'state' => $row->state,
		'post_code' => $row->post_code,
		'cuisine' => $row->cuisine,
		'service' => $row->service,
		'free_delivery' => $row->free_delivery,
		'delivery_estimation' => $row->delivery_estimation,
		'username' => $row->username,
		'password' => $row->password,
		'activation_key' => $row->activation_key,
		'activation_token' => $row->activation_token,
		'status' => $row->status,
		'date_created' => $row->date_created,
		'date_modified' => $row->date_modified,
		'date_activated' => $row->date_activated,
		'last_login' => $row->last_login,
		'ip_address' => $row->ip_address,
		'package_id' => $row->package_id,
		'package_price' => $row->package_price,
		'membership_expired' => $row->membership_expired,
		'payment_steps' => $row->payment_steps,
		'is_featured' => $row->is_featured,
		'is_ready' => $row->is_ready,
		'is_sponsored' => $row->is_sponsored,
		'sponsored_expiration' => $row->sponsored_expiration,
		'lost_password_code' => $row->lost_password_code,
		'user_lang' => $row->user_lang,
		'membership_purchase_date' => $row->membership_purchase_date,
		'sort_featured' => $row->sort_featured,
		'is_commission' => $row->is_commission,
		'percent_commision' => $row->percent_commision,
		'abn' => $row->abn,
		'session_token' => $row->session_token,
		'commision_type' => $row->commision_type,
		'mobile_session_token' => $row->mobile_session_token,
		'token' => $row->token,
		'id_session' => $row->id_session,
	    );
            $this->template->load('template','mt_merchant_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mt_merchant'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mt_merchant/create_action'),
	    'merchant_id' => set_value('merchant_id'),
	    'restaurant_slug' => set_value('restaurant_slug'),
	    'restaurant_name' => set_value('restaurant_name'),
	    'restaurant_phone' => set_value('restaurant_phone'),
	    'contact_name' => set_value('contact_name'),
	    'contact_phone' => set_value('contact_phone'),
	    'contact_email' => set_value('contact_email'),
	    'country_code' => set_value('country_code'),
	    'street' => set_value('street'),
	    'city' => set_value('city'),
	    'state' => set_value('state'),
	    'post_code' => set_value('post_code'),
	    'cuisine' => set_value('cuisine'),
	    'service' => set_value('service'),
	    'free_delivery' => set_value('free_delivery'),
	    'delivery_estimation' => set_value('delivery_estimation'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'activation_key' => set_value('activation_key'),
	    'activation_token' => set_value('activation_token'),
	    'status' => set_value('status'),
	    'date_created' => set_value('date_created'),
	    'date_modified' => set_value('date_modified'),
	    'date_activated' => set_value('date_activated'),
	    'last_login' => set_value('last_login'),
	    'ip_address' => set_value('ip_address'),
	    'package_id' => set_value('package_id'),
	    'package_price' => set_value('package_price'),
	    'membership_expired' => set_value('membership_expired'),
	    'payment_steps' => set_value('payment_steps'),
	    'is_featured' => set_value('is_featured'),
	    'is_ready' => set_value('is_ready'),
	    'is_sponsored' => set_value('is_sponsored'),
	    'sponsored_expiration' => set_value('sponsored_expiration'),
	    'lost_password_code' => set_value('lost_password_code'),
	    'user_lang' => set_value('user_lang'),
	    'membership_purchase_date' => set_value('membership_purchase_date'),
	    'sort_featured' => set_value('sort_featured'),
	    'is_commission' => set_value('is_commission'),
	    'percent_commision' => set_value('percent_commision'),
	    'abn' => set_value('abn'),
	    'session_token' => set_value('session_token'),
	    'commision_type' => set_value('commision_type'),
	    'mobile_session_token' => set_value('mobile_session_token'),
	    'token' => set_value('token'),
	    'id_session' => set_value('id_session'),
	);
        $this->template->load('template','mt_merchant_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'restaurant_slug' => $this->input->post('restaurant_slug',TRUE),
		'restaurant_name' => $this->input->post('restaurant_name',TRUE),
		'restaurant_phone' => $this->input->post('restaurant_phone',TRUE),
		'contact_name' => $this->input->post('contact_name',TRUE),
		'contact_phone' => $this->input->post('contact_phone',TRUE),
		'contact_email' => $this->input->post('contact_email',TRUE),
		'country_code' => $this->input->post('country_code',TRUE),
		'street' => $this->input->post('street',TRUE),
		'city' => $this->input->post('city',TRUE),
		'state' => $this->input->post('state',TRUE),
		'post_code' => $this->input->post('post_code',TRUE),
		'cuisine' => $this->input->post('cuisine',TRUE),
		'service' => $this->input->post('service',TRUE),
		'free_delivery' => $this->input->post('free_delivery',TRUE),
		'delivery_estimation' => $this->input->post('delivery_estimation',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'activation_key' => $this->input->post('activation_key',TRUE),
		'activation_token' => $this->input->post('activation_token',TRUE),
		'status' => $this->input->post('status',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'date_activated' => $this->input->post('date_activated',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'package_id' => $this->input->post('package_id',TRUE),
		'package_price' => $this->input->post('package_price',TRUE),
		'membership_expired' => $this->input->post('membership_expired',TRUE),
		'payment_steps' => $this->input->post('payment_steps',TRUE),
		'is_featured' => $this->input->post('is_featured',TRUE),
		'is_ready' => $this->input->post('is_ready',TRUE),
		'is_sponsored' => $this->input->post('is_sponsored',TRUE),
		'sponsored_expiration' => $this->input->post('sponsored_expiration',TRUE),
		'lost_password_code' => $this->input->post('lost_password_code',TRUE),
		'user_lang' => $this->input->post('user_lang',TRUE),
		'membership_purchase_date' => $this->input->post('membership_purchase_date',TRUE),
		'sort_featured' => $this->input->post('sort_featured',TRUE),
		'is_commission' => $this->input->post('is_commission',TRUE),
		'percent_commision' => $this->input->post('percent_commision',TRUE),
		'abn' => $this->input->post('abn',TRUE),
		'session_token' => $this->input->post('session_token',TRUE),
		'commision_type' => $this->input->post('commision_type',TRUE),
		'mobile_session_token' => $this->input->post('mobile_session_token',TRUE),
		'token' => $this->input->post('token',TRUE),
		'id_session' => $this->input->post('id_session',TRUE),
	    );

            $this->Mt_merchant_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mt_merchant'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mt_merchant_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mt_merchant/update_action'),
		'merchant_id' => set_value('merchant_id', $row->merchant_id),
		'restaurant_slug' => set_value('restaurant_slug', $row->restaurant_slug),
		'restaurant_name' => set_value('restaurant_name', $row->restaurant_name),
		'restaurant_phone' => set_value('restaurant_phone', $row->restaurant_phone),
		'contact_name' => set_value('contact_name', $row->contact_name),
		'contact_phone' => set_value('contact_phone', $row->contact_phone),
		'contact_email' => set_value('contact_email', $row->contact_email),
		'country_code' => set_value('country_code', $row->country_code),
		'street' => set_value('street', $row->street),
		'city' => set_value('city', $row->city),
		'state' => set_value('state', $row->state),
		'post_code' => set_value('post_code', $row->post_code),
		'cuisine' => set_value('cuisine', $row->cuisine),
		'service' => set_value('service', $row->service),
		'free_delivery' => set_value('free_delivery', $row->free_delivery),
		'delivery_estimation' => set_value('delivery_estimation', $row->delivery_estimation),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'activation_key' => set_value('activation_key', $row->activation_key),
		'activation_token' => set_value('activation_token', $row->activation_token),
		'status' => set_value('status', $row->status),
		'date_created' => set_value('date_created', $row->date_created),
		'date_modified' => set_value('date_modified', $row->date_modified),
		'date_activated' => set_value('date_activated', $row->date_activated),
		'last_login' => set_value('last_login', $row->last_login),
		'ip_address' => set_value('ip_address', $row->ip_address),
		'package_id' => set_value('package_id', $row->package_id),
		'package_price' => set_value('package_price', $row->package_price),
		'membership_expired' => set_value('membership_expired', $row->membership_expired),
		'payment_steps' => set_value('payment_steps', $row->payment_steps),
		'is_featured' => set_value('is_featured', $row->is_featured),
		'is_ready' => set_value('is_ready', $row->is_ready),
		'is_sponsored' => set_value('is_sponsored', $row->is_sponsored),
		'sponsored_expiration' => set_value('sponsored_expiration', $row->sponsored_expiration),
		'lost_password_code' => set_value('lost_password_code', $row->lost_password_code),
		'user_lang' => set_value('user_lang', $row->user_lang),
		'membership_purchase_date' => set_value('membership_purchase_date', $row->membership_purchase_date),
		'sort_featured' => set_value('sort_featured', $row->sort_featured),
		'is_commission' => set_value('is_commission', $row->is_commission),
		'percent_commision' => set_value('percent_commision', $row->percent_commision),
		'abn' => set_value('abn', $row->abn),
		'session_token' => set_value('session_token', $row->session_token),
		'commision_type' => set_value('commision_type', $row->commision_type),
		'mobile_session_token' => set_value('mobile_session_token', $row->mobile_session_token),
		'token' => set_value('token', $row->token),
		'id_session' => set_value('id_session', $row->id_session),
	    );
            $this->template->load('template','mt_merchant_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mt_merchant'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('merchant_id', TRUE));
        } else {
            $data = array(
		'restaurant_slug' => $this->input->post('restaurant_slug',TRUE),
		'restaurant_name' => $this->input->post('restaurant_name',TRUE),
		'restaurant_phone' => $this->input->post('restaurant_phone',TRUE),
		'contact_name' => $this->input->post('contact_name',TRUE),
		'contact_phone' => $this->input->post('contact_phone',TRUE),
		'contact_email' => $this->input->post('contact_email',TRUE),
		'country_code' => $this->input->post('country_code',TRUE),
		'street' => $this->input->post('street',TRUE),
		'city' => $this->input->post('city',TRUE),
		'state' => $this->input->post('state',TRUE),
		'post_code' => $this->input->post('post_code',TRUE),
		'cuisine' => $this->input->post('cuisine',TRUE),
		'service' => $this->input->post('service',TRUE),
		'free_delivery' => $this->input->post('free_delivery',TRUE),
		'delivery_estimation' => $this->input->post('delivery_estimation',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'activation_key' => $this->input->post('activation_key',TRUE),
		'activation_token' => $this->input->post('activation_token',TRUE),
		'status' => $this->input->post('status',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'date_activated' => $this->input->post('date_activated',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'package_id' => $this->input->post('package_id',TRUE),
		'package_price' => $this->input->post('package_price',TRUE),
		'membership_expired' => $this->input->post('membership_expired',TRUE),
		'payment_steps' => $this->input->post('payment_steps',TRUE),
		'is_featured' => $this->input->post('is_featured',TRUE),
		'is_ready' => $this->input->post('is_ready',TRUE),
		'is_sponsored' => $this->input->post('is_sponsored',TRUE),
		'sponsored_expiration' => $this->input->post('sponsored_expiration',TRUE),
		'lost_password_code' => $this->input->post('lost_password_code',TRUE),
		'user_lang' => $this->input->post('user_lang',TRUE),
		'membership_purchase_date' => $this->input->post('membership_purchase_date',TRUE),
		'sort_featured' => $this->input->post('sort_featured',TRUE),
		'is_commission' => $this->input->post('is_commission',TRUE),
		'percent_commision' => $this->input->post('percent_commision',TRUE),
		'abn' => $this->input->post('abn',TRUE),
		'session_token' => $this->input->post('session_token',TRUE),
		'commision_type' => $this->input->post('commision_type',TRUE),
		'mobile_session_token' => $this->input->post('mobile_session_token',TRUE),
		'token' => $this->input->post('token',TRUE),
		'id_session' => $this->input->post('id_session',TRUE),
	    );

            $this->Mt_merchant_model->update($this->input->post('merchant_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mt_merchant'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mt_merchant_model->get_by_id($id);

        if ($row) {
            $this->Mt_merchant_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mt_merchant'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mt_merchant'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('restaurant_slug', 'restaurant slug', 'trim|required');
	$this->form_validation->set_rules('restaurant_name', 'restaurant name', 'trim|required');
	$this->form_validation->set_rules('restaurant_phone', 'restaurant phone', 'trim|required');
	$this->form_validation->set_rules('contact_name', 'contact name', 'trim|required');
	$this->form_validation->set_rules('contact_phone', 'contact phone', 'trim|required');
	$this->form_validation->set_rules('contact_email', 'contact email', 'trim|required');
	$this->form_validation->set_rules('country_code', 'country code', 'trim|required');
	$this->form_validation->set_rules('street', 'street', 'trim|required');
	$this->form_validation->set_rules('city', 'city', 'trim|required');
	$this->form_validation->set_rules('state', 'state', 'trim|required');
	$this->form_validation->set_rules('post_code', 'post code', 'trim|required');
	$this->form_validation->set_rules('cuisine', 'cuisine', 'trim|required');
	$this->form_validation->set_rules('service', 'service', 'trim|required');
	$this->form_validation->set_rules('free_delivery', 'free delivery', 'trim|required');
	$this->form_validation->set_rules('delivery_estimation', 'delivery estimation', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('activation_key', 'activation key', 'trim|required');
	$this->form_validation->set_rules('activation_token', 'activation token', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('date_activated', 'date activated', 'trim|required');
	$this->form_validation->set_rules('last_login', 'last login', 'trim|required');
	$this->form_validation->set_rules('ip_address', 'ip address', 'trim|required');
	$this->form_validation->set_rules('package_id', 'package id', 'trim|required');
	$this->form_validation->set_rules('package_price', 'package price', 'trim|required');
	$this->form_validation->set_rules('membership_expired', 'membership expired', 'trim|required');
	$this->form_validation->set_rules('payment_steps', 'payment steps', 'trim|required');
	$this->form_validation->set_rules('is_featured', 'is featured', 'trim|required');
	$this->form_validation->set_rules('is_ready', 'is ready', 'trim|required');
	$this->form_validation->set_rules('is_sponsored', 'is sponsored', 'trim|required');
	$this->form_validation->set_rules('sponsored_expiration', 'sponsored expiration', 'trim|required');
	$this->form_validation->set_rules('lost_password_code', 'lost password code', 'trim|required');
	$this->form_validation->set_rules('user_lang', 'user lang', 'trim|required');
	$this->form_validation->set_rules('membership_purchase_date', 'membership purchase date', 'trim|required');
	$this->form_validation->set_rules('sort_featured', 'sort featured', 'trim|required');
	$this->form_validation->set_rules('is_commission', 'is commission', 'trim|required');
	$this->form_validation->set_rules('percent_commision', 'percent commision', 'trim|required');
	$this->form_validation->set_rules('abn', 'abn', 'trim|required');
	$this->form_validation->set_rules('session_token', 'session token', 'trim|required');
	$this->form_validation->set_rules('commision_type', 'commision type', 'trim|required');
	$this->form_validation->set_rules('mobile_session_token', 'mobile session token', 'trim|required');
	$this->form_validation->set_rules('token', 'token', 'trim|required');
	$this->form_validation->set_rules('id_session', 'id session', 'trim|required');

	$this->form_validation->set_rules('merchant_id', 'merchant_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mt_merchant.php */
/* Location: ./application/controllers/Mt_merchant.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-02 06:54:14 */
/* http://harviacode.com */