<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agency extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agency_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'agency/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'agency/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'agency/index.html';
            $config['first_url'] = base_url() . 'agency/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Agency_model->total_rows($q);
        $agency = $this->Agency_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'agency_data' => $agency,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','ts_agency_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Agency_model->get_by_id($id);
        if ($row) {
            $data = array(
		'vendir_id' => $row->vendir_id,
		'name' => $row->name,
		'email' => $row->email,
		'password' => $row->password,
		'company' => $row->company,
		'display_name' => $row->display_name,
		'ea_license' => $row->ea_license,
		'address1' => $row->address1,
		'address2' => $row->address2,
		'country' => $row->country,
		'district' => $row->district,
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
	    );
            $this->template->load('template','ts_agency_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('agency'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('agency/create_action'),
	    'vendir_id' => set_value('vendir_id'),
	    'name' => set_value('name'),
	    'email' => set_value('email'),
	    'password' => set_value('password'),
	    'company' => set_value('company'),
	    'display_name' => set_value('display_name'),
	    'ea_license' => set_value('ea_license'),
	    'address1' => set_value('address1'),
	    'address2' => set_value('address2'),
	    'country' => set_value('country'),
	    'district' => set_value('district'),
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
	);
        $this->template->load('template','ts_agency_form', $data);
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
		'ea_license' => $this->input->post('ea_license',TRUE),
		'address1' => $this->input->post('address1',TRUE),
		'address2' => $this->input->post('address2',TRUE),
		'country' => $this->input->post('country',TRUE),
		'district' => $this->input->post('district',TRUE),
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
	    );

            $this->Agency_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('agency'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Agency_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('agency/update_action'),
		'vendir_id' => set_value('vendir_id', $row->vendir_id),
		'name' => set_value('name', $row->name),
		'email' => set_value('email', $row->email),
		'password' => set_value('password', $row->password),
		'company' => set_value('company', $row->company),
		'display_name' => set_value('display_name', $row->display_name),
		'ea_license' => set_value('ea_license', $row->ea_license),
		'address1' => set_value('address1', $row->address1),
		'address2' => set_value('address2', $row->address2),
		'country' => set_value('country', $row->country),
		'district' => set_value('district', $row->district),
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
	    );
            $this->template->load('template','ts_agency_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('agency'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('vendir_id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'company' => $this->input->post('company',TRUE),
		'display_name' => $this->input->post('display_name',TRUE),
		'ea_license' => $this->input->post('ea_license',TRUE),
		'address1' => $this->input->post('address1',TRUE),
		'address2' => $this->input->post('address2',TRUE),
		'country' => $this->input->post('country',TRUE),
		'district' => $this->input->post('district',TRUE),
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
	    );

            $this->Agency_model->update($this->input->post('vendir_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('agency'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Agency_model->get_by_id($id);

        if ($row) {
            $this->Agency_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('agency'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('agency'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('company', 'company', 'trim|required');
	$this->form_validation->set_rules('display_name', 'display name', 'trim|required');
	$this->form_validation->set_rules('ea_license', 'ea license', 'trim|required');
	$this->form_validation->set_rules('address1', 'address1', 'trim|required');
	$this->form_validation->set_rules('address2', 'address2', 'trim|required');
	$this->form_validation->set_rules('country', 'country', 'trim|required');
	$this->form_validation->set_rules('district', 'district', 'trim|required');
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

	$this->form_validation->set_rules('vendir_id', 'vendir_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "ts_agency.xls";
        $judul = "ts_agency";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Ea License");
	xlsWriteLabel($tablehead, $kolomhead++, "Address1");
	xlsWriteLabel($tablehead, $kolomhead++, "Address2");
	xlsWriteLabel($tablehead, $kolomhead++, "Country");
	xlsWriteLabel($tablehead, $kolomhead++, "District");
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

	foreach ($this->Agency_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->company);
	    xlsWriteLabel($tablebody, $kolombody++, $data->display_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ea_license);
	    xlsWriteLabel($tablebody, $kolombody++, $data->address1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->address2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->country);
	    xlsWriteLabel($tablebody, $kolombody++, $data->district);
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

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=ts_agency.doc");

        $data = array(
            'ts_agency_data' => $this->Agency_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('ts_agency_doc',$data);
    }

}

/* End of file Agency.php */
/* Location: ./application/controllers/Agency.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-01-26 08:50:41 */
/* http://harviacode.com */