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
        <h2>Ts_customer List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Username</th>
		<th>Surname</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address1</th>
		<th>Address2</th>
		<th>City</th>
		<th>Country</th>
		<th>Zip</th>
		<th>Langlat</th>
		<th>Password</th>
		<th>Fb Id</th>
		<th>G Id</th>
		<th>G Photo</th>
		<th>Creation Date</th>
		<th>Google Plus</th>
		<th>Skype</th>
		<th>Facebook</th>
		<th>Wishlist</th>
		<th>Last Login</th>
		<th>Downloads</th>
		
            </tr><?php
            foreach ($customer_data as $customer)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $customer->username ?></td>
		      <td><?php echo $customer->surname ?></td>
		      <td><?php echo $customer->email ?></td>
		      <td><?php echo $customer->phone ?></td>
		      <td><?php echo $customer->address1 ?></td>
		      <td><?php echo $customer->address2 ?></td>
		      <td><?php echo $customer->city ?></td>
		      <td><?php echo $customer->country ?></td>
		      <td><?php echo $customer->zip ?></td>
		      <td><?php echo $customer->langlat ?></td>
		      <td><?php echo $customer->password ?></td>
		      <td><?php echo $customer->fb_id ?></td>
		      <td><?php echo $customer->g_id ?></td>
		      <td><?php echo $customer->g_photo ?></td>
		      <td><?php echo $customer->creation_date ?></td>
		      <td><?php echo $customer->google_plus ?></td>
		      <td><?php echo $customer->skype ?></td>
		      <td><?php echo $customer->facebook ?></td>
		      <td><?php echo $customer->wishlist ?></td>
		      <td><?php echo $customer->last_login ?></td>
		      <td><?php echo $customer->downloads ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>