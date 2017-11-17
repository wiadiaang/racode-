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
        <h2>Mt_item List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Merchant Id</th>
		<th>Item Name</th>
		<th>Item Description</th>
		<th>Item Address</th>
		<th>Item Latitude</th>
		<th>Item Longitude</th>
		<th>Date Start</th>
		<th>Time Start</th>
		<th>Date Finish</th>
		<th>Time Finish</th>
		<th>Status</th>
		<th>Category</th>
		<th>Price</th>
		<th>Qty</th>
		<th>Addon Item</th>
		<th>Cooking Ref</th>
		<th>Discount</th>
		<th>Multi Option</th>
		<th>Multi Option Value</th>
		<th>Photo</th>
		<th>Sequence</th>
		<th>Is Featured</th>
		<th>Date Created</th>
		<th>Date Modified</th>
		<th>Ip Address</th>
		<th>Ingredients</th>
		<th>Spicydish</th>
		<th>Two Flavors</th>
		<th>Two Flavors Position</th>
		<th>Require Addon</th>
		<th>Dish</th>
		<th>Item Name Trans</th>
		<th>Item Description Trans</th>
		<th>Non Taxable</th>
		<th>Not Available</th>
		<th>Gallery Photo</th>
		<th>Points Earned</th>
		<th>Points Disabled</th>
		
            </tr><?php
            foreach ($item_data as $item)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $item->merchant_id ?></td>
		      <td><?php echo $item->item_name ?></td>
		      <td><?php echo $item->item_description ?></td>
		      <td><?php echo $item->item_address ?></td>
		      <td><?php echo $item->item_latitude ?></td>
		      <td><?php echo $item->item_longitude ?></td>
		      <td><?php echo $item->date_start ?></td>
		      <td><?php echo $item->time_start ?></td>
		      <td><?php echo $item->date_finish ?></td>
		      <td><?php echo $item->time_finish ?></td>
		      <td><?php echo $item->status ?></td>
		      <td><?php echo $item->category ?></td>
		      <td><?php echo $item->price ?></td>
		      <td><?php echo $item->qty ?></td>
		      <td><?php echo $item->addon_item ?></td>
		      <td><?php echo $item->cooking_ref ?></td>
		      <td><?php echo $item->discount ?></td>
		      <td><?php echo $item->multi_option ?></td>
		      <td><?php echo $item->multi_option_value ?></td>
		      <td><?php echo $item->photo ?></td>
		      <td><?php echo $item->sequence ?></td>
		      <td><?php echo $item->is_featured ?></td>
		      <td><?php echo $item->date_created ?></td>
		      <td><?php echo $item->date_modified ?></td>
		      <td><?php echo $item->ip_address ?></td>
		      <td><?php echo $item->ingredients ?></td>
		      <td><?php echo $item->spicydish ?></td>
		      <td><?php echo $item->two_flavors ?></td>
		      <td><?php echo $item->two_flavors_position ?></td>
		      <td><?php echo $item->require_addon ?></td>
		      <td><?php echo $item->dish ?></td>
		      <td><?php echo $item->item_name_trans ?></td>
		      <td><?php echo $item->item_description_trans ?></td>
		      <td><?php echo $item->non_taxable ?></td>
		      <td><?php echo $item->not_available ?></td>
		      <td><?php echo $item->gallery_photo ?></td>
		      <td><?php echo $item->points_earned ?></td>
		      <td><?php echo $item->points_disabled ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>