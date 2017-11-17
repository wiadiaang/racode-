<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Ts_worker List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Random Id</th>
		<th>Vendir Id</th>
		<th>For Agency</th>
		<th>Passport Number</th>
		<th>Country</th>
		<th>For Country</th>
		<th>Type Formal</th>
		<th>Rating Num</th>
		<th>Rating Total</th>
		<th>Rating User</th>
		<th>Title</th>
		<th>Category</th>
		<th>Description</th>
		<th>Sub Category</th>
		<th>Num Of Imgs</th>
		<th>Sale Price</th>
		<th>Purchase Price</th>
		<th>Shipping Cost</th>
		<th>Add Timestamp</th>
		<th>Featured</th>
		<th>Tag</th>
		<th>Status</th>
		<th>Front Image</th>
		<th>Brand</th>
		<th>Date Of Birth</th>
		<th>Place Of Birth</th>
		<th>Religion</th>
		<th>Province</th>
		<th>District</th>
		<th>Address</th>
		<th>Height</th>
		<th>Weight</th>
		<th>Marital Status</th>
		<th>Father Name</th>
		<th>Mother Name</th>
		<th>Husband Wife Name</th>
		<th>Children 1</th>
		<th>Children 2</th>
		<th>Children 3</th>
		<th>Number Of Brothers</th>
		<th>Number Of Sisters</th>
		<th>Number Of Children</th>
		<th>Position In Family</th>
		<th>Education</th>
		<th>Language</th>
		<th>Experience</th>
		<th>Current Stock</th>
		<th>Transfer</th>
		<th>Unit</th>
		<th>Remark</th>
		<th>Additional Fields</th>
		<th>Number Of View</th>
		<th>Background</th>
		<th>Discount</th>
		<th>Discount Type</th>
		<th>Tax</th>
		<th>Tax Type</th>
		<th>Color</th>
		<th>Options</th>
		<th>Main Image</th>
		<th>Added By</th>
		<th>Vendor Id</th>
		<th>Input From</th>
		<th>Download</th>
		<th>Download Name</th>
		<th>Deal</th>
		<th>Akte Kelahiran</th>
		<th>Blk Certificate</th>
		<th>Kartu Keluarga</th>
		<th>Kartu Tanda Penduduk</th>
		<th>Passport</th>
		<th>Pre Medical Certificate</th>
		<th>Surat Izin Keluarga Cap Lurah</th>
		<th>Overtime</th>
		<th>Offday</th>
		<th>Likepork</th>
		<th>Eatpork</th>
		<th>Likedog</th>
		<th>Likesewing</th>
		<th>Likegardening</th>
		<th>Likewashingcar</th>
		<th>Customer Name</th>
		<th>Customer Email</th>
		<th>Customer Phone</th>
		<th>Customer Address</th>
		
            </tr><?php
            foreach ($worker_data as $worker)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $worker->random_id ?></td>
		      <td><?php echo $worker->vendir_id ?></td>
		      <td><?php echo $worker->for_agency ?></td>
		      <td><?php echo $worker->passport_number ?></td>
		      <td><?php echo $worker->country ?></td>
		      <td><?php echo $worker->for_country ?></td>
		      <td><?php echo $worker->type_formal ?></td>
		      <td><?php echo $worker->rating_num ?></td>
		      <td><?php echo $worker->rating_total ?></td>
		      <td><?php echo $worker->rating_user ?></td>
		      <td><?php echo $worker->title ?></td>
		      <td><?php echo $worker->category ?></td>
		      <td><?php echo $worker->description ?></td>
		      <td><?php echo $worker->sub_category ?></td>
		      <td><?php echo $worker->num_of_imgs ?></td>
		      <td><?php echo $worker->sale_price ?></td>
		      <td><?php echo $worker->purchase_price ?></td>
		      <td><?php echo $worker->shipping_cost ?></td>
		      <td><?php echo $worker->add_timestamp ?></td>
		      <td><?php echo $worker->featured ?></td>
		      <td><?php echo $worker->tag ?></td>
		      <td><?php echo $worker->status ?></td>
		      <td><?php echo $worker->front_image ?></td>
		      <td><?php echo $worker->brand ?></td>
		      <td><?php echo $worker->date_of_birth ?></td>
		      <td><?php echo $worker->place_of_birth ?></td>
		      <td><?php echo $worker->religion ?></td>
		      <td><?php echo $worker->province ?></td>
		      <td><?php echo $worker->district ?></td>
		      <td><?php echo $worker->address ?></td>
		      <td><?php echo $worker->height ?></td>
		      <td><?php echo $worker->weight ?></td>
		      <td><?php echo $worker->marital_status ?></td>
		      <td><?php echo $worker->father_name ?></td>
		      <td><?php echo $worker->mother_name ?></td>
		      <td><?php echo $worker->husband_wife_name ?></td>
		      <td><?php echo $worker->children_1 ?></td>
		      <td><?php echo $worker->children_2 ?></td>
		      <td><?php echo $worker->children_3 ?></td>
		      <td><?php echo $worker->number_of_brothers ?></td>
		      <td><?php echo $worker->number_of_sisters ?></td>
		      <td><?php echo $worker->number_of_children ?></td>
		      <td><?php echo $worker->position_in_family ?></td>
		      <td><?php echo $worker->education ?></td>
		      <td><?php echo $worker->language ?></td>
		      <td><?php echo $worker->experience ?></td>
		      <td><?php echo $worker->current_stock ?></td>
		      <td><?php echo $worker->transfer ?></td>
		      <td><?php echo $worker->unit ?></td>
		      <td><?php echo $worker->remark ?></td>
		      <td><?php echo $worker->additional_fields ?></td>
		      <td><?php echo $worker->number_of_view ?></td>
		      <td><?php echo $worker->background ?></td>
		      <td><?php echo $worker->discount ?></td>
		      <td><?php echo $worker->discount_type ?></td>
		      <td><?php echo $worker->tax ?></td>
		      <td><?php echo $worker->tax_type ?></td>
		      <td><?php echo $worker->color ?></td>
		      <td><?php echo $worker->options ?></td>
		      <td><?php echo $worker->main_image ?></td>
		      <td><?php echo $worker->added_by ?></td>
		      <td><?php echo $worker->vendor_id ?></td>
		      <td><?php echo $worker->input_from ?></td>
		      <td><?php echo $worker->download ?></td>
		      <td><?php echo $worker->download_name ?></td>
		      <td><?php echo $worker->deal ?></td>
		      <td><?php echo $worker->akte_kelahiran ?></td>
		      <td><?php echo $worker->blk_certificate ?></td>
		      <td><?php echo $worker->kartu_keluarga ?></td>
		      <td><?php echo $worker->kartu_tanda_penduduk ?></td>
		      <td><?php echo $worker->passport ?></td>
		      <td><?php echo $worker->pre_medical_certificate ?></td>
		      <td><?php echo $worker->surat_izin_keluarga_cap_lurah ?></td>
		      <td><?php echo $worker->overtime ?></td>
		      <td><?php echo $worker->offday ?></td>
		      <td><?php echo $worker->likepork ?></td>
		      <td><?php echo $worker->eatpork ?></td>
		      <td><?php echo $worker->likedog ?></td>
		      <td><?php echo $worker->likesewing ?></td>
		      <td><?php echo $worker->likegardening ?></td>
		      <td><?php echo $worker->likewashingcar ?></td>
		      <td><?php echo $worker->customer_name ?></td>
		      <td><?php echo $worker->customer_email ?></td>
		      <td><?php echo $worker->customer_phone ?></td>
		      <td><?php echo $worker->customer_address ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>