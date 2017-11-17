<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TS_CUSTOMER</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Username <?php echo form_error('username') ?></td>
            <td><input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </td>
	    <tr><td>Surname <?php echo form_error('surname') ?></td>
            <td><input type="text" class="form-control" name="surname" id="surname" placeholder="Surname" value="<?php echo $surname; ?>" />
        </td>
	    <tr><td>Email <?php echo form_error('email') ?></td>
            <td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </td>
	    <tr><td>Phone <?php echo form_error('phone') ?></td>
            <td><input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" />
        </td>
	    <tr><td>Address1 <?php echo form_error('address1') ?></td>
            <td><input type="text" class="form-control" name="address1" id="address1" placeholder="Address1" value="<?php echo $address1; ?>" />
        </td>
	    <tr><td>Address2 <?php echo form_error('address2') ?></td>
            <td><input type="text" class="form-control" name="address2" id="address2" placeholder="Address2" value="<?php echo $address2; ?>" />
        </td>
	    <tr><td>City <?php echo form_error('city') ?></td>
            <td><input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?php echo $city; ?>" />
        </td>
	    <tr><td>Country <?php echo form_error('country') ?></td>
            <td><input type="text" class="form-control" name="country" id="country" placeholder="Country" value="<?php echo $country; ?>" />
        </td>
	    <tr><td>Zip <?php echo form_error('zip') ?></td>
            <td><input type="text" class="form-control" name="zip" id="zip" placeholder="Zip" value="<?php echo $zip; ?>" />
        </td>
	    <tr><td>Langlat <?php echo form_error('langlat') ?></td>
            <td><input type="text" class="form-control" name="langlat" id="langlat" placeholder="Langlat" value="<?php echo $langlat; ?>" />
        </td>
	    <tr><td>Password <?php echo form_error('password') ?></td>
            <td><input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </td>
	    <tr><td>Fb Id <?php echo form_error('fb_id') ?></td>
            <td><input type="text" class="form-control" name="fb_id" id="fb_id" placeholder="Fb Id" value="<?php echo $fb_id; ?>" />
        </td>
	    <tr><td>G Id <?php echo form_error('g_id') ?></td>
            <td><input type="text" class="form-control" name="g_id" id="g_id" placeholder="G Id" value="<?php echo $g_id; ?>" />
        </td>
	    <tr><td>G Photo <?php echo form_error('g_photo') ?></td>
            <td><input type="text" class="form-control" name="g_photo" id="g_photo" placeholder="G Photo" value="<?php echo $g_photo; ?>" />
        </td>
	    <tr><td>Creation Date <?php echo form_error('creation_date') ?></td>
            <td><input type="text" class="form-control" name="creation_date" id="creation_date" placeholder="Creation Date" value="<?php echo $creation_date; ?>" />
        </td>
	    <tr><td>Google Plus <?php echo form_error('google_plus') ?></td>
            <td><input type="text" class="form-control" name="google_plus" id="google_plus" placeholder="Google Plus" value="<?php echo $google_plus; ?>" />
        </td>
	    <tr><td>Skype <?php echo form_error('skype') ?></td>
            <td><input type="text" class="form-control" name="skype" id="skype" placeholder="Skype" value="<?php echo $skype; ?>" />
        </td>
	    <tr><td>Facebook <?php echo form_error('facebook') ?></td>
            <td><input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $facebook; ?>" />
        </td>
	    <tr><td>Wishlist <?php echo form_error('wishlist') ?></td>
            <td><input type="text" class="form-control" name="wishlist" id="wishlist" placeholder="Wishlist" value="<?php echo $wishlist; ?>" />
        </td>
	    <tr><td>Last Login <?php echo form_error('last_login') ?></td>
            <td><input type="text" class="form-control" name="last_login" id="last_login" placeholder="Last Login" value="<?php echo $last_login; ?>" />
        </td>
	    <tr><td>Downloads <?php echo form_error('downloads') ?></td>
            <td><input type="text" class="form-control" name="downloads" id="downloads" placeholder="Downloads" value="<?php echo $downloads; ?>" />
        </td>
	    <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('customer') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->