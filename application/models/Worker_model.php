<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Worker_model extends CI_Model
{

    public $table = 'ts_worker';
    public $id = 'worker_id';
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
        $this->db->like('worker_id', $q);
	$this->db->or_like('random_id', $q);
	$this->db->or_like('vendir_id', $q);
	$this->db->or_like('for_agency', $q);
	$this->db->or_like('passport_number', $q);
	$this->db->or_like('country', $q);
	$this->db->or_like('for_country', $q);
	$this->db->or_like('type_formal', $q);
	$this->db->or_like('rating_num', $q);
	$this->db->or_like('rating_total', $q);
	$this->db->or_like('rating_user', $q);
	$this->db->or_like('title', $q);
	$this->db->or_like('category', $q);
	$this->db->or_like('description', $q);
	$this->db->or_like('sub_category', $q);
	$this->db->or_like('num_of_imgs', $q);
	$this->db->or_like('sale_price', $q);
	$this->db->or_like('purchase_price', $q);
	$this->db->or_like('shipping_cost', $q);
	$this->db->or_like('add_timestamp', $q);
	$this->db->or_like('featured', $q);
	$this->db->or_like('tag', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('front_image', $q);
	$this->db->or_like('brand', $q);
	$this->db->or_like('date_of_birth', $q);
	$this->db->or_like('place_of_birth', $q);
	$this->db->or_like('religion', $q);
	$this->db->or_like('province', $q);
	$this->db->or_like('district', $q);
	$this->db->or_like('address', $q);
	$this->db->or_like('height', $q);
	$this->db->or_like('weight', $q);
	$this->db->or_like('marital_status', $q);
	$this->db->or_like('father_name', $q);
	$this->db->or_like('mother_name', $q);
	$this->db->or_like('husband_wife_name', $q);
	$this->db->or_like('children_1', $q);
	$this->db->or_like('children_2', $q);
	$this->db->or_like('children_3', $q);
	$this->db->or_like('number_of_brothers', $q);
	$this->db->or_like('number_of_sisters', $q);
	$this->db->or_like('number_of_children', $q);
	$this->db->or_like('position_in_family', $q);
	$this->db->or_like('education', $q);
	$this->db->or_like('language', $q);
	$this->db->or_like('experience', $q);
	$this->db->or_like('current_stock', $q);
	$this->db->or_like('transfer', $q);
	$this->db->or_like('unit', $q);
	$this->db->or_like('remark', $q);
	$this->db->or_like('additional_fields', $q);
	$this->db->or_like('number_of_view', $q);
	$this->db->or_like('background', $q);
	$this->db->or_like('discount', $q);
	$this->db->or_like('discount_type', $q);
	$this->db->or_like('tax', $q);
	$this->db->or_like('tax_type', $q);
	$this->db->or_like('color', $q);
	$this->db->or_like('options', $q);
	$this->db->or_like('main_image', $q);
	$this->db->or_like('added_by', $q);
	$this->db->or_like('vendor_id', $q);
	$this->db->or_like('input_from', $q);
	$this->db->or_like('download', $q);
	$this->db->or_like('download_name', $q);
	$this->db->or_like('deal', $q);
	$this->db->or_like('akte_kelahiran', $q);
	$this->db->or_like('blk_certificate', $q);
	$this->db->or_like('kartu_keluarga', $q);
	$this->db->or_like('kartu_tanda_penduduk', $q);
	$this->db->or_like('passport', $q);
	$this->db->or_like('pre_medical_certificate', $q);
	$this->db->or_like('surat_izin_keluarga_cap_lurah', $q);
	$this->db->or_like('overtime', $q);
	$this->db->or_like('offday', $q);
	$this->db->or_like('likepork', $q);
	$this->db->or_like('eatpork', $q);
	$this->db->or_like('likedog', $q);
	$this->db->or_like('likesewing', $q);
	$this->db->or_like('likegardening', $q);
	$this->db->or_like('likewashingcar', $q);
	$this->db->or_like('customer_name', $q);
	$this->db->or_like('customer_email', $q);
	$this->db->or_like('customer_phone', $q);
	$this->db->or_like('customer_address', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('worker_id', $q);
	$this->db->or_like('random_id', $q);
	$this->db->or_like('vendir_id', $q);
	$this->db->or_like('for_agency', $q);
	$this->db->or_like('passport_number', $q);
	$this->db->or_like('country', $q);
	$this->db->or_like('for_country', $q);
	$this->db->or_like('type_formal', $q);
	$this->db->or_like('rating_num', $q);
	$this->db->or_like('rating_total', $q);
	$this->db->or_like('rating_user', $q);
	$this->db->or_like('title', $q);
	$this->db->or_like('category', $q);
	$this->db->or_like('description', $q);
	$this->db->or_like('sub_category', $q);
	$this->db->or_like('num_of_imgs', $q);
	$this->db->or_like('sale_price', $q);
	$this->db->or_like('purchase_price', $q);
	$this->db->or_like('shipping_cost', $q);
	$this->db->or_like('add_timestamp', $q);
	$this->db->or_like('featured', $q);
	$this->db->or_like('tag', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('front_image', $q);
	$this->db->or_like('brand', $q);
	$this->db->or_like('date_of_birth', $q);
	$this->db->or_like('place_of_birth', $q);
	$this->db->or_like('religion', $q);
	$this->db->or_like('province', $q);
	$this->db->or_like('district', $q);
	$this->db->or_like('address', $q);
	$this->db->or_like('height', $q);
	$this->db->or_like('weight', $q);
	$this->db->or_like('marital_status', $q);
	$this->db->or_like('father_name', $q);
	$this->db->or_like('mother_name', $q);
	$this->db->or_like('husband_wife_name', $q);
	$this->db->or_like('children_1', $q);
	$this->db->or_like('children_2', $q);
	$this->db->or_like('children_3', $q);
	$this->db->or_like('number_of_brothers', $q);
	$this->db->or_like('number_of_sisters', $q);
	$this->db->or_like('number_of_children', $q);
	$this->db->or_like('position_in_family', $q);
	$this->db->or_like('education', $q);
	$this->db->or_like('language', $q);
	$this->db->or_like('experience', $q);
	$this->db->or_like('current_stock', $q);
	$this->db->or_like('transfer', $q);
	$this->db->or_like('unit', $q);
	$this->db->or_like('remark', $q);
	$this->db->or_like('additional_fields', $q);
	$this->db->or_like('number_of_view', $q);
	$this->db->or_like('background', $q);
	$this->db->or_like('discount', $q);
	$this->db->or_like('discount_type', $q);
	$this->db->or_like('tax', $q);
	$this->db->or_like('tax_type', $q);
	$this->db->or_like('color', $q);
	$this->db->or_like('options', $q);
	$this->db->or_like('main_image', $q);
	$this->db->or_like('added_by', $q);
	$this->db->or_like('vendor_id', $q);
	$this->db->or_like('input_from', $q);
	$this->db->or_like('download', $q);
	$this->db->or_like('download_name', $q);
	$this->db->or_like('deal', $q);
	$this->db->or_like('akte_kelahiran', $q);
	$this->db->or_like('blk_certificate', $q);
	$this->db->or_like('kartu_keluarga', $q);
	$this->db->or_like('kartu_tanda_penduduk', $q);
	$this->db->or_like('passport', $q);
	$this->db->or_like('pre_medical_certificate', $q);
	$this->db->or_like('surat_izin_keluarga_cap_lurah', $q);
	$this->db->or_like('overtime', $q);
	$this->db->or_like('offday', $q);
	$this->db->or_like('likepork', $q);
	$this->db->or_like('eatpork', $q);
	$this->db->or_like('likedog', $q);
	$this->db->or_like('likesewing', $q);
	$this->db->or_like('likegardening', $q);
	$this->db->or_like('likewashingcar', $q);
	$this->db->or_like('customer_name', $q);
	$this->db->or_like('customer_email', $q);
	$this->db->or_like('customer_phone', $q);
	$this->db->or_like('customer_address', $q);
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

/* End of file Worker_model.php */
/* Location: ./application/models/Worker_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-25 05:06:22 */
/* http://harviacode.com */