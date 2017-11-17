<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Mt_client List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('customer/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('customer/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('customer'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Social Strategy</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email Address</th>
		<th>Password</th>
		<th>Street</th>
		<th>City</th>
		<th>State</th>
		<th>Zipcode</th>
		<th>Country Code</th>
		<th>Location Name</th>
		<th>Contact Phone</th>
		<th>Lost Password Token</th>
		<th>Date Created</th>
		<th>Date Modified</th>
		<th>Last Login</th>
		<th>Ip Address</th>
		<th>Status</th>
		<th>Token</th>
		<th>Mobile Verification Code</th>
		<th>Mobile Verification Date</th>
		<th>Custom Field1</th>
		<th>Custom Field2</th>
		<th>Avatar</th>
		<th>Email Verification Code</th>
		<th>Is Guest</th>
		<th>Id Session</th>
		<th>Action</th>
            </tr><?php
            foreach ($customer_data as $customer)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $customer->social_strategy ?></td>
			<td><?php echo $customer->first_name ?></td>
			<td><?php echo $customer->last_name ?></td>
			<td><?php echo $customer->email_address ?></td>
			<td><?php echo $customer->password ?></td>
			<td><?php echo $customer->street ?></td>
			<td><?php echo $customer->city ?></td>
			<td><?php echo $customer->state ?></td>
			<td><?php echo $customer->zipcode ?></td>
			<td><?php echo $customer->country_code ?></td>
			<td><?php echo $customer->location_name ?></td>
			<td><?php echo $customer->contact_phone ?></td>
			<td><?php echo $customer->lost_password_token ?></td>
			<td><?php echo $customer->date_created ?></td>
			<td><?php echo $customer->date_modified ?></td>
			<td><?php echo $customer->last_login ?></td>
			<td><?php echo $customer->ip_address ?></td>
			<td><?php echo $customer->status ?></td>
			<td><?php echo $customer->token ?></td>
			<td><?php echo $customer->mobile_verification_code ?></td>
			<td><?php echo $customer->mobile_verification_date ?></td>
			<td><?php echo $customer->custom_field1 ?></td>
			<td><?php echo $customer->custom_field2 ?></td>
			<td><?php echo $customer->avatar ?></td>
			<td><?php echo $customer->email_verification_code ?></td>
			<td><?php echo $customer->is_guest ?></td>
			<td><?php echo $customer->id_session ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('customer/read/'.$customer->client_id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('customer/update/'.$customer->client_id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('customer/delete/'.$customer->client_id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>