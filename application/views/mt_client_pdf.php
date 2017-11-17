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
        <h2>Mt_client List</h2>
        <table class="word-table" style="margin-bottom: 10px">
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
		
            </tr><?php
            foreach ($customer_data as $customer)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>