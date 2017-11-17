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
        <h2>Ts_pjtki List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Company</th>
		<th>Display Name</th>
		<th>Address1</th>
		<th>Address2</th>
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
		<th>Area Sip1</th>
		<th>Date Sip1</th>
		<th>File Sip1</th>
		<th>Area Sip2</th>
		<th>Date Sip2</th>
		<th>File Sip2</th>
		<th>Area Sip3</th>
		<th>Date Sip3</th>
		<th>File Sip3</th>
		<th>Area Sip4</th>
		<th>Date Sip4</th>
		<th>File Sip4</th>
		<th>Area Sip5</th>
		<th>Date Sip5</th>
		<th>File Sip5</th>
		<th>Area Sip6</th>
		<th>Date Sip6</th>
		<th>File Sip6</th>
		<th>Area Sip7</th>
		<th>Date Sip7</th>
		<th>File Sip7</th>
		
            </tr><?php
            foreach ($pjtki_data as $pjtki)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pjtki->name ?></td>
		      <td><?php echo $pjtki->email ?></td>
		      <td><?php echo $pjtki->password ?></td>
		      <td><?php echo $pjtki->company ?></td>
		      <td><?php echo $pjtki->display_name ?></td>
		      <td><?php echo $pjtki->address1 ?></td>
		      <td><?php echo $pjtki->address2 ?></td>
		      <td><?php echo $pjtki->status ?></td>
		      <td><?php echo $pjtki->membership ?></td>
		      <td><?php echo $pjtki->create_timestamp ?></td>
		      <td><?php echo $pjtki->approve_timestamp ?></td>
		      <td><?php echo $pjtki->member_timestamp ?></td>
		      <td><?php echo $pjtki->member_expire_timestamp ?></td>
		      <td><?php echo $pjtki->details ?></td>
		      <td><?php echo $pjtki->last_login ?></td>
		      <td><?php echo $pjtki->facebook ?></td>
		      <td><?php echo $pjtki->skype ?></td>
		      <td><?php echo $pjtki->google_plus ?></td>
		      <td><?php echo $pjtki->twitter ?></td>
		      <td><?php echo $pjtki->youtube ?></td>
		      <td><?php echo $pjtki->pinterest ?></td>
		      <td><?php echo $pjtki->stripe_details ?></td>
		      <td><?php echo $pjtki->paypal_email ?></td>
		      <td><?php echo $pjtki->preferred_payment ?></td>
		      <td><?php echo $pjtki->cash_set ?></td>
		      <td><?php echo $pjtki->stripe_set ?></td>
		      <td><?php echo $pjtki->paypal_set ?></td>
		      <td><?php echo $pjtki->phone ?></td>
		      <td><?php echo $pjtki->mobile ?></td>
		      <td><?php echo $pjtki->keywords ?></td>
		      <td><?php echo $pjtki->description ?></td>
		      <td><?php echo $pjtki->lat_lang ?></td>
		      <td><?php echo $pjtki->area_sip1 ?></td>
		      <td><?php echo $pjtki->date_sip1 ?></td>
		      <td><?php echo $pjtki->file_sip1 ?></td>
		      <td><?php echo $pjtki->area_sip2 ?></td>
		      <td><?php echo $pjtki->date_sip2 ?></td>
		      <td><?php echo $pjtki->file_sip2 ?></td>
		      <td><?php echo $pjtki->area_sip3 ?></td>
		      <td><?php echo $pjtki->date_sip3 ?></td>
		      <td><?php echo $pjtki->file_sip3 ?></td>
		      <td><?php echo $pjtki->area_sip4 ?></td>
		      <td><?php echo $pjtki->date_sip4 ?></td>
		      <td><?php echo $pjtki->file_sip4 ?></td>
		      <td><?php echo $pjtki->area_sip5 ?></td>
		      <td><?php echo $pjtki->date_sip5 ?></td>
		      <td><?php echo $pjtki->file_sip5 ?></td>
		      <td><?php echo $pjtki->area_sip6 ?></td>
		      <td><?php echo $pjtki->date_sip6 ?></td>
		      <td><?php echo $pjtki->file_sip6 ?></td>
		      <td><?php echo $pjtki->area_sip7 ?></td>
		      <td><?php echo $pjtki->date_sip7 ?></td>
		      <td><?php echo $pjtki->file_sip7 ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>