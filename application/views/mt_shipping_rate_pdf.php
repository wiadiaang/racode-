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
        <h2>Mt_shipping_rate List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Merchant Id</th>
		<th>Distance From</th>
		<th>Distance To</th>
		<th>Shipping Units</th>
		<th>Distance Price</th>
		
            </tr><?php
            foreach ($mt_shipping_rate_data as $mt_shipping_rate)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $mt_shipping_rate->merchant_id ?></td>
		      <td><?php echo $mt_shipping_rate->distance_from ?></td>
		      <td><?php echo $mt_shipping_rate->distance_to ?></td>
		      <td><?php echo $mt_shipping_rate->shipping_units ?></td>
		      <td><?php echo $mt_shipping_rate->distance_price ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>