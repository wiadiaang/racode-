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
        <h2>Ts_agency List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Company</th>
		<th>Display Name</th>
		<th>Ea License</th>
		<th>Address1</th>
		<th>Address2</th>
		<th>Country</th>
		<th>District</th>
		<th>Status</th>
		<th>Membership</th>
		<th>Create Timestamp</th>
		<th>Approve Timestamp</th>
		<th>Member Timestamp</th>
		<th>Member Expire Timestamp</th>
		<th>Details</th>
		<th>Last Login</th>
		<th>Facebook</th>
		<th>Skype</th>
		<th>Google Plus</th>
		<th>Twitter</th>
		<th>Youtube</th>
		<th>Pinterest</th>
		<th>Stripe Details</th>
		<th>Paypal Email</th>
		<th>Preferred Payment</th>
		<th>Cash Set</th>
		<th>Stripe Set</th>
		<th>Paypal Set</th>
		<th>Phone</th>
		<th>Mobile</th>
		<th>Keywords</th>
		<th>Description</th>
		<th>Lat Lang</th>
		
            </tr><?php
            foreach ($agency_data as $agency)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $agency->name ?></td>
		      <td><?php echo $agency->email ?></td>
		      <td><?php echo $agency->password ?></td>
		      <td><?php echo $agency->company ?></td>
		      <td><?php echo $agency->display_name ?></td>
		      <td><?php echo $agency->ea_license ?></td>
		      <td><?php echo $agency->address1 ?></td>
		      <td><?php echo $agency->address2 ?></td>
		      <td><?php echo $agency->country ?></td>
		      <td><?php echo $agency->district ?></td>
		      <td><?php echo $agency->status ?></td>
		      <td><?php echo $agency->membership ?></td>
		      <td><?php echo $agency->create_timestamp ?></td>
		      <td><?php echo $agency->approve_timestamp ?></td>
		      <td><?php echo $agency->member_timestamp ?></td>
		      <td><?php echo $agency->member_expire_timestamp ?></td>
		      <td><?php echo $agency->details ?></td>
		      <td><?php echo $agency->last_login ?></td>
		      <td><?php echo $agency->facebook ?></td>
		      <td><?php echo $agency->skype ?></td>
		      <td><?php echo $agency->google_plus ?></td>
		      <td><?php echo $agency->twitter ?></td>
		      <td><?php echo $agency->youtube ?></td>
		      <td><?php echo $agency->pinterest ?></td>
		      <td><?php echo $agency->stripe_details ?></td>
		      <td><?php echo $agency->paypal_email ?></td>
		      <td><?php echo $agency->preferred_payment ?></td>
		      <td><?php echo $agency->cash_set ?></td>
		      <td><?php echo $agency->stripe_set ?></td>
		      <td><?php echo $agency->paypal_set ?></td>
		      <td><?php echo $agency->phone ?></td>
		      <td><?php echo $agency->mobile ?></td>
		      <td><?php echo $agency->keywords ?></td>
		      <td><?php echo $agency->description ?></td>
		      <td><?php echo $agency->lat_lang ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>