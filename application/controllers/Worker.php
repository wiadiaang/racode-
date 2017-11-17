<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Worker extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Worker_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $worker = $this->Worker_model->get_all();

        $data = array(
            'worker_data' => $worker
        );

        $this->template->load('template','ts_worker_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Worker_model->get_by_id($id);
        if ($row) {
            $data = array(
		'worker_id' => $row->worker_id,
		'random_id' => $row->random_id,
		'vendir_id' => $row->vendir_id,
		'for_agency' => $row->for_agency,
		'passport_number' => $row->passport_number,
		'country' => $row->country,
		'for_country' => $row->for_country,
		'type_formal' => $row->type_formal,
		'rating_num' => $row->rating_num,
		'rating_total' => $row->rating_total,
		'rating_user' => $row->rating_user,
		'title' => $row->title,
		'category' => $row->category,
		'description' => $row->description,
		'sub_category' => $row->sub_category,
		'num_of_imgs' => $row->num_of_imgs,
		'sale_price' => $row->sale_price,
		'purchase_price' => $row->purchase_price,
		'shipping_cost' => $row->shipping_cost,
		'add_timestamp' => $row->add_timestamp,
		'featured' => $row->featured,
		'tag' => $row->tag,
		'status' => $row->status,
		'front_image' => $row->front_image,
		'brand' => $row->brand,
		'date_of_birth' => $row->date_of_birth,
		'place_of_birth' => $row->place_of_birth,
		'religion' => $row->religion,
		'province' => $row->province,
		'district' => $row->district,
		'address' => $row->address,
		'height' => $row->height,
		'weight' => $row->weight,
		'marital_status' => $row->marital_status,
		'father_name' => $row->father_name,
		'mother_name' => $row->mother_name,
		'husband_wife_name' => $row->husband_wife_name,
		'children_1' => $row->children_1,
		'children_2' => $row->children_2,
		'children_3' => $row->children_3,
		'number_of_brothers' => $row->number_of_brothers,
		'number_of_sisters' => $row->number_of_sisters,
		'number_of_children' => $row->number_of_children,
		'position_in_family' => $row->position_in_family,
		'education' => $row->education,
		'language' => $row->language,
		'experience' => $row->experience,
		'current_stock' => $row->current_stock,
		'transfer' => $row->transfer,
		'unit' => $row->unit,
		'remark' => $row->remark,
		'additional_fields' => $row->additional_fields,
		'number_of_view' => $row->number_of_view,
		'background' => $row->background,
		'discount' => $row->discount,
		'discount_type' => $row->discount_type,
		'tax' => $row->tax,
		'tax_type' => $row->tax_type,
		'color' => $row->color,
		'options' => $row->options,
		'main_image' => $row->main_image,
		'added_by' => $row->added_by,
		'vendor_id' => $row->vendor_id,
		'input_from' => $row->input_from,
		'download' => $row->download,
		'download_name' => $row->download_name,
		'deal' => $row->deal,
		'akte_kelahiran' => $row->akte_kelahiran,
		'blk_certificate' => $row->blk_certificate,
		'kartu_keluarga' => $row->kartu_keluarga,
		'kartu_tanda_penduduk' => $row->kartu_tanda_penduduk,
		'passport' => $row->passport,
		'pre_medical_certificate' => $row->pre_medical_certificate,
		'surat_izin_keluarga_cap_lurah' => $row->surat_izin_keluarga_cap_lurah,
		'overtime' => $row->overtime,
		'offday' => $row->offday,
		'likepork' => $row->likepork,
		'eatpork' => $row->eatpork,
		'likedog' => $row->likedog,
		'likesewing' => $row->likesewing,
		'likegardening' => $row->likegardening,
		'likewashingcar' => $row->likewashingcar,
		'customer_name' => $row->customer_name,
		'customer_email' => $row->customer_email,
		'customer_phone' => $row->customer_phone,
		'customer_address' => $row->customer_address,
	    );
            $this->template->load('template','ts_worker_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('worker'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('worker/create_action'),
	    'worker_id' => set_value('worker_id'),
	    'random_id' => set_value('random_id'),
	    'vendir_id' => set_value('vendir_id'),
	    'for_agency' => set_value('for_agency'),
	    'passport_number' => set_value('passport_number'),
	    'country' => set_value('country'),
	    'for_country' => set_value('for_country'),
	    'type_formal' => set_value('type_formal'),
	    'rating_num' => set_value('rating_num'),
	    'rating_total' => set_value('rating_total'),
	    'rating_user' => set_value('rating_user'),
	    'title' => set_value('title'),
	    'category' => set_value('category'),
	    'description' => set_value('description'),
	    'sub_category' => set_value('sub_category'),
	    'num_of_imgs' => set_value('num_of_imgs'),
	    'sale_price' => set_value('sale_price'),
	    'purchase_price' => set_value('purchase_price'),
	    'shipping_cost' => set_value('shipping_cost'),
	    'add_timestamp' => set_value('add_timestamp'),
	    'featured' => set_value('featured'),
	    'tag' => set_value('tag'),
	    'status' => set_value('status'),
	    'front_image' => set_value('front_image'),
	    'brand' => set_value('brand'),
	    'date_of_birth' => set_value('date_of_birth'),
	    'place_of_birth' => set_value('place_of_birth'),
	    'religion' => set_value('religion'),
	    'province' => set_value('province'),
	    'district' => set_value('district'),
	    'address' => set_value('address'),
	    'height' => set_value('height'),
	    'weight' => set_value('weight'),
	    'marital_status' => set_value('marital_status'),
	    'father_name' => set_value('father_name'),
	    'mother_name' => set_value('mother_name'),
	    'husband_wife_name' => set_value('husband_wife_name'),
	    'children_1' => set_value('children_1'),
	    'children_2' => set_value('children_2'),
	    'children_3' => set_value('children_3'),
	    'number_of_brothers' => set_value('number_of_brothers'),
	    'number_of_sisters' => set_value('number_of_sisters'),
	    'number_of_children' => set_value('number_of_children'),
	    'position_in_family' => set_value('position_in_family'),
	    'education' => set_value('education'),
	    'language' => set_value('language'),
	    'experience' => set_value('experience'),
	    'current_stock' => set_value('current_stock'),
	    'transfer' => set_value('transfer'),
	    'unit' => set_value('unit'),
	    'remark' => set_value('remark'),
	    'additional_fields' => set_value('additional_fields'),
	    'number_of_view' => set_value('number_of_view'),
	    'background' => set_value('background'),
	    'discount' => set_value('discount'),
	    'discount_type' => set_value('discount_type'),
	    'tax' => set_value('tax'),
	    'tax_type' => set_value('tax_type'),
	    'color' => set_value('color'),
	    'options' => set_value('options'),
	    'main_image' => set_value('main_image'),
	    'added_by' => set_value('added_by'),
	    'vendor_id' => set_value('vendor_id'),
	    'input_from' => set_value('input_from'),
	    'download' => set_value('download'),
	    'download_name' => set_value('download_name'),
	    'deal' => set_value('deal'),
	    'akte_kelahiran' => set_value('akte_kelahiran'),
	    'blk_certificate' => set_value('blk_certificate'),
	    'kartu_keluarga' => set_value('kartu_keluarga'),
	    'kartu_tanda_penduduk' => set_value('kartu_tanda_penduduk'),
	    'passport' => set_value('passport'),
	    'pre_medical_certificate' => set_value('pre_medical_certificate'),
	    'surat_izin_keluarga_cap_lurah' => set_value('surat_izin_keluarga_cap_lurah'),
	    'overtime' => set_value('overtime'),
	    'offday' => set_value('offday'),
	    'likepork' => set_value('likepork'),
	    'eatpork' => set_value('eatpork'),
	    'likedog' => set_value('likedog'),
	    'likesewing' => set_value('likesewing'),
	    'likegardening' => set_value('likegardening'),
	    'likewashingcar' => set_value('likewashingcar'),
	    'customer_name' => set_value('customer_name'),
	    'customer_email' => set_value('customer_email'),
	    'customer_phone' => set_value('customer_phone'),
	    'customer_address' => set_value('customer_address'),
	);
        $this->template->load('template','ts_worker_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'random_id' => $this->input->post('random_id',TRUE),
		'vendir_id' => $this->input->post('vendir_id',TRUE),
		'for_agency' => $this->input->post('for_agency',TRUE),
		'passport_number' => $this->input->post('passport_number',TRUE),
		'country' => $this->input->post('country',TRUE),
		'for_country' => $this->input->post('for_country',TRUE),
		'type_formal' => $this->input->post('type_formal',TRUE),
		'rating_num' => $this->input->post('rating_num',TRUE),
		'rating_total' => $this->input->post('rating_total',TRUE),
		'rating_user' => $this->input->post('rating_user',TRUE),
		'title' => $this->input->post('title',TRUE),
		'category' => $this->input->post('category',TRUE),
		'description' => $this->input->post('description',TRUE),
		'sub_category' => $this->input->post('sub_category',TRUE),
		'num_of_imgs' => $this->input->post('num_of_imgs',TRUE),
		'sale_price' => $this->input->post('sale_price',TRUE),
		'purchase_price' => $this->input->post('purchase_price',TRUE),
		'shipping_cost' => $this->input->post('shipping_cost',TRUE),
		'add_timestamp' => $this->input->post('add_timestamp',TRUE),
		'featured' => $this->input->post('featured',TRUE),
		'tag' => $this->input->post('tag',TRUE),
		'status' => $this->input->post('status',TRUE),
		'front_image' => $this->input->post('front_image',TRUE),
		'brand' => $this->input->post('brand',TRUE),
		'date_of_birth' => $this->input->post('date_of_birth',TRUE),
		'place_of_birth' => $this->input->post('place_of_birth',TRUE),
		'religion' => $this->input->post('religion',TRUE),
		'province' => $this->input->post('province',TRUE),
		'district' => $this->input->post('district',TRUE),
		'address' => $this->input->post('address',TRUE),
		'height' => $this->input->post('height',TRUE),
		'weight' => $this->input->post('weight',TRUE),
		'marital_status' => $this->input->post('marital_status',TRUE),
		'father_name' => $this->input->post('father_name',TRUE),
		'mother_name' => $this->input->post('mother_name',TRUE),
		'husband_wife_name' => $this->input->post('husband_wife_name',TRUE),
		'children_1' => $this->input->post('children_1',TRUE),
		'children_2' => $this->input->post('children_2',TRUE),
		'children_3' => $this->input->post('children_3',TRUE),
		'number_of_brothers' => $this->input->post('number_of_brothers',TRUE),
		'number_of_sisters' => $this->input->post('number_of_sisters',TRUE),
		'number_of_children' => $this->input->post('number_of_children',TRUE),
		'position_in_family' => $this->input->post('position_in_family',TRUE),
		'education' => $this->input->post('education',TRUE),
		'language' => $this->input->post('language',TRUE),
		'experience' => $this->input->post('experience',TRUE),
		'current_stock' => $this->input->post('current_stock',TRUE),
		'transfer' => $this->input->post('transfer',TRUE),
		'unit' => $this->input->post('unit',TRUE),
		'remark' => $this->input->post('remark',TRUE),
		'additional_fields' => $this->input->post('additional_fields',TRUE),
		'number_of_view' => $this->input->post('number_of_view',TRUE),
		'background' => $this->input->post('background',TRUE),
		'discount' => $this->input->post('discount',TRUE),
		'discount_type' => $this->input->post('discount_type',TRUE),
		'tax' => $this->input->post('tax',TRUE),
		'tax_type' => $this->input->post('tax_type',TRUE),
		'color' => $this->input->post('color',TRUE),
		'options' => $this->input->post('options',TRUE),
		'main_image' => $this->input->post('main_image',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'vendor_id' => $this->input->post('vendor_id',TRUE),
		'input_from' => $this->input->post('input_from',TRUE),
		'download' => $this->input->post('download',TRUE),
		'download_name' => $this->input->post('download_name',TRUE),
		'deal' => $this->input->post('deal',TRUE),
		'akte_kelahiran' => $this->input->post('akte_kelahiran',TRUE),
		'blk_certificate' => $this->input->post('blk_certificate',TRUE),
		'kartu_keluarga' => $this->input->post('kartu_keluarga',TRUE),
		'kartu_tanda_penduduk' => $this->input->post('kartu_tanda_penduduk',TRUE),
		'passport' => $this->input->post('passport',TRUE),
		'pre_medical_certificate' => $this->input->post('pre_medical_certificate',TRUE),
		'surat_izin_keluarga_cap_lurah' => $this->input->post('surat_izin_keluarga_cap_lurah',TRUE),
		'overtime' => $this->input->post('overtime',TRUE),
		'offday' => $this->input->post('offday',TRUE),
		'likepork' => $this->input->post('likepork',TRUE),
		'eatpork' => $this->input->post('eatpork',TRUE),
		'likedog' => $this->input->post('likedog',TRUE),
		'likesewing' => $this->input->post('likesewing',TRUE),
		'likegardening' => $this->input->post('likegardening',TRUE),
		'likewashingcar' => $this->input->post('likewashingcar',TRUE),
		'customer_name' => $this->input->post('customer_name',TRUE),
		'customer_email' => $this->input->post('customer_email',TRUE),
		'customer_phone' => $this->input->post('customer_phone',TRUE),
		'customer_address' => $this->input->post('customer_address',TRUE),
	    );

            $this->Worker_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('worker'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Worker_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('worker/update_action'),
		'worker_id' => set_value('worker_id', $row->worker_id),
		'random_id' => set_value('random_id', $row->random_id),
		'vendir_id' => set_value('vendir_id', $row->vendir_id),
		'for_agency' => set_value('for_agency', $row->for_agency),
		'passport_number' => set_value('passport_number', $row->passport_number),
		'country' => set_value('country', $row->country),
		'for_country' => set_value('for_country', $row->for_country),
		'type_formal' => set_value('type_formal', $row->type_formal),
		'rating_num' => set_value('rating_num', $row->rating_num),
		'rating_total' => set_value('rating_total', $row->rating_total),
		'rating_user' => set_value('rating_user', $row->rating_user),
		'title' => set_value('title', $row->title),
		'category' => set_value('category', $row->category),
		'description' => set_value('description', $row->description),
		'sub_category' => set_value('sub_category', $row->sub_category),
		'num_of_imgs' => set_value('num_of_imgs', $row->num_of_imgs),
		'sale_price' => set_value('sale_price', $row->sale_price),
		'purchase_price' => set_value('purchase_price', $row->purchase_price),
		'shipping_cost' => set_value('shipping_cost', $row->shipping_cost),
		'add_timestamp' => set_value('add_timestamp', $row->add_timestamp),
		'featured' => set_value('featured', $row->featured),
		'tag' => set_value('tag', $row->tag),
		'status' => set_value('status', $row->status),
		'front_image' => set_value('front_image', $row->front_image),
		'brand' => set_value('brand', $row->brand),
		'date_of_birth' => set_value('date_of_birth', $row->date_of_birth),
		'place_of_birth' => set_value('place_of_birth', $row->place_of_birth),
		'religion' => set_value('religion', $row->religion),
		'province' => set_value('province', $row->province),
		'district' => set_value('district', $row->district),
		'address' => set_value('address', $row->address),
		'height' => set_value('height', $row->height),
		'weight' => set_value('weight', $row->weight),
		'marital_status' => set_value('marital_status', $row->marital_status),
		'father_name' => set_value('father_name', $row->father_name),
		'mother_name' => set_value('mother_name', $row->mother_name),
		'husband_wife_name' => set_value('husband_wife_name', $row->husband_wife_name),
		'children_1' => set_value('children_1', $row->children_1),
		'children_2' => set_value('children_2', $row->children_2),
		'children_3' => set_value('children_3', $row->children_3),
		'number_of_brothers' => set_value('number_of_brothers', $row->number_of_brothers),
		'number_of_sisters' => set_value('number_of_sisters', $row->number_of_sisters),
		'number_of_children' => set_value('number_of_children', $row->number_of_children),
		'position_in_family' => set_value('position_in_family', $row->position_in_family),
		'education' => set_value('education', $row->education),
		'language' => set_value('language', $row->language),
		'experience' => set_value('experience', $row->experience),
		'current_stock' => set_value('current_stock', $row->current_stock),
		'transfer' => set_value('transfer', $row->transfer),
		'unit' => set_value('unit', $row->unit),
		'remark' => set_value('remark', $row->remark),
		'additional_fields' => set_value('additional_fields', $row->additional_fields),
		'number_of_view' => set_value('number_of_view', $row->number_of_view),
		'background' => set_value('background', $row->background),
		'discount' => set_value('discount', $row->discount),
		'discount_type' => set_value('discount_type', $row->discount_type),
		'tax' => set_value('tax', $row->tax),
		'tax_type' => set_value('tax_type', $row->tax_type),
		'color' => set_value('color', $row->color),
		'options' => set_value('options', $row->options),
		'main_image' => set_value('main_image', $row->main_image),
		'added_by' => set_value('added_by', $row->added_by),
		'vendor_id' => set_value('vendor_id', $row->vendor_id),
		'input_from' => set_value('input_from', $row->input_from),
		'download' => set_value('download', $row->download),
		'download_name' => set_value('download_name', $row->download_name),
		'deal' => set_value('deal', $row->deal),
		'akte_kelahiran' => set_value('akte_kelahiran', $row->akte_kelahiran),
		'blk_certificate' => set_value('blk_certificate', $row->blk_certificate),
		'kartu_keluarga' => set_value('kartu_keluarga', $row->kartu_keluarga),
		'kartu_tanda_penduduk' => set_value('kartu_tanda_penduduk', $row->kartu_tanda_penduduk),
		'passport' => set_value('passport', $row->passport),
		'pre_medical_certificate' => set_value('pre_medical_certificate', $row->pre_medical_certificate),
		'surat_izin_keluarga_cap_lurah' => set_value('surat_izin_keluarga_cap_lurah', $row->surat_izin_keluarga_cap_lurah),
		'overtime' => set_value('overtime', $row->overtime),
		'offday' => set_value('offday', $row->offday),
		'likepork' => set_value('likepork', $row->likepork),
		'eatpork' => set_value('eatpork', $row->eatpork),
		'likedog' => set_value('likedog', $row->likedog),
		'likesewing' => set_value('likesewing', $row->likesewing),
		'likegardening' => set_value('likegardening', $row->likegardening),
		'likewashingcar' => set_value('likewashingcar', $row->likewashingcar),
		'customer_name' => set_value('customer_name', $row->customer_name),
		'customer_email' => set_value('customer_email', $row->customer_email),
		'customer_phone' => set_value('customer_phone', $row->customer_phone),
		'customer_address' => set_value('customer_address', $row->customer_address),
	    );
            $this->template->load('template','ts_worker_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('worker'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('worker_id', TRUE));
        } else {
            $data = array(
		'random_id' => $this->input->post('random_id',TRUE),
		'vendir_id' => $this->input->post('vendir_id',TRUE),
		'for_agency' => $this->input->post('for_agency',TRUE),
		'passport_number' => $this->input->post('passport_number',TRUE),
		'country' => $this->input->post('country',TRUE),
		'for_country' => $this->input->post('for_country',TRUE),
		'type_formal' => $this->input->post('type_formal',TRUE),
		'rating_num' => $this->input->post('rating_num',TRUE),
		'rating_total' => $this->input->post('rating_total',TRUE),
		'rating_user' => $this->input->post('rating_user',TRUE),
		'title' => $this->input->post('title',TRUE),
		'category' => $this->input->post('category',TRUE),
		'description' => $this->input->post('description',TRUE),
		'sub_category' => $this->input->post('sub_category',TRUE),
		'num_of_imgs' => $this->input->post('num_of_imgs',TRUE),
		'sale_price' => $this->input->post('sale_price',TRUE),
		'purchase_price' => $this->input->post('purchase_price',TRUE),
		'shipping_cost' => $this->input->post('shipping_cost',TRUE),
		'add_timestamp' => $this->input->post('add_timestamp',TRUE),
		'featured' => $this->input->post('featured',TRUE),
		'tag' => $this->input->post('tag',TRUE),
		'status' => $this->input->post('status',TRUE),
		'front_image' => $this->input->post('front_image',TRUE),
		'brand' => $this->input->post('brand',TRUE),
		'date_of_birth' => $this->input->post('date_of_birth',TRUE),
		'place_of_birth' => $this->input->post('place_of_birth',TRUE),
		'religion' => $this->input->post('religion',TRUE),
		'province' => $this->input->post('province',TRUE),
		'district' => $this->input->post('district',TRUE),
		'address' => $this->input->post('address',TRUE),
		'height' => $this->input->post('height',TRUE),
		'weight' => $this->input->post('weight',TRUE),
		'marital_status' => $this->input->post('marital_status',TRUE),
		'father_name' => $this->input->post('father_name',TRUE),
		'mother_name' => $this->input->post('mother_name',TRUE),
		'husband_wife_name' => $this->input->post('husband_wife_name',TRUE),
		'children_1' => $this->input->post('children_1',TRUE),
		'children_2' => $this->input->post('children_2',TRUE),
		'children_3' => $this->input->post('children_3',TRUE),
		'number_of_brothers' => $this->input->post('number_of_brothers',TRUE),
		'number_of_sisters' => $this->input->post('number_of_sisters',TRUE),
		'number_of_children' => $this->input->post('number_of_children',TRUE),
		'position_in_family' => $this->input->post('position_in_family',TRUE),
		'education' => $this->input->post('education',TRUE),
		'language' => $this->input->post('language',TRUE),
		'experience' => $this->input->post('experience',TRUE),
		'current_stock' => $this->input->post('current_stock',TRUE),
		'transfer' => $this->input->post('transfer',TRUE),
		'unit' => $this->input->post('unit',TRUE),
		'remark' => $this->input->post('remark',TRUE),
		'additional_fields' => $this->input->post('additional_fields',TRUE),
		'number_of_view' => $this->input->post('number_of_view',TRUE),
		'background' => $this->input->post('background',TRUE),
		'discount' => $this->input->post('discount',TRUE),
		'discount_type' => $this->input->post('discount_type',TRUE),
		'tax' => $this->input->post('tax',TRUE),
		'tax_type' => $this->input->post('tax_type',TRUE),
		'color' => $this->input->post('color',TRUE),
		'options' => $this->input->post('options',TRUE),
		'main_image' => $this->input->post('main_image',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'vendor_id' => $this->input->post('vendor_id',TRUE),
		'input_from' => $this->input->post('input_from',TRUE),
		'download' => $this->input->post('download',TRUE),
		'download_name' => $this->input->post('download_name',TRUE),
		'deal' => $this->input->post('deal',TRUE),
		'akte_kelahiran' => $this->input->post('akte_kelahiran',TRUE),
		'blk_certificate' => $this->input->post('blk_certificate',TRUE),
		'kartu_keluarga' => $this->input->post('kartu_keluarga',TRUE),
		'kartu_tanda_penduduk' => $this->input->post('kartu_tanda_penduduk',TRUE),
		'passport' => $this->input->post('passport',TRUE),
		'pre_medical_certificate' => $this->input->post('pre_medical_certificate',TRUE),
		'surat_izin_keluarga_cap_lurah' => $this->input->post('surat_izin_keluarga_cap_lurah',TRUE),
		'overtime' => $this->input->post('overtime',TRUE),
		'offday' => $this->input->post('offday',TRUE),
		'likepork' => $this->input->post('likepork',TRUE),
		'eatpork' => $this->input->post('eatpork',TRUE),
		'likedog' => $this->input->post('likedog',TRUE),
		'likesewing' => $this->input->post('likesewing',TRUE),
		'likegardening' => $this->input->post('likegardening',TRUE),
		'likewashingcar' => $this->input->post('likewashingcar',TRUE),
		'customer_name' => $this->input->post('customer_name',TRUE),
		'customer_email' => $this->input->post('customer_email',TRUE),
		'customer_phone' => $this->input->post('customer_phone',TRUE),
		'customer_address' => $this->input->post('customer_address',TRUE),
	    );

            $this->Worker_model->update($this->input->post('worker_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('worker'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Worker_model->get_by_id($id);

        if ($row) {
            $this->Worker_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('worker'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('worker'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('random_id', 'random id', 'trim|required');
	$this->form_validation->set_rules('vendir_id', 'vendir id', 'trim|required');
	$this->form_validation->set_rules('for_agency', 'for agency', 'trim|required');
	$this->form_validation->set_rules('passport_number', 'passport number', 'trim|required');
	$this->form_validation->set_rules('country', 'country', 'trim|required');
	$this->form_validation->set_rules('for_country', 'for country', 'trim|required');
	$this->form_validation->set_rules('type_formal', 'type formal', 'trim|required');
	$this->form_validation->set_rules('rating_num', 'rating num', 'trim|required');
	$this->form_validation->set_rules('rating_total', 'rating total', 'trim|required');
	$this->form_validation->set_rules('rating_user', 'rating user', 'trim|required');
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('category', 'category', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');
	$this->form_validation->set_rules('sub_category', 'sub category', 'trim|required');
	$this->form_validation->set_rules('num_of_imgs', 'num of imgs', 'trim|required');
	$this->form_validation->set_rules('sale_price', 'sale price', 'trim|required|numeric');
	$this->form_validation->set_rules('purchase_price', 'purchase price', 'trim|required|numeric');
	$this->form_validation->set_rules('shipping_cost', 'shipping cost', 'trim|required');
	$this->form_validation->set_rules('add_timestamp', 'add timestamp', 'trim|required');
	$this->form_validation->set_rules('featured', 'featured', 'trim|required');
	$this->form_validation->set_rules('tag', 'tag', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('front_image', 'front image', 'trim|required');
	$this->form_validation->set_rules('brand', 'brand', 'trim|required');
	$this->form_validation->set_rules('date_of_birth', 'date of birth', 'trim|required');
	$this->form_validation->set_rules('place_of_birth', 'place of birth', 'trim|required');
	$this->form_validation->set_rules('religion', 'religion', 'trim|required');
	$this->form_validation->set_rules('province', 'province', 'trim|required');
	$this->form_validation->set_rules('district', 'district', 'trim|required');
	$this->form_validation->set_rules('address', 'address', 'trim|required');
	$this->form_validation->set_rules('height', 'height', 'trim|required');
	$this->form_validation->set_rules('weight', 'weight', 'trim|required');
	$this->form_validation->set_rules('marital_status', 'marital status', 'trim|required');
	$this->form_validation->set_rules('father_name', 'father name', 'trim|required');
	$this->form_validation->set_rules('mother_name', 'mother name', 'trim|required');
	$this->form_validation->set_rules('husband_wife_name', 'husband wife name', 'trim|required');
	$this->form_validation->set_rules('children_1', 'children 1', 'trim|required');
	$this->form_validation->set_rules('children_2', 'children 2', 'trim|required');
	$this->form_validation->set_rules('children_3', 'children 3', 'trim|required');
	$this->form_validation->set_rules('number_of_brothers', 'number of brothers', 'trim|required');
	$this->form_validation->set_rules('number_of_sisters', 'number of sisters', 'trim|required');
	$this->form_validation->set_rules('number_of_children', 'number of children', 'trim|required');
	$this->form_validation->set_rules('position_in_family', 'position in family', 'trim|required');
	$this->form_validation->set_rules('education', 'education', 'trim|required');
	$this->form_validation->set_rules('language', 'language', 'trim|required');
	$this->form_validation->set_rules('experience', 'experience', 'trim|required');
	$this->form_validation->set_rules('current_stock', 'current stock', 'trim|required');
	$this->form_validation->set_rules('transfer', 'transfer', 'trim|required');
	$this->form_validation->set_rules('unit', 'unit', 'trim|required');
	$this->form_validation->set_rules('remark', 'remark', 'trim|required');
	$this->form_validation->set_rules('additional_fields', 'additional fields', 'trim|required');
	$this->form_validation->set_rules('number_of_view', 'number of view', 'trim|required');
	$this->form_validation->set_rules('background', 'background', 'trim|required');
	$this->form_validation->set_rules('discount', 'discount', 'trim|required');
	$this->form_validation->set_rules('discount_type', 'discount type', 'trim|required');
	$this->form_validation->set_rules('tax', 'tax', 'trim|required');
	$this->form_validation->set_rules('tax_type', 'tax type', 'trim|required');
	$this->form_validation->set_rules('color', 'color', 'trim|required');
	$this->form_validation->set_rules('options', 'options', 'trim|required');
	$this->form_validation->set_rules('main_image', 'main image', 'trim|required');
	$this->form_validation->set_rules('added_by', 'added by', 'trim|required');
	$this->form_validation->set_rules('vendor_id', 'vendor id', 'trim|required');
	$this->form_validation->set_rules('input_from', 'input from', 'trim|required');
	$this->form_validation->set_rules('download', 'download', 'trim|required');
	$this->form_validation->set_rules('download_name', 'download name', 'trim|required');
	$this->form_validation->set_rules('deal', 'deal', 'trim|required');
	$this->form_validation->set_rules('akte_kelahiran', 'akte kelahiran', 'trim|required');
	$this->form_validation->set_rules('blk_certificate', 'blk certificate', 'trim|required');
	$this->form_validation->set_rules('kartu_keluarga', 'kartu keluarga', 'trim|required');
	$this->form_validation->set_rules('kartu_tanda_penduduk', 'kartu tanda penduduk', 'trim|required');
	$this->form_validation->set_rules('passport', 'passport', 'trim|required');
	$this->form_validation->set_rules('pre_medical_certificate', 'pre medical certificate', 'trim|required');
	$this->form_validation->set_rules('surat_izin_keluarga_cap_lurah', 'surat izin keluarga cap lurah', 'trim|required');
	$this->form_validation->set_rules('overtime', 'overtime', 'trim|required');
	$this->form_validation->set_rules('offday', 'offday', 'trim|required');
	$this->form_validation->set_rules('likepork', 'likepork', 'trim|required');
	$this->form_validation->set_rules('eatpork', 'eatpork', 'trim|required');
	$this->form_validation->set_rules('likedog', 'likedog', 'trim|required');
	$this->form_validation->set_rules('likesewing', 'likesewing', 'trim|required');
	$this->form_validation->set_rules('likegardening', 'likegardening', 'trim|required');
	$this->form_validation->set_rules('likewashingcar', 'likewashingcar', 'trim|required');
	$this->form_validation->set_rules('customer_name', 'customer name', 'trim|required');
	$this->form_validation->set_rules('customer_email', 'customer email', 'trim|required');
	$this->form_validation->set_rules('customer_phone', 'customer phone', 'trim|required');
	$this->form_validation->set_rules('customer_address', 'customer address', 'trim|required');

	$this->form_validation->set_rules('worker_id', 'worker_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "ts_worker.xls";
        $judul = "ts_worker";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Random Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Vendir Id");
	xlsWriteLabel($tablehead, $kolomhead++, "For Agency");
	xlsWriteLabel($tablehead, $kolomhead++, "Passport Number");
	xlsWriteLabel($tablehead, $kolomhead++, "Country");
	xlsWriteLabel($tablehead, $kolomhead++, "For Country");
	xlsWriteLabel($tablehead, $kolomhead++, "Type Formal");
	xlsWriteLabel($tablehead, $kolomhead++, "Rating Num");
	xlsWriteLabel($tablehead, $kolomhead++, "Rating Total");
	xlsWriteLabel($tablehead, $kolomhead++, "Rating User");
	xlsWriteLabel($tablehead, $kolomhead++, "Title");
	xlsWriteLabel($tablehead, $kolomhead++, "Category");
	xlsWriteLabel($tablehead, $kolomhead++, "Description");
	xlsWriteLabel($tablehead, $kolomhead++, "Sub Category");
	xlsWriteLabel($tablehead, $kolomhead++, "Num Of Imgs");
	xlsWriteLabel($tablehead, $kolomhead++, "Sale Price");
	xlsWriteLabel($tablehead, $kolomhead++, "Purchase Price");
	xlsWriteLabel($tablehead, $kolomhead++, "Shipping Cost");
	xlsWriteLabel($tablehead, $kolomhead++, "Add Timestamp");
	xlsWriteLabel($tablehead, $kolomhead++, "Featured");
	xlsWriteLabel($tablehead, $kolomhead++, "Tag");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Front Image");
	xlsWriteLabel($tablehead, $kolomhead++, "Brand");
	xlsWriteLabel($tablehead, $kolomhead++, "Date Of Birth");
	xlsWriteLabel($tablehead, $kolomhead++, "Place Of Birth");
	xlsWriteLabel($tablehead, $kolomhead++, "Religion");
	xlsWriteLabel($tablehead, $kolomhead++, "Province");
	xlsWriteLabel($tablehead, $kolomhead++, "District");
	xlsWriteLabel($tablehead, $kolomhead++, "Address");
	xlsWriteLabel($tablehead, $kolomhead++, "Height");
	xlsWriteLabel($tablehead, $kolomhead++, "Weight");
	xlsWriteLabel($tablehead, $kolomhead++, "Marital Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Father Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Mother Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Husband Wife Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Children 1");
	xlsWriteLabel($tablehead, $kolomhead++, "Children 2");
	xlsWriteLabel($tablehead, $kolomhead++, "Children 3");
	xlsWriteLabel($tablehead, $kolomhead++, "Number Of Brothers");
	xlsWriteLabel($tablehead, $kolomhead++, "Number Of Sisters");
	xlsWriteLabel($tablehead, $kolomhead++, "Number Of Children");
	xlsWriteLabel($tablehead, $kolomhead++, "Position In Family");
	xlsWriteLabel($tablehead, $kolomhead++, "Education");
	xlsWriteLabel($tablehead, $kolomhead++, "Language");
	xlsWriteLabel($tablehead, $kolomhead++, "Experience");
	xlsWriteLabel($tablehead, $kolomhead++, "Current Stock");
	xlsWriteLabel($tablehead, $kolomhead++, "Transfer");
	xlsWriteLabel($tablehead, $kolomhead++, "Unit");
	xlsWriteLabel($tablehead, $kolomhead++, "Remark");
	xlsWriteLabel($tablehead, $kolomhead++, "Additional Fields");
	xlsWriteLabel($tablehead, $kolomhead++, "Number Of View");
	xlsWriteLabel($tablehead, $kolomhead++, "Background");
	xlsWriteLabel($tablehead, $kolomhead++, "Discount");
	xlsWriteLabel($tablehead, $kolomhead++, "Discount Type");
	xlsWriteLabel($tablehead, $kolomhead++, "Tax");
	xlsWriteLabel($tablehead, $kolomhead++, "Tax Type");
	xlsWriteLabel($tablehead, $kolomhead++, "Color");
	xlsWriteLabel($tablehead, $kolomhead++, "Options");
	xlsWriteLabel($tablehead, $kolomhead++, "Main Image");
	xlsWriteLabel($tablehead, $kolomhead++, "Added By");
	xlsWriteLabel($tablehead, $kolomhead++, "Vendor Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Input From");
	xlsWriteLabel($tablehead, $kolomhead++, "Download");
	xlsWriteLabel($tablehead, $kolomhead++, "Download Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Deal");
	xlsWriteLabel($tablehead, $kolomhead++, "Akte Kelahiran");
	xlsWriteLabel($tablehead, $kolomhead++, "Blk Certificate");
	xlsWriteLabel($tablehead, $kolomhead++, "Kartu Keluarga");
	xlsWriteLabel($tablehead, $kolomhead++, "Kartu Tanda Penduduk");
	xlsWriteLabel($tablehead, $kolomhead++, "Passport");
	xlsWriteLabel($tablehead, $kolomhead++, "Pre Medical Certificate");
	xlsWriteLabel($tablehead, $kolomhead++, "Surat Izin Keluarga Cap Lurah");
	xlsWriteLabel($tablehead, $kolomhead++, "Overtime");
	xlsWriteLabel($tablehead, $kolomhead++, "Offday");
	xlsWriteLabel($tablehead, $kolomhead++, "Likepork");
	xlsWriteLabel($tablehead, $kolomhead++, "Eatpork");
	xlsWriteLabel($tablehead, $kolomhead++, "Likedog");
	xlsWriteLabel($tablehead, $kolomhead++, "Likesewing");
	xlsWriteLabel($tablehead, $kolomhead++, "Likegardening");
	xlsWriteLabel($tablehead, $kolomhead++, "Likewashingcar");
	xlsWriteLabel($tablehead, $kolomhead++, "Customer Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Customer Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Customer Phone");
	xlsWriteLabel($tablehead, $kolomhead++, "Customer Address");

	foreach ($this->Worker_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->random_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->vendir_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->for_agency);
	    xlsWriteLabel($tablebody, $kolombody++, $data->passport_number);
	    xlsWriteLabel($tablebody, $kolombody++, $data->country);
	    xlsWriteLabel($tablebody, $kolombody++, $data->for_country);
	    xlsWriteLabel($tablebody, $kolombody++, $data->type_formal);
	    xlsWriteNumber($tablebody, $kolombody++, $data->rating_num);
	    xlsWriteNumber($tablebody, $kolombody++, $data->rating_total);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rating_user);
	    xlsWriteLabel($tablebody, $kolombody++, $data->title);
	    xlsWriteNumber($tablebody, $kolombody++, $data->category);
	    xlsWriteLabel($tablebody, $kolombody++, $data->description);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sub_category);
	    xlsWriteLabel($tablebody, $kolombody++, $data->num_of_imgs);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sale_price);
	    xlsWriteNumber($tablebody, $kolombody++, $data->purchase_price);
	    xlsWriteLabel($tablebody, $kolombody++, $data->shipping_cost);
	    xlsWriteLabel($tablebody, $kolombody++, $data->add_timestamp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->featured);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tag);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->front_image);
	    xlsWriteLabel($tablebody, $kolombody++, $data->brand);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date_of_birth);
	    xlsWriteLabel($tablebody, $kolombody++, $data->place_of_birth);
	    xlsWriteLabel($tablebody, $kolombody++, $data->religion);
	    xlsWriteLabel($tablebody, $kolombody++, $data->province);
	    xlsWriteLabel($tablebody, $kolombody++, $data->district);
	    xlsWriteLabel($tablebody, $kolombody++, $data->address);
	    xlsWriteNumber($tablebody, $kolombody++, $data->height);
	    xlsWriteNumber($tablebody, $kolombody++, $data->weight);
	    xlsWriteLabel($tablebody, $kolombody++, $data->marital_status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->father_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->mother_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->husband_wife_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->children_1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->children_2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->children_3);
	    xlsWriteNumber($tablebody, $kolombody++, $data->number_of_brothers);
	    xlsWriteNumber($tablebody, $kolombody++, $data->number_of_sisters);
	    xlsWriteNumber($tablebody, $kolombody++, $data->number_of_children);
	    xlsWriteNumber($tablebody, $kolombody++, $data->position_in_family);
	    xlsWriteLabel($tablebody, $kolombody++, $data->education);
	    xlsWriteLabel($tablebody, $kolombody++, $data->language);
	    xlsWriteNumber($tablebody, $kolombody++, $data->experience);
	    xlsWriteNumber($tablebody, $kolombody++, $data->current_stock);
	    xlsWriteLabel($tablebody, $kolombody++, $data->transfer);
	    xlsWriteLabel($tablebody, $kolombody++, $data->unit);
	    xlsWriteLabel($tablebody, $kolombody++, $data->remark);
	    xlsWriteLabel($tablebody, $kolombody++, $data->additional_fields);
	    xlsWriteNumber($tablebody, $kolombody++, $data->number_of_view);
	    xlsWriteLabel($tablebody, $kolombody++, $data->background);
	    xlsWriteLabel($tablebody, $kolombody++, $data->discount);
	    xlsWriteLabel($tablebody, $kolombody++, $data->discount_type);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tax);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tax_type);
	    xlsWriteLabel($tablebody, $kolombody++, $data->color);
	    xlsWriteLabel($tablebody, $kolombody++, $data->options);
	    xlsWriteLabel($tablebody, $kolombody++, $data->main_image);
	    xlsWriteLabel($tablebody, $kolombody++, $data->added_by);
	    xlsWriteNumber($tablebody, $kolombody++, $data->vendor_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->input_from);
	    xlsWriteLabel($tablebody, $kolombody++, $data->download);
	    xlsWriteLabel($tablebody, $kolombody++, $data->download_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->akte_kelahiran);
	    xlsWriteLabel($tablebody, $kolombody++, $data->blk_certificate);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kartu_keluarga);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kartu_tanda_penduduk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->passport);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pre_medical_certificate);
	    xlsWriteLabel($tablebody, $kolombody++, $data->surat_izin_keluarga_cap_lurah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->overtime);
	    xlsWriteLabel($tablebody, $kolombody++, $data->offday);
	    xlsWriteLabel($tablebody, $kolombody++, $data->likepork);
	    xlsWriteLabel($tablebody, $kolombody++, $data->eatpork);
	    xlsWriteLabel($tablebody, $kolombody++, $data->likedog);
	    xlsWriteLabel($tablebody, $kolombody++, $data->likesewing);
	    xlsWriteLabel($tablebody, $kolombody++, $data->likegardening);
	    xlsWriteLabel($tablebody, $kolombody++, $data->likewashingcar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->customer_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->customer_email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->customer_phone);
	    xlsWriteLabel($tablebody, $kolombody++, $data->customer_address);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=ts_worker.doc");

        $data = array(
            'ts_worker_data' => $this->Worker_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('ts_worker_doc',$data);
    }

}

/* End of file Worker.php */
/* Location: ./application/controllers/Worker.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-25 05:06:22 */
/* http://harviacode.com */