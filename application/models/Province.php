<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Province_model extends CI_Model
{

    

    function __construct()
    {
        parent::__construct();
    }

    // get all
   
      // get data for combobox
    function get_for_combo()
    {
        // ambil data dari db
      
        $this->db->order_by('province_id','ASC');
        $result = $this->db->get('province');
  
      
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Please Select';

        
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->province_id] = $row->province_name;
            }
        }
        return $dd;
    }

}