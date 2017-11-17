<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Item extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $item = $this->Item_model->get_all();

        $data = array(
            'item_data' => $item
        );

        $this->template->load('template','mt_item_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Item_model->get_by_id($id);
        if ($row) {
            $data = array(
		'item_id' => $row->item_id,
		'merchant_id' => $row->merchant_id,
		'item_name' => $row->item_name,
		'item_description' => $row->item_description,
		'item_address' => $row->item_address,
		'item_latitude' => $row->item_latitude,
		'item_longitude' => $row->item_longitude,
		'date_start' => $row->date_start,
		'time_start' => $row->time_start,
		'date_finish' => $row->date_finish,
		'time_finish' => $row->time_finish,
		'status' => $row->status,
		'category' => $row->category,
		'price' => $row->price,
		'qty' => $row->qty,
		'addon_item' => $row->addon_item,
		'cooking_ref' => $row->cooking_ref,
		'discount' => $row->discount,
		'multi_option' => $row->multi_option,
		'multi_option_value' => $row->multi_option_value,
		'photo' => $row->photo,
		'sequence' => $row->sequence,
		'is_featured' => $row->is_featured,
		'date_created' => $row->date_created,
		'date_modified' => $row->date_modified,
		'ip_address' => $row->ip_address,
		'ingredients' => $row->ingredients,
		'spicydish' => $row->spicydish,
		'two_flavors' => $row->two_flavors,
		'two_flavors_position' => $row->two_flavors_position,
		'require_addon' => $row->require_addon,
		'dish' => $row->dish,
		'item_name_trans' => $row->item_name_trans,
		'item_description_trans' => $row->item_description_trans,
		'non_taxable' => $row->non_taxable,
		'not_available' => $row->not_available,
		'gallery_photo' => $row->gallery_photo,
		'points_earned' => $row->points_earned,
		'points_disabled' => $row->points_disabled,
	    );
            $this->template->load('template','mt_item_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('item/create_action'),
	    'item_id' => set_value('item_id'),
	    'merchant_id' => set_value('merchant_id'),
	    'item_name' => set_value('item_name'),
	    'item_description' => set_value('item_description'),
	    'item_address' => set_value('item_address'),
	    'item_latitude' => set_value('item_latitude'),
	    'item_longitude' => set_value('item_longitude'),
	    'date_start' => set_value('date_start'),
	    'time_start' => set_value('time_start'),
	    'date_finish' => set_value('date_finish'),
	    'time_finish' => set_value('time_finish'),
	    'status' => set_value('status'),
	    'category' => set_value('category'),
	    'price' => set_value('price'),
	    'qty' => set_value('qty'),
	    'addon_item' => set_value('addon_item'),
	    'cooking_ref' => set_value('cooking_ref'),
	    'discount' => set_value('discount'),
	    'multi_option' => set_value('multi_option'),
	    'multi_option_value' => set_value('multi_option_value'),
	    'photo' => set_value('photo'),
	    'sequence' => set_value('sequence'),
	    'is_featured' => set_value('is_featured'),
	    'date_created' => set_value('date_created'),
	    'date_modified' => set_value('date_modified'),
	    'ip_address' => set_value('ip_address'),
	    'ingredients' => set_value('ingredients'),
	    'spicydish' => set_value('spicydish'),
	    'two_flavors' => set_value('two_flavors'),
	    'two_flavors_position' => set_value('two_flavors_position'),
	    'require_addon' => set_value('require_addon'),
	    'dish' => set_value('dish'),
	    'item_name_trans' => set_value('item_name_trans'),
	    'item_description_trans' => set_value('item_description_trans'),
	    'non_taxable' => set_value('non_taxable'),
	    'not_available' => set_value('not_available'),
	    'gallery_photo' => set_value('gallery_photo'),
	    'points_earned' => set_value('points_earned'),
	    'points_disabled' => set_value('points_disabled'),
	);
        $this->template->load('template','mt_item_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'merchant_id' => $this->input->post('merchant_id',TRUE),
		'item_name' => $this->input->post('item_name',TRUE),
		'item_description' => $this->input->post('item_description',TRUE),
		'item_address' => $this->input->post('item_address',TRUE),
		'item_latitude' => $this->input->post('item_latitude',TRUE),
		'item_longitude' => $this->input->post('item_longitude',TRUE),
		'date_start' => $this->input->post('date_start',TRUE),
		'time_start' => $this->input->post('time_start',TRUE),
		'date_finish' => $this->input->post('date_finish',TRUE),
		'time_finish' => $this->input->post('time_finish',TRUE),
		'status' => $this->input->post('status',TRUE),
		'category' => $this->input->post('category',TRUE),
		'price' => $this->input->post('price',TRUE),
		'qty' => $this->input->post('qty',TRUE),
		'addon_item' => $this->input->post('addon_item',TRUE),
		'cooking_ref' => $this->input->post('cooking_ref',TRUE),
		'discount' => $this->input->post('discount',TRUE),
		'multi_option' => $this->input->post('multi_option',TRUE),
		'multi_option_value' => $this->input->post('multi_option_value',TRUE),
		'photo' => $this->input->post('photo',TRUE),
		'sequence' => $this->input->post('sequence',TRUE),
		'is_featured' => $this->input->post('is_featured',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'ingredients' => $this->input->post('ingredients',TRUE),
		'spicydish' => $this->input->post('spicydish',TRUE),
		'two_flavors' => $this->input->post('two_flavors',TRUE),
		'two_flavors_position' => $this->input->post('two_flavors_position',TRUE),
		'require_addon' => $this->input->post('require_addon',TRUE),
		'dish' => $this->input->post('dish',TRUE),
		'item_name_trans' => $this->input->post('item_name_trans',TRUE),
		'item_description_trans' => $this->input->post('item_description_trans',TRUE),
		'non_taxable' => $this->input->post('non_taxable',TRUE),
		'not_available' => $this->input->post('not_available',TRUE),
		'gallery_photo' => $this->input->post('gallery_photo',TRUE),
		'points_earned' => $this->input->post('points_earned',TRUE),
		'points_disabled' => $this->input->post('points_disabled',TRUE),
	    );

            $this->Item_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('item'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Item_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('item/update_action'),
		'item_id' => set_value('item_id', $row->item_id),
		'merchant_id' => set_value('merchant_id', $row->merchant_id),
		'item_name' => set_value('item_name', $row->item_name),
		'item_description' => set_value('item_description', $row->item_description),
		'item_address' => set_value('item_address', $row->item_address),
		'item_latitude' => set_value('item_latitude', $row->item_latitude),
		'item_longitude' => set_value('item_longitude', $row->item_longitude),
		'date_start' => set_value('date_start', $row->date_start),
		'time_start' => set_value('time_start', $row->time_start),
		'date_finish' => set_value('date_finish', $row->date_finish),
		'time_finish' => set_value('time_finish', $row->time_finish),
		'status' => set_value('status', $row->status),
		'category' => set_value('category', $row->category),
		'price' => set_value('price', $row->price),
		'qty' => set_value('qty', $row->qty),
		'addon_item' => set_value('addon_item', $row->addon_item),
		'cooking_ref' => set_value('cooking_ref', $row->cooking_ref),
		'discount' => set_value('discount', $row->discount),
		'multi_option' => set_value('multi_option', $row->multi_option),
		'multi_option_value' => set_value('multi_option_value', $row->multi_option_value),
		'photo' => set_value('photo', $row->photo),
		'sequence' => set_value('sequence', $row->sequence),
		'is_featured' => set_value('is_featured', $row->is_featured),
		'date_created' => set_value('date_created', $row->date_created),
		'date_modified' => set_value('date_modified', $row->date_modified),
		'ip_address' => set_value('ip_address', $row->ip_address),
		'ingredients' => set_value('ingredients', $row->ingredients),
		'spicydish' => set_value('spicydish', $row->spicydish),
		'two_flavors' => set_value('two_flavors', $row->two_flavors),
		'two_flavors_position' => set_value('two_flavors_position', $row->two_flavors_position),
		'require_addon' => set_value('require_addon', $row->require_addon),
		'dish' => set_value('dish', $row->dish),
		'item_name_trans' => set_value('item_name_trans', $row->item_name_trans),
		'item_description_trans' => set_value('item_description_trans', $row->item_description_trans),
		'non_taxable' => set_value('non_taxable', $row->non_taxable),
		'not_available' => set_value('not_available', $row->not_available),
		'gallery_photo' => set_value('gallery_photo', $row->gallery_photo),
		'points_earned' => set_value('points_earned', $row->points_earned),
		'points_disabled' => set_value('points_disabled', $row->points_disabled),
	    );
            $this->template->load('template','mt_item_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('item_id', TRUE));
        } else {
            $data = array(
		'merchant_id' => $this->input->post('merchant_id',TRUE),
		'item_name' => $this->input->post('item_name',TRUE),
		'item_description' => $this->input->post('item_description',TRUE),
		'item_address' => $this->input->post('item_address',TRUE),
		'item_latitude' => $this->input->post('item_latitude',TRUE),
		'item_longitude' => $this->input->post('item_longitude',TRUE),
		'date_start' => $this->input->post('date_start',TRUE),
		'time_start' => $this->input->post('time_start',TRUE),
		'date_finish' => $this->input->post('date_finish',TRUE),
		'time_finish' => $this->input->post('time_finish',TRUE),
		'status' => $this->input->post('status',TRUE),
		'category' => $this->input->post('category',TRUE),
		'price' => $this->input->post('price',TRUE),
		'qty' => $this->input->post('qty',TRUE),
		'addon_item' => $this->input->post('addon_item',TRUE),
		'cooking_ref' => $this->input->post('cooking_ref',TRUE),
		'discount' => $this->input->post('discount',TRUE),
		'multi_option' => $this->input->post('multi_option',TRUE),
		'multi_option_value' => $this->input->post('multi_option_value',TRUE),
		'photo' => $this->input->post('photo',TRUE),
		'sequence' => $this->input->post('sequence',TRUE),
		'is_featured' => $this->input->post('is_featured',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'ingredients' => $this->input->post('ingredients',TRUE),
		'spicydish' => $this->input->post('spicydish',TRUE),
		'two_flavors' => $this->input->post('two_flavors',TRUE),
		'two_flavors_position' => $this->input->post('two_flavors_position',TRUE),
		'require_addon' => $this->input->post('require_addon',TRUE),
		'dish' => $this->input->post('dish',TRUE),
		'item_name_trans' => $this->input->post('item_name_trans',TRUE),
		'item_description_trans' => $this->input->post('item_description_trans',TRUE),
		'non_taxable' => $this->input->post('non_taxable',TRUE),
		'not_available' => $this->input->post('not_available',TRUE),
		'gallery_photo' => $this->input->post('gallery_photo',TRUE),
		'points_earned' => $this->input->post('points_earned',TRUE),
		'points_disabled' => $this->input->post('points_disabled',TRUE),
	    );

            $this->Item_model->update($this->input->post('item_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('item'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Item_model->get_by_id($id);

        if ($row) {
            $this->Item_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('item'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('merchant_id', 'merchant id', 'trim|required');
	$this->form_validation->set_rules('item_name', 'item name', 'trim|required');
	$this->form_validation->set_rules('item_description', 'item description', 'trim|required');
	$this->form_validation->set_rules('item_address', 'item address', 'trim|required');
	$this->form_validation->set_rules('item_latitude', 'item latitude', 'trim|required');
	$this->form_validation->set_rules('item_longitude', 'item longitude', 'trim|required');
	$this->form_validation->set_rules('date_start', 'date start', 'trim|required');
	$this->form_validation->set_rules('time_start', 'time start', 'trim|required');
	$this->form_validation->set_rules('date_finish', 'date finish', 'trim|required');
	$this->form_validation->set_rules('time_finish', 'time finish', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('category', 'category', 'trim|required');
	$this->form_validation->set_rules('price', 'price', 'trim|required');
	$this->form_validation->set_rules('qty', 'qty', 'trim|required');
	$this->form_validation->set_rules('addon_item', 'addon item', 'trim|required');
	$this->form_validation->set_rules('cooking_ref', 'cooking ref', 'trim|required');
	$this->form_validation->set_rules('discount', 'discount', 'trim|required');
	$this->form_validation->set_rules('multi_option', 'multi option', 'trim|required');
	$this->form_validation->set_rules('multi_option_value', 'multi option value', 'trim|required');
	$this->form_validation->set_rules('photo', 'photo', 'trim|required');
	$this->form_validation->set_rules('sequence', 'sequence', 'trim|required');
	$this->form_validation->set_rules('is_featured', 'is featured', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('ip_address', 'ip address', 'trim|required');
	$this->form_validation->set_rules('ingredients', 'ingredients', 'trim|required');
	$this->form_validation->set_rules('spicydish', 'spicydish', 'trim|required');
	$this->form_validation->set_rules('two_flavors', 'two flavors', 'trim|required');
	$this->form_validation->set_rules('two_flavors_position', 'two flavors position', 'trim|required');
	$this->form_validation->set_rules('require_addon', 'require addon', 'trim|required');
	$this->form_validation->set_rules('dish', 'dish', 'trim|required');
	$this->form_validation->set_rules('item_name_trans', 'item name trans', 'trim|required');
	$this->form_validation->set_rules('item_description_trans', 'item description trans', 'trim|required');
	$this->form_validation->set_rules('non_taxable', 'non taxable', 'trim|required');
	$this->form_validation->set_rules('not_available', 'not available', 'trim|required');
	$this->form_validation->set_rules('gallery_photo', 'gallery photo', 'trim|required');
	$this->form_validation->set_rules('points_earned', 'points earned', 'trim|required');
	$this->form_validation->set_rules('points_disabled', 'points disabled', 'trim|required');

	$this->form_validation->set_rules('item_id', 'item_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Item.php */
/* Location: ./application/controllers/Item.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-02 09:10:03 */
/* http://harviacode.com */