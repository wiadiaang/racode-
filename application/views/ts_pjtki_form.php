<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
    <h3 class='box-title'>TS_PJTKI</h3>
    <div class='box box-primary'>
    
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Name <?php echo form_error('name') ?></td>
            <td><input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </td>
	    <tr><td>Email <?php echo form_error('email') ?></td>
            <td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </td>
	    <tr><td>Password <?php echo form_error('password') ?></td>
            <td><input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </td>
	    <tr><td>Company <?php echo form_error('company') ?></td>
            <td><input type="text" class="form-control" name="company" id="company" placeholder="Company" value="<?php echo $company; ?>" />
        </td>
	    <tr><td>Display Name <?php echo form_error('display_name') ?></td>
            <td><input type="text" class="form-control" name="display_name" id="display_name" placeholder="Display Name" value="<?php echo $display_name; ?>" />
        </td>
	    <tr><td>Address1 <?php echo form_error('address1') ?></td>
            <td><input type="text" class="form-control" name="address1" id="address1" placeholder="Address1" value="<?php echo $address1; ?>" />
        </td>
	    <tr><td>Address2 <?php echo form_error('address2') ?></td>
            <td><input type="text" class="form-control" name="address2" id="address2" placeholder="Address2" value="<?php echo $address2; ?>" />
        </td>
	    <tr><td>Status <?php echo form_error('status') ?></td>
            <td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </td>
	    <tr><td>Membership <?php echo form_error('membership') ?></td>
            <td><input type="text" class="form-control" name="membership" id="membership" placeholder="Membership" value="<?php echo $membership; ?>" />
        </td>
	    <tr><td>Create Timestamp <?php echo form_error('create_timestamp') ?></td>
            <td><input type="text" class="form-control" name="create_timestamp" id="create_timestamp" placeholder="Create Timestamp" value="<?php echo $create_timestamp; ?>" />
        </td>
	    <tr><td>Approve Timestamp <?php echo form_error('approve_timestamp') ?></td>
            <td><input type="text" class="form-control" name="approve_timestamp" id="approve_timestamp" placeholder="Approve Timestamp" value="<?php echo $approve_timestamp; ?>" />
        </td>
	    <tr><td>Member Timestamp <?php echo form_error('member_timestamp') ?></td>
            <td><input type="text" class="form-control" name="member_timestamp" id="member_timestamp" placeholder="Member Timestamp" value="<?php echo $member_timestamp; ?>" />
        </td>
	    <tr><td>Member Expire Timestamp <?php echo form_error('member_expire_timestamp') ?></td>
            <td><input type="text" class="form-control" name="member_expire_timestamp" id="member_expire_timestamp" placeholder="Member Expire Timestamp" value="<?php echo $member_expire_timestamp; ?>" />
        </td>
	    <tr><td>Details <?php echo form_error('details') ?></td>
            <td><input type="text" class="form-control" name="details" id="details" placeholder="Details" value="<?php echo $details; ?>" />
        </td>
	    <tr><td>Last Login <?php echo form_error('last_login') ?></td>
            <td><input type="text" class="form-control" name="last_login" id="last_login" placeholder="Last Login" value="<?php echo $last_login; ?>" />
        </td>
	    <tr><td>Facebook <?php echo form_error('facebook') ?></td>
            <td><input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $facebook; ?>" />
        </td>
	    <tr><td>Skype <?php echo form_error('skype') ?></td>
            <td><input type="text" class="form-control" name="skype" id="skype" placeholder="Skype" value="<?php echo $skype; ?>" />
        </td>
	    <tr><td>Google Plus <?php echo form_error('google_plus') ?></td>
            <td><input type="text" class="form-control" name="google_plus" id="google_plus" placeholder="Google Plus" value="<?php echo $google_plus; ?>" />
        </td>
	    <tr><td>Twitter <?php echo form_error('twitter') ?></td>
            <td><input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="<?php echo $twitter; ?>" />
        </td>
	    <tr><td>Youtube <?php echo form_error('youtube') ?></td>
            <td><input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube" value="<?php echo $youtube; ?>" />
        </td>
	    <tr><td>Pinterest <?php echo form_error('pinterest') ?></td>
            <td><input type="text" class="form-control" name="pinterest" id="pinterest" placeholder="Pinterest" value="<?php echo $pinterest; ?>" />
        </td>
	    <tr><td>Stripe Details <?php echo form_error('stripe_details') ?></td>
            <td><input type="text" class="form-control" name="stripe_details" id="stripe_details" placeholder="Stripe Details" value="<?php echo $stripe_details; ?>" />
        </td>
	    <tr><td>Paypal Email <?php echo form_error('paypal_email') ?></td>
            <td><input type="text" class="form-control" name="paypal_email" id="paypal_email" placeholder="Paypal Email" value="<?php echo $paypal_email; ?>" />
        </td>
	    <tr><td>Preferred Payment <?php echo form_error('preferred_payment') ?></td>
            <td><input type="text" class="form-control" name="preferred_payment" id="preferred_payment" placeholder="Preferred Payment" value="<?php echo $preferred_payment; ?>" />
        </td>
	    <tr><td>Cash Set <?php echo form_error('cash_set') ?></td>
            <td><input type="text" class="form-control" name="cash_set" id="cash_set" placeholder="Cash Set" value="<?php echo $cash_set; ?>" />
        </td>
	    <tr><td>Stripe Set <?php echo form_error('stripe_set') ?></td>
            <td><input type="text" class="form-control" name="stripe_set" id="stripe_set" placeholder="Stripe Set" value="<?php echo $stripe_set; ?>" />
        </td>
	    <tr><td>Paypal Set <?php echo form_error('paypal_set') ?></td>
            <td><input type="text" class="form-control" name="paypal_set" id="paypal_set" placeholder="Paypal Set" value="<?php echo $paypal_set; ?>" />
        </td>
	    <tr><td>Phone <?php echo form_error('phone') ?></td>
            <td><input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" />
        </td>
	    <tr><td>Mobile <?php echo form_error('mobile') ?></td>
            <td><input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" value="<?php echo $mobile; ?>" />
        </td>
	    <tr><td>Keywords <?php echo form_error('keywords') ?></td>
            <td><input type="text" class="form-control" name="keywords" id="keywords" placeholder="Keywords" value="<?php echo $keywords; ?>" />
        </td>
	    <tr><td>Description <?php echo form_error('description') ?></td>
            <td><input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?php echo $description; ?>" />
        </td>
	    <tr><td>Lat Lang <?php echo form_error('lat_lang') ?></td>
            <td><input type="text" class="form-control" name="lat_lang" id="lat_lang" placeholder="Lat Lang" value="<?php echo $lat_lang; ?>" />
        </td>
	    <tr><td>Area Sip1 <?php echo form_error('area_sip1') ?></td>
            <td><input type="text" class="form-control" name="area_sip1" id="area_sip1" placeholder="Area Sip1" value="<?php echo $area_sip1; ?>" />
        </td>
	    <tr><td>Date Sip1 <?php echo form_error('date_sip1') ?></td>
            <td><input type="text" class="form-control" name="date_sip1" id="date_sip1" placeholder="Date Sip1" value="<?php echo $date_sip1; ?>" />
        </td>
	    <tr><td>File Sip1 <?php echo form_error('file_sip1') ?></td>
            <td><input type="text" class="form-control" name="file_sip1" id="file_sip1" placeholder="File Sip1" value="<?php echo $file_sip1; ?>" />
        </td>
	    <tr><td>Area Sip2 <?php echo form_error('area_sip2') ?></td>
            <td><input type="text" class="form-control" name="area_sip2" id="area_sip2" placeholder="Area Sip2" value="<?php echo $area_sip2; ?>" />
        </td>
	    <tr><td>Date Sip2 <?php echo form_error('date_sip2') ?></td>
            <td><input type="text" class="form-control" name="date_sip2" id="date_sip2" placeholder="Date Sip2" value="<?php echo $date_sip2; ?>" />
        </td>
	    <tr><td>File Sip2 <?php echo form_error('file_sip2') ?></td>
            <td><input type="text" class="form-control" name="file_sip2" id="file_sip2" placeholder="File Sip2" value="<?php echo $file_sip2; ?>" />
        </td>
	    <tr><td>Area Sip3 <?php echo form_error('area_sip3') ?></td>
            <td><input type="text" class="form-control" name="area_sip3" id="area_sip3" placeholder="Area Sip3" value="<?php echo $area_sip3; ?>" />
        </td>
	    <tr><td>Date Sip3 <?php echo form_error('date_sip3') ?></td>
            <td><input type="text" class="form-control" name="date_sip3" id="date_sip3" placeholder="Date Sip3" value="<?php echo $date_sip3; ?>" />
        </td>
	    <tr><td>File Sip3 <?php echo form_error('file_sip3') ?></td>
            <td><input type="text" class="form-control" name="file_sip3" id="file_sip3" placeholder="File Sip3" value="<?php echo $file_sip3; ?>" />
        </td>
	    <tr><td>Area Sip4 <?php echo form_error('area_sip4') ?></td>
            <td><input type="text" class="form-control" name="area_sip4" id="area_sip4" placeholder="Area Sip4" value="<?php echo $area_sip4; ?>" />
        </td>
	    <tr><td>Date Sip4 <?php echo form_error('date_sip4') ?></td>
            <td><input type="text" class="form-control" name="date_sip4" id="date_sip4" placeholder="Date Sip4" value="<?php echo $date_sip4; ?>" />
        </td>
	    <tr><td>File Sip4 <?php echo form_error('file_sip4') ?></td>
            <td><input type="text" class="form-control" name="file_sip4" id="file_sip4" placeholder="File Sip4" value="<?php echo $file_sip4; ?>" />
        </td>
	    <tr><td>Area Sip5 <?php echo form_error('area_sip5') ?></td>
            <td><input type="text" class="form-control" name="area_sip5" id="area_sip5" placeholder="Area Sip5" value="<?php echo $area_sip5; ?>" />
        </td>
	    <tr><td>Date Sip5 <?php echo form_error('date_sip5') ?></td>
            <td><input type="text" class="form-control" name="date_sip5" id="date_sip5" placeholder="Date Sip5" value="<?php echo $date_sip5; ?>" />
        </td>
	    <tr><td>File Sip5 <?php echo form_error('file_sip5') ?></td>
            <td><input type="text" class="form-control" name="file_sip5" id="file_sip5" placeholder="File Sip5" value="<?php echo $file_sip5; ?>" />
        </td>
	    <tr><td>Area Sip6 <?php echo form_error('area_sip6') ?></td>
            <td><input type="text" class="form-control" name="area_sip6" id="area_sip6" placeholder="Area Sip6" value="<?php echo $area_sip6; ?>" />
        </td>
	    <tr><td>Date Sip6 <?php echo form_error('date_sip6') ?></td>
            <td><input type="text" class="form-control" name="date_sip6" id="date_sip6" placeholder="Date Sip6" value="<?php echo $date_sip6; ?>" />
        </td>
	    <tr><td>File Sip6 <?php echo form_error('file_sip6') ?></td>
            <td><input type="text" class="form-control" name="file_sip6" id="file_sip6" placeholder="File Sip6" value="<?php echo $file_sip6; ?>" />
        </td>
	    <tr><td>Area Sip7 <?php echo form_error('area_sip7') ?></td>
            <td><input type="text" class="form-control" name="area_sip7" id="area_sip7" placeholder="Area Sip7" value="<?php echo $area_sip7; ?>" />
        </td>
	    <tr><td>Date Sip7 <?php echo form_error('date_sip7') ?></td>
            <td><input type="text" class="form-control" name="date_sip7" id="date_sip7" placeholder="Date Sip7" value="<?php echo $date_sip7; ?>" />
        </td>
	    <tr><td>File Sip7 <?php echo form_error('file_sip7') ?></td>
            <td><input type="text" class="form-control" name="file_sip7" id="file_sip7" placeholder="File Sip7" value="<?php echo $file_sip7; ?>" />
        </td>
	    <input type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pjtki') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->