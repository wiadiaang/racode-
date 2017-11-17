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
        <h2>Mt_merchant List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Restaurant Slug</th>
		<th>Restaurant Name</th>
		<th>Restaurant Phone</th>
		<th>Contact Name</th>
		<th>Contact Phone</th>
		<th>Contact Email</th>
		<th>Country Code</th>
		<th>Street</th>
		<th>City</th>
		<th>State</th>
		<th>Post Code</th>
		<th>Cuisine</th>
		<th>Service</th>
		<th>Free Delivery</th>
		<th>Delivery Estimation</th>
		<th>Username</th>
		<th>Password</th>
		<th>Activation Key</th>
		<th>Activation Token</th>
		<th>Status</th>
		<th>Date Created</th>
		<th>Date Modified</th>
		<th>Date Activated</th>
		<th>Last Login</th>
		<th>Ip Address</th>
		<th>Package Id</th>
		<th>Package Price</th>
		<th>Membership Expired</th>
		<th>Payment Steps</th>
		<th>Is Featured</th>
		<th>Is Ready</th>
		<th>Is Sponsored</th>
		<th>Sponsored Expiration</th>
		<th>Lost Password Code</th>
		<th>User Lang</th>
		<th>Membership Purchase Date</th>
		<th>Sort Featured</th>
		<th>Is Commission</th>
		<th>Percent Commision</th>
		<th>Abn</th>
		<th>Session Token</th>
		<th>Commision Type</th>
		<th>Mobile Session Token</th>
		<th>Token</th>
		<th>Id Session</th>
		
            </tr><?php
            foreach ($mt_merchant_data as $mt_merchant)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $mt_merchant->restaurant_slug ?></td>
		      <td><?php echo $mt_merchant->restaurant_name ?></td>
		      <td><?php echo $mt_merchant->restaurant_phone ?></td>
		      <td><?php echo $mt_merchant->contact_name ?></td>
		      <td><?php echo $mt_merchant->contact_phone ?></td>
		      <td><?php echo $mt_merchant->contact_email ?></td>
		      <td><?php echo $mt_merchant->country_code ?></td>
		      <td><?php echo $mt_merchant->street ?></td>
		      <td><?php echo $mt_merchant->city ?></td>
		      <td><?php echo $mt_merchant->state ?></td>
		      <td><?php echo $mt_merchant->post_code ?></td>
		      <td><?php echo $mt_merchant->cuisine ?></td>
		      <td><?php echo $mt_merchant->service ?></td>
		      <td><?php echo $mt_merchant->free_delivery ?></td>
		      <td><?php echo $mt_merchant->delivery_estimation ?></td>
		      <td><?php echo $mt_merchant->username ?></td>
		      <td><?php echo $mt_merchant->password ?></td>
		      <td><?php echo $mt_merchant->activation_key ?></td>
		      <td><?php echo $mt_merchant->activation_token ?></td>
		      <td><?php echo $mt_merchant->status ?></td>
		      <td><?php echo $mt_merchant->date_created ?></td>
		      <td><?php echo $mt_merchant->date_modified ?></td>
		      <td><?php echo $mt_merchant->date_activated ?></td>
		      <td><?php echo $mt_merchant->last_login ?></td>
		      <td><?php echo $mt_merchant->ip_address ?></td>
		      <td><?php echo $mt_merchant->package_id ?></td>
		      <td><?php echo $mt_merchant->package_price ?></td>
		      <td><?php echo $mt_merchant->membership_expired ?></td>
		      <td><?php echo $mt_merchant->payment_steps ?></td>
		      <td><?php echo $mt_merchant->is_featured ?></td>
		      <td><?php echo $mt_merchant->is_ready ?></td>
		      <td><?php echo $mt_merchant->is_sponsored ?></td>
		      <td><?php echo $mt_merchant->sponsored_expiration ?></td>
		      <td><?php echo $mt_merchant->lost_password_code ?></td>
		      <td><?php echo $mt_merchant->user_lang ?></td>
		      <td><?php echo $mt_merchant->membership_purchase_date ?></td>
		      <td><?php echo $mt_merchant->sort_featured ?></td>
		      <td><?php echo $mt_merchant->is_commission ?></td>
		      <td><?php echo $mt_merchant->percent_commision ?></td>
		      <td><?php echo $mt_merchant->abn ?></td>
		      <td><?php echo $mt_merchant->session_token ?></td>
		      <td><?php echo $mt_merchant->commision_type ?></td>
		      <td><?php echo $mt_merchant->mobile_session_token ?></td>
		      <td><?php echo $mt_merchant->token ?></td>
		      <td><?php echo $mt_merchant->id_session ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>