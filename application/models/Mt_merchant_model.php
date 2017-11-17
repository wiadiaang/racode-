<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mt_merchant_model extends CI_Model
{

    public $table = 'mt_merchant';
    public $id = 'merchant_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('merchant_id', $q);
	$this->db->or_like('restaurant_slug', $q);
	$this->db->or_like('restaurant_name', $q);
	$this->db->or_like('restaurant_phone', $q);
	$this->db->or_like('contact_name', $q);
	$this->db->or_like('contact_phone', $q);
	$this->db->or_like('contact_email', $q);
	$this->db->or_like('country_code', $q);
	$this->db->or_like('street', $q);
	$this->db->or_like('city', $q);
	$this->db->or_like('state', $q);
	$this->db->or_like('post_code', $q);
	$this->db->or_like('cuisine', $q);
	$this->db->or_like('service', $q);
	$this->db->or_like('free_delivery', $q);
	$this->db->or_like('delivery_estimation', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('activation_key', $q);
	$this->db->or_like('activation_token', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('date_created', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('date_activated', $q);
	$this->db->or_like('last_login', $q);
	$this->db->or_like('ip_address', $q);
	$this->db->or_like('package_id', $q);
	$this->db->or_like('package_price', $q);
	$this->db->or_like('membership_expired', $q);
	$this->db->or_like('payment_steps', $q);
	$this->db->or_like('is_featured', $q);
	$this->db->or_like('is_ready', $q);
	$this->db->or_like('is_sponsored', $q);
	$this->db->or_like('sponsored_expiration', $q);
	$this->db->or_like('lost_password_code', $q);
	$this->db->or_like('user_lang', $q);
	$this->db->or_like('membership_purchase_date', $q);
	$this->db->or_like('sort_featured', $q);
	$this->db->or_like('is_commission', $q);
	$this->db->or_like('percent_commision', $q);
	$this->db->or_like('abn', $q);
	$this->db->or_like('session_token', $q);
	$this->db->or_like('commision_type', $q);
	$this->db->or_like('mobile_session_token', $q);
	$this->db->or_like('token', $q);
	$this->db->or_like('id_session', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('merchant_id', $q);
	$this->db->or_like('restaurant_slug', $q);
	$this->db->or_like('restaurant_name', $q);
	$this->db->or_like('restaurant_phone', $q);
	$this->db->or_like('contact_name', $q);
	$this->db->or_like('contact_phone', $q);
	$this->db->or_like('contact_email', $q);
	$this->db->or_like('country_code', $q);
	$this->db->or_like('street', $q);
	$this->db->or_like('city', $q);
	$this->db->or_like('state', $q);
	$this->db->or_like('post_code', $q);
	$this->db->or_like('cuisine', $q);
	$this->db->or_like('service', $q);
	$this->db->or_like('free_delivery', $q);
	$this->db->or_like('delivery_estimation', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('activation_key', $q);
	$this->db->or_like('activation_token', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('date_created', $q);
	$this->db->or_like('date_modified', $q);
	$this->db->or_like('date_activated', $q);
	$this->db->or_like('last_login', $q);
	$this->db->or_like('ip_address', $q);
	$this->db->or_like('package_id', $q);
	$this->db->or_like('package_price', $q);
	$this->db->or_like('membership_expired', $q);
	$this->db->or_like('payment_steps', $q);
	$this->db->or_like('is_featured', $q);
	$this->db->or_like('is_ready', $q);
	$this->db->or_like('is_sponsored', $q);
	$this->db->or_like('sponsored_expiration', $q);
	$this->db->or_like('lost_password_code', $q);
	$this->db->or_like('user_lang', $q);
	$this->db->or_like('membership_purchase_date', $q);
	$this->db->or_like('sort_featured', $q);
	$this->db->or_like('is_commission', $q);
	$this->db->or_like('percent_commision', $q);
	$this->db->or_like('abn', $q);
	$this->db->or_like('session_token', $q);
	$this->db->or_like('commision_type', $q);
	$this->db->or_like('mobile_session_token', $q);
	$this->db->or_like('token', $q);
	$this->db->or_like('id_session', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Mt_merchant_model.php */
/* Location: ./application/models/Mt_merchant_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-02 06:54:15 */
/* http://harviacode.com */