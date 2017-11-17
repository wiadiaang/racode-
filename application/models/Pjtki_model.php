<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pjtki_model extends CI_Model
{

    public $table = 'ts_pjtki';
    public $id = 'vendor_id';
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
        $this->db->like('vendor_id', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('company', $q);
	$this->db->or_like('display_name', $q);
	$this->db->or_like('address1', $q);
	$this->db->or_like('address2', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('membership', $q);
	$this->db->or_like('create_timestamp', $q);
	$this->db->or_like('approve_timestamp', $q);
	$this->db->or_like('member_timestamp', $q);
	$this->db->or_like('member_expire_timestamp', $q);
	$this->db->or_like('details', $q);
	$this->db->or_like('last_login', $q);
	$this->db->or_like('facebook', $q);
	$this->db->or_like('skype', $q);
	$this->db->or_like('google_plus', $q);
	$this->db->or_like('twitter', $q);
	$this->db->or_like('youtube', $q);
	$this->db->or_like('pinterest', $q);
	$this->db->or_like('stripe_details', $q);
	$this->db->or_like('paypal_email', $q);
	$this->db->or_like('preferred_payment', $q);
	$this->db->or_like('cash_set', $q);
	$this->db->or_like('stripe_set', $q);
	$this->db->or_like('paypal_set', $q);
	$this->db->or_like('phone', $q);
	$this->db->or_like('mobile', $q);
	$this->db->or_like('keywords', $q);
	$this->db->or_like('description', $q);
	$this->db->or_like('lat_lang', $q);
	$this->db->or_like('area_sip1', $q);
	$this->db->or_like('date_sip1', $q);
	$this->db->or_like('file_sip1', $q);
	$this->db->or_like('area_sip2', $q);
	$this->db->or_like('date_sip2', $q);
	$this->db->or_like('file_sip2', $q);
	$this->db->or_like('area_sip3', $q);
	$this->db->or_like('date_sip3', $q);
	$this->db->or_like('file_sip3', $q);
	$this->db->or_like('area_sip4', $q);
	$this->db->or_like('date_sip4', $q);
	$this->db->or_like('file_sip4', $q);
	$this->db->or_like('area_sip5', $q);
	$this->db->or_like('date_sip5', $q);
	$this->db->or_like('file_sip5', $q);
	$this->db->or_like('area_sip6', $q);
	$this->db->or_like('date_sip6', $q);
	$this->db->or_like('file_sip6', $q);
	$this->db->or_like('area_sip7', $q);
	$this->db->or_like('date_sip7', $q);
	$this->db->or_like('file_sip7', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('vendor_id', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('company', $q);
	$this->db->or_like('display_name', $q);
	$this->db->or_like('address1', $q);
	$this->db->or_like('address2', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('membership', $q);
	$this->db->or_like('create_timestamp', $q);
	$this->db->or_like('approve_timestamp', $q);
	$this->db->or_like('member_timestamp', $q);
	$this->db->or_like('member_expire_timestamp', $q);
	$this->db->or_like('details', $q);
	$this->db->or_like('last_login', $q);
	$this->db->or_like('facebook', $q);
	$this->db->or_like('skype', $q);
	$this->db->or_like('google_plus', $q);
	$this->db->or_like('twitter', $q);
	$this->db->or_like('youtube', $q);
	$this->db->or_like('pinterest', $q);
	$this->db->or_like('stripe_details', $q);
	$this->db->or_like('paypal_email', $q);
	$this->db->or_like('preferred_payment', $q);
	$this->db->or_like('cash_set', $q);
	$this->db->or_like('stripe_set', $q);
	$this->db->or_like('paypal_set', $q);
	$this->db->or_like('phone', $q);
	$this->db->or_like('mobile', $q);
	$this->db->or_like('keywords', $q);
	$this->db->or_like('description', $q);
	$this->db->or_like('lat_lang', $q);
	$this->db->or_like('area_sip1', $q);
	$this->db->or_like('date_sip1', $q);
	$this->db->or_like('file_sip1', $q);
	$this->db->or_like('area_sip2', $q);
	$this->db->or_like('date_sip2', $q);
	$this->db->or_like('file_sip2', $q);
	$this->db->or_like('area_sip3', $q);
	$this->db->or_like('date_sip3', $q);
	$this->db->or_like('file_sip3', $q);
	$this->db->or_like('area_sip4', $q);
	$this->db->or_like('date_sip4', $q);
	$this->db->or_like('file_sip4', $q);
	$this->db->or_like('area_sip5', $q);
	$this->db->or_like('date_sip5', $q);
	$this->db->or_like('file_sip5', $q);
	$this->db->or_like('area_sip6', $q);
	$this->db->or_like('date_sip6', $q);
	$this->db->or_like('file_sip6', $q);
	$this->db->or_like('area_sip7', $q);
	$this->db->or_like('date_sip7', $q);
	$this->db->or_like('file_sip7', $q);
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

/* End of file Pjtki_model.php */
/* Location: ./application/models/Pjtki_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-24 10:05:29 */
/* http://harviacode.com */