<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>MT_CLIENT</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Social Strategy <?php echo form_error('social_strategy') ?></td>
            <td><input type="text" class="form-control" name="social_strategy" id="social_strategy" placeholder="Social Strategy" value="<?php echo $social_strategy; ?>" />
        </td>
	    <tr><td>First Name <?php echo form_error('first_name') ?></td>
            <td><input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $first_name; ?>" />
        </td>
	    <tr><td>Last Name <?php echo form_error('last_name') ?></td>
            <td><input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>" />
        </td>
	    <tr><td>Email Address <?php echo form_error('email_address') ?></td>
            <td><input type="text" class="form-control" name="email_address" id="email_address" placeholder="Email Address" value="<?php echo $email_address; ?>" />
        </td>
	    <tr><td>Password <?php echo form_error('password') ?></td>
            <td><input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </td>
	    <tr><td>Street <?php echo form_error('street') ?></td>
            <td><input type="text" class="form-control" name="street" id="street" placeholder="Street" value="<?php echo $street; ?>" />
        </td>
	    <tr><td>City <?php echo form_error('city') ?></td>
            <td><input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?php echo $city; ?>" />
        </td>
	    <tr><td>State <?php echo form_error('state') ?></td>
            <td><input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?php echo $state; ?>" />
        </td>
	    <tr><td>Zipcode <?php echo form_error('zipcode') ?></td>
            <td><input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zipcode" value="<?php echo $zipcode; ?>" />
        </td>
	    <tr><td>Country Code <?php echo form_error('country_code') ?></td>
            <td><input type="text" class="form-control" name="country_code" id="country_code" placeholder="Country Code" value="<?php echo $country_code; ?>" />
        </td>
	    <tr><td>Location Name <?php echo form_error('location_name') ?></td>
            <td><textarea class="form-control" rows="3" name="location_name" id="location_name" placeholder="Location Name"><?php echo $location_name; ?></textarea>
        </td></tr>
	    <tr><td>Contact Phone <?php echo form_error('contact_phone') ?></td>
            <td><input type="text" class="form-control" name="contact_phone" id="contact_phone" placeholder="Contact Phone" value="<?php echo $contact_phone; ?>" />
        </td>
	    <tr><td>Lost Password Token <?php echo form_error('lost_password_token') ?></td>
            <td><input type="text" class="form-control" name="lost_password_token" id="lost_password_token" placeholder="Lost Password Token" value="<?php echo $lost_password_token; ?>" />
        </td>
	    <tr><td>Date Created <?php echo form_error('date_created') ?></td>
            <td><input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </td>
	    <tr><td>Date Modified <?php echo form_error('date_modified') ?></td>
            <td><input type="text" class="form-control" name="date_modified" id="date_modified" placeholder="Date Modified" value="<?php echo $date_modified; ?>" />
        </td>
	    <tr><td>Last Login <?php echo form_error('last_login') ?></td>
            <td><input type="text" class="form-control" name="last_login" id="last_login" placeholder="Last Login" value="<?php echo $last_login; ?>" />
        </td>
	    <tr><td>Ip Address <?php echo form_error('ip_address') ?></td>
            <td><input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Ip Address" value="<?php echo $ip_address; ?>" />
        </td>
	    <tr><td>Status <?php echo form_error('status') ?></td>
            <td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </td>
	    <tr><td>Token <?php echo form_error('token') ?></td>
            <td><input type="text" class="form-control" name="token" id="token" placeholder="Token" value="<?php echo $token; ?>" />
        </td>
	    <tr><td>Mobile Verification Code <?php echo form_error('mobile_verification_code') ?></td>
            <td><input type="text" class="form-control" name="mobile_verification_code" id="mobile_verification_code" placeholder="Mobile Verification Code" value="<?php echo $mobile_verification_code; ?>" />
        </td>
	    <tr><td>Mobile Verification Date <?php echo form_error('mobile_verification_date') ?></td>
            <td><input type="text" class="form-control" name="mobile_verification_date" id="mobile_verification_date" placeholder="Mobile Verification Date" value="<?php echo $mobile_verification_date; ?>" />
        </td>
	    <tr><td>Custom Field1 <?php echo form_error('custom_field1') ?></td>
            <td><input type="text" class="form-control" name="custom_field1" id="custom_field1" placeholder="Custom Field1" value="<?php echo $custom_field1; ?>" />
        </td>
	    <tr><td>Custom Field2 <?php echo form_error('custom_field2') ?></td>
            <td><input type="text" class="form-control" name="custom_field2" id="custom_field2" placeholder="Custom Field2" value="<?php echo $custom_field2; ?>" />
        </td>
	    <tr><td>Avatar <?php echo form_error('avatar') ?></td>
            <td><input type="text" class="form-control" name="avatar" id="avatar" placeholder="Avatar" value="<?php echo $avatar; ?>" />
        </td>
	    <tr><td>Email Verification Code <?php echo form_error('email_verification_code') ?></td>
            <td><input type="text" class="form-control" name="email_verification_code" id="email_verification_code" placeholder="Email Verification Code" value="<?php echo $email_verification_code; ?>" />
        </td>
	    <tr><td>Is Guest <?php echo form_error('is_guest') ?></td>
            <td><input type="text" class="form-control" name="is_guest" id="is_guest" placeholder="Is Guest" value="<?php echo $is_guest; ?>" />
        </td>
	    <tr><td>Id Session <?php echo form_error('id_session') ?></td>
            <td><textarea class="form-control" rows="3" name="id_session" id="id_session" placeholder="Id Session"><?php echo $id_session; ?></textarea>
        </td></tr>
	    <input type="hidden" name="client_id" value="<?php echo $client_id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('customer') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->