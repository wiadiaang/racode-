<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>MT_MERCHANT</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Restaurant Slug <?php echo form_error('restaurant_slug') ?></td>
            <td><input type="text" class="form-control" name="restaurant_slug" id="restaurant_slug" placeholder="Restaurant Slug" value="<?php echo $restaurant_slug; ?>" />
        </td>
	    <tr><td>Restaurant Name <?php echo form_error('restaurant_name') ?></td>
            <td><input type="text" class="form-control" name="restaurant_name" id="restaurant_name" placeholder="Restaurant Name" value="<?php echo $restaurant_name; ?>" />
        </td>
	    <tr><td>Restaurant Phone <?php echo form_error('restaurant_phone') ?></td>
            <td><input type="text" class="form-control" name="restaurant_phone" id="restaurant_phone" placeholder="Restaurant Phone" value="<?php echo $restaurant_phone; ?>" />
        </td>
	    <tr><td>Contact Name <?php echo form_error('contact_name') ?></td>
            <td><input type="text" class="form-control" name="contact_name" id="contact_name" placeholder="Contact Name" value="<?php echo $contact_name; ?>" />
        </td>
	    <tr><td>Contact Phone <?php echo form_error('contact_phone') ?></td>
            <td><input type="text" class="form-control" name="contact_phone" id="contact_phone" placeholder="Contact Phone" value="<?php echo $contact_phone; ?>" />
        </td>
	    <tr><td>Contact Email <?php echo form_error('contact_email') ?></td>
            <td><input type="text" class="form-control" name="contact_email" id="contact_email" placeholder="Contact Email" value="<?php echo $contact_email; ?>" />
        </td>
	    <tr><td>Country Code <?php echo form_error('country_code') ?></td>
            <td><input type="text" class="form-control" name="country_code" id="country_code" placeholder="Country Code" value="<?php echo $country_code; ?>" />
        </td>
	    <tr><td>Street <?php echo form_error('street') ?></td>
            <td><textarea class="form-control" rows="3" name="street" id="street" placeholder="Street"><?php echo $street; ?></textarea>
        </td></tr>
	    <tr><td>City <?php echo form_error('city') ?></td>
            <td><input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?php echo $city; ?>" />
        </td>
	    <tr><td>State <?php echo form_error('state') ?></td>
            <td><input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?php echo $state; ?>" />
        </td>
	    <tr><td>Post Code <?php echo form_error('post_code') ?></td>
            <td><input type="text" class="form-control" name="post_code" id="post_code" placeholder="Post Code" value="<?php echo $post_code; ?>" />
        </td>
	    <tr><td>Cuisine <?php echo form_error('cuisine') ?></td>
            <td><textarea class="form-control" rows="3" name="cuisine" id="cuisine" placeholder="Cuisine"><?php echo $cuisine; ?></textarea>
        </td></tr>
	    <tr><td>Service <?php echo form_error('service') ?></td>
            <td><input type="text" class="form-control" name="service" id="service" placeholder="Service" value="<?php echo $service; ?>" />
        </td>
	    <tr><td>Free Delivery <?php echo form_error('free_delivery') ?></td>
            <td><input type="text" class="form-control" name="free_delivery" id="free_delivery" placeholder="Free Delivery" value="<?php echo $free_delivery; ?>" />
        </td>
	    <tr><td>Delivery Estimation <?php echo form_error('delivery_estimation') ?></td>
            <td><input type="text" class="form-control" name="delivery_estimation" id="delivery_estimation" placeholder="Delivery Estimation" value="<?php echo $delivery_estimation; ?>" />
        </td>
	    <tr><td>Username <?php echo form_error('username') ?></td>
            <td><input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </td>
	    <tr><td>Password <?php echo form_error('password') ?></td>
            <td><input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </td>
	    <tr><td>Activation Key <?php echo form_error('activation_key') ?></td>
            <td><input type="text" class="form-control" name="activation_key" id="activation_key" placeholder="Activation Key" value="<?php echo $activation_key; ?>" />
        </td>
	    <tr><td>Activation Token <?php echo form_error('activation_token') ?></td>
            <td><input type="text" class="form-control" name="activation_token" id="activation_token" placeholder="Activation Token" value="<?php echo $activation_token; ?>" />
        </td>
	    <tr><td>Status <?php echo form_error('status') ?></td>
            <td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </td>
	    <tr><td>Date Created <?php echo form_error('date_created') ?></td>
            <td><input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </td>
	    <tr><td>Date Modified <?php echo form_error('date_modified') ?></td>
            <td><input type="text" class="form-control" name="date_modified" id="date_modified" placeholder="Date Modified" value="<?php echo $date_modified; ?>" />
        </td>
	    <tr><td>Date Activated <?php echo form_error('date_activated') ?></td>
            <td><input type="text" class="form-control" name="date_activated" id="date_activated" placeholder="Date Activated" value="<?php echo $date_activated; ?>" />
        </td>
	    <tr><td>Last Login <?php echo form_error('last_login') ?></td>
            <td><input type="text" class="form-control" name="last_login" id="last_login" placeholder="Last Login" value="<?php echo $last_login; ?>" />
        </td>
	    <tr><td>Ip Address <?php echo form_error('ip_address') ?></td>
            <td><input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Ip Address" value="<?php echo $ip_address; ?>" />
        </td>
	    <tr><td>Package Id <?php echo form_error('package_id') ?></td>
            <td><input type="text" class="form-control" name="package_id" id="package_id" placeholder="Package Id" value="<?php echo $package_id; ?>" />
        </td>
	    <tr><td>Package Price <?php echo form_error('package_price') ?></td>
            <td><input type="text" class="form-control" name="package_price" id="package_price" placeholder="Package Price" value="<?php echo $package_price; ?>" />
        </td>
	    <tr><td>Membership Expired <?php echo form_error('membership_expired') ?></td>
            <td><input type="text" class="form-control" name="membership_expired" id="membership_expired" placeholder="Membership Expired" value="<?php echo $membership_expired; ?>" />
        </td>
	    <tr><td>Payment Steps <?php echo form_error('payment_steps') ?></td>
            <td><input type="text" class="form-control" name="payment_steps" id="payment_steps" placeholder="Payment Steps" value="<?php echo $payment_steps; ?>" />
        </td>
	    <tr><td>Is Featured <?php echo form_error('is_featured') ?></td>
            <td><input type="text" class="form-control" name="is_featured" id="is_featured" placeholder="Is Featured" value="<?php echo $is_featured; ?>" />
        </td>
	    <tr><td>Is Ready <?php echo form_error('is_ready') ?></td>
            <td><input type="text" class="form-control" name="is_ready" id="is_ready" placeholder="Is Ready" value="<?php echo $is_ready; ?>" />
        </td>
	    <tr><td>Is Sponsored <?php echo form_error('is_sponsored') ?></td>
            <td><input type="text" class="form-control" name="is_sponsored" id="is_sponsored" placeholder="Is Sponsored" value="<?php echo $is_sponsored; ?>" />
        </td>
	    <tr><td>Sponsored Expiration <?php echo form_error('sponsored_expiration') ?></td>
            <td><input type="text" class="form-control" name="sponsored_expiration" id="sponsored_expiration" placeholder="Sponsored Expiration" value="<?php echo $sponsored_expiration; ?>" />
        </td>
	    <tr><td>Lost Password Code <?php echo form_error('lost_password_code') ?></td>
            <td><input type="text" class="form-control" name="lost_password_code" id="lost_password_code" placeholder="Lost Password Code" value="<?php echo $lost_password_code; ?>" />
        </td>
	    <tr><td>User Lang <?php echo form_error('user_lang') ?></td>
            <td><input type="text" class="form-control" name="user_lang" id="user_lang" placeholder="User Lang" value="<?php echo $user_lang; ?>" />
        </td>
	    <tr><td>Membership Purchase Date <?php echo form_error('membership_purchase_date') ?></td>
            <td><input type="text" class="form-control" name="membership_purchase_date" id="membership_purchase_date" placeholder="Membership Purchase Date" value="<?php echo $membership_purchase_date; ?>" />
        </td>
	    <tr><td>Sort Featured <?php echo form_error('sort_featured') ?></td>
            <td><input type="text" class="form-control" name="sort_featured" id="sort_featured" placeholder="Sort Featured" value="<?php echo $sort_featured; ?>" />
        </td>
	    <tr><td>Is Commission <?php echo form_error('is_commission') ?></td>
            <td><input type="text" class="form-control" name="is_commission" id="is_commission" placeholder="Is Commission" value="<?php echo $is_commission; ?>" />
        </td>
	    <tr><td>Percent Commision <?php echo form_error('percent_commision') ?></td>
            <td><input type="text" class="form-control" name="percent_commision" id="percent_commision" placeholder="Percent Commision" value="<?php echo $percent_commision; ?>" />
        </td>
	    <tr><td>Abn <?php echo form_error('abn') ?></td>
            <td><input type="text" class="form-control" name="abn" id="abn" placeholder="Abn" value="<?php echo $abn; ?>" />
        </td>
	    <tr><td>Session Token <?php echo form_error('session_token') ?></td>
            <td><input type="text" class="form-control" name="session_token" id="session_token" placeholder="Session Token" value="<?php echo $session_token; ?>" />
        </td>
	    <tr><td>Commision Type <?php echo form_error('commision_type') ?></td>
            <td><input type="text" class="form-control" name="commision_type" id="commision_type" placeholder="Commision Type" value="<?php echo $commision_type; ?>" />
        </td>
	    <tr><td>Mobile Session Token <?php echo form_error('mobile_session_token') ?></td>
            <td><input type="text" class="form-control" name="mobile_session_token" id="mobile_session_token" placeholder="Mobile Session Token" value="<?php echo $mobile_session_token; ?>" />
        </td>
	    <tr><td>Token <?php echo form_error('token') ?></td>
            <td><textarea class="form-control" rows="3" name="token" id="token" placeholder="Token"><?php echo $token; ?></textarea>
        </td></tr>
	    <tr><td>Id Session <?php echo form_error('id_session') ?></td>
            <td><textarea class="form-control" rows="3" name="id_session" id="id_session" placeholder="Id Session"><?php echo $id_session; ?></textarea>
        </td></tr>
	    <input type="hidden" name="merchant_id" value="<?php echo $merchant_id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mt_merchant') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->