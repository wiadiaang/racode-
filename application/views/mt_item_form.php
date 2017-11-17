<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>MT_ITEM</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Merchant Id <?php echo form_error('merchant_id') ?></td>
            <td><input type="text" class="form-control" name="merchant_id" id="merchant_id" placeholder="Merchant Id" value="<?php echo $merchant_id; ?>" />
        </td>
	    <tr><td>Item Name <?php echo form_error('item_name') ?></td>
            <td><input type="text" class="form-control" name="item_name" id="item_name" placeholder="Item Name" value="<?php echo $item_name; ?>" />
        </td>
	    <tr><td>Item Description <?php echo form_error('item_description') ?></td>
            <td><textarea class="form-control" rows="3" name="item_description" id="item_description" placeholder="Item Description"><?php echo $item_description; ?></textarea>
        </td></tr>
	    <tr><td>Item Address <?php echo form_error('item_address') ?></td>
            <td><textarea class="form-control" rows="3" name="item_address" id="item_address" placeholder="Item Address"><?php echo $item_address; ?></textarea>
        </td></tr>
	    <tr><td>Item Latitude <?php echo form_error('item_latitude') ?></td>
            <td><input type="text" class="form-control" name="item_latitude" id="item_latitude" placeholder="Item Latitude" value="<?php echo $item_latitude; ?>" />
        </td>
	    <tr><td>Item Longitude <?php echo form_error('item_longitude') ?></td>
            <td><input type="text" class="form-control" name="item_longitude" id="item_longitude" placeholder="Item Longitude" value="<?php echo $item_longitude; ?>" />
        </td>
	    <tr><td>Date Start <?php echo form_error('date_start') ?></td>
            <td><input type="text" class="form-control" name="date_start" id="date_start" placeholder="Date Start" value="<?php echo $date_start; ?>" />
        </td>
	    <tr><td>Time Start <?php echo form_error('time_start') ?></td>
            <td><input type="text" class="form-control" name="time_start" id="time_start" placeholder="Time Start" value="<?php echo $time_start; ?>" />
        </td>
	    <tr><td>Date Finish <?php echo form_error('date_finish') ?></td>
            <td><input type="text" class="form-control" name="date_finish" id="date_finish" placeholder="Date Finish" value="<?php echo $date_finish; ?>" />
        </td>
	    <tr><td>Time Finish <?php echo form_error('time_finish') ?></td>
            <td><input type="text" class="form-control" name="time_finish" id="time_finish" placeholder="Time Finish" value="<?php echo $time_finish; ?>" />
        </td>
	    <tr><td>Status <?php echo form_error('status') ?></td>
            <td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </td>
	    <tr><td>Category <?php echo form_error('category') ?></td>
            <td><textarea class="form-control" rows="3" name="category" id="category" placeholder="Category"><?php echo $category; ?></textarea>
        </td></tr>
	    <tr><td>Price <?php echo form_error('price') ?></td>
            <td><textarea class="form-control" rows="3" name="price" id="price" placeholder="Price"><?php echo $price; ?></textarea>
        </td></tr>
	    <tr><td>Qty <?php echo form_error('qty') ?></td>
            <td><input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" value="<?php echo $qty; ?>" />
        </td>
	    <tr><td>Addon Item <?php echo form_error('addon_item') ?></td>
            <td><textarea class="form-control" rows="3" name="addon_item" id="addon_item" placeholder="Addon Item"><?php echo $addon_item; ?></textarea>
        </td></tr>
	    <tr><td>Cooking Ref <?php echo form_error('cooking_ref') ?></td>
            <td><textarea class="form-control" rows="3" name="cooking_ref" id="cooking_ref" placeholder="Cooking Ref"><?php echo $cooking_ref; ?></textarea>
        </td></tr>
	    <tr><td>Discount <?php echo form_error('discount') ?></td>
            <td><input type="text" class="form-control" name="discount" id="discount" placeholder="Discount" value="<?php echo $discount; ?>" />
        </td>
	    <tr><td>Multi Option <?php echo form_error('multi_option') ?></td>
            <td><textarea class="form-control" rows="3" name="multi_option" id="multi_option" placeholder="Multi Option"><?php echo $multi_option; ?></textarea>
        </td></tr>
	    <tr><td>Multi Option Value <?php echo form_error('multi_option_value') ?></td>
            <td><textarea class="form-control" rows="3" name="multi_option_value" id="multi_option_value" placeholder="Multi Option Value"><?php echo $multi_option_value; ?></textarea>
        </td></tr>
	    <tr><td>Photo <?php echo form_error('photo') ?></td>
            <td><input type="text" class="form-control" name="photo" id="photo" placeholder="Photo" value="<?php echo $photo; ?>" />
        </td>
	    <tr><td>Sequence <?php echo form_error('sequence') ?></td>
            <td><input type="text" class="form-control" name="sequence" id="sequence" placeholder="Sequence" value="<?php echo $sequence; ?>" />
        </td>
	    <tr><td>Is Featured <?php echo form_error('is_featured') ?></td>
            <td><input type="text" class="form-control" name="is_featured" id="is_featured" placeholder="Is Featured" value="<?php echo $is_featured; ?>" />
        </td>
	    <tr><td>Date Created <?php echo form_error('date_created') ?></td>
            <td><input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </td>
	    <tr><td>Date Modified <?php echo form_error('date_modified') ?></td>
            <td><input type="text" class="form-control" name="date_modified" id="date_modified" placeholder="Date Modified" value="<?php echo $date_modified; ?>" />
        </td>
	    <tr><td>Ip Address <?php echo form_error('ip_address') ?></td>
            <td><input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Ip Address" value="<?php echo $ip_address; ?>" />
        </td>
	    <tr><td>Ingredients <?php echo form_error('ingredients') ?></td>
            <td><textarea class="form-control" rows="3" name="ingredients" id="ingredients" placeholder="Ingredients"><?php echo $ingredients; ?></textarea>
        </td></tr>
	    <tr><td>Spicydish <?php echo form_error('spicydish') ?></td>
            <td><input type="text" class="form-control" name="spicydish" id="spicydish" placeholder="Spicydish" value="<?php echo $spicydish; ?>" />
        </td>
	    <tr><td>Two Flavors <?php echo form_error('two_flavors') ?></td>
            <td><input type="text" class="form-control" name="two_flavors" id="two_flavors" placeholder="Two Flavors" value="<?php echo $two_flavors; ?>" />
        </td>
	    <tr><td>Two Flavors Position <?php echo form_error('two_flavors_position') ?></td>
            <td><textarea class="form-control" rows="3" name="two_flavors_position" id="two_flavors_position" placeholder="Two Flavors Position"><?php echo $two_flavors_position; ?></textarea>
        </td></tr>
	    <tr><td>Require Addon <?php echo form_error('require_addon') ?></td>
            <td><textarea class="form-control" rows="3" name="require_addon" id="require_addon" placeholder="Require Addon"><?php echo $require_addon; ?></textarea>
        </td></tr>
	    <tr><td>Dish <?php echo form_error('dish') ?></td>
            <td><textarea class="form-control" rows="3" name="dish" id="dish" placeholder="Dish"><?php echo $dish; ?></textarea>
        </td></tr>
	    <tr><td>Item Name Trans <?php echo form_error('item_name_trans') ?></td>
            <td><textarea class="form-control" rows="3" name="item_name_trans" id="item_name_trans" placeholder="Item Name Trans"><?php echo $item_name_trans; ?></textarea>
        </td></tr>
	    <tr><td>Item Description Trans <?php echo form_error('item_description_trans') ?></td>
            <td><textarea class="form-control" rows="3" name="item_description_trans" id="item_description_trans" placeholder="Item Description Trans"><?php echo $item_description_trans; ?></textarea>
        </td></tr>
	    <tr><td>Non Taxable <?php echo form_error('non_taxable') ?></td>
            <td><input type="text" class="form-control" name="non_taxable" id="non_taxable" placeholder="Non Taxable" value="<?php echo $non_taxable; ?>" />
        </td>
	    <tr><td>Not Available <?php echo form_error('not_available') ?></td>
            <td><input type="text" class="form-control" name="not_available" id="not_available" placeholder="Not Available" value="<?php echo $not_available; ?>" />
        </td>
	    <tr><td>Gallery Photo <?php echo form_error('gallery_photo') ?></td>
            <td><textarea class="form-control" rows="3" name="gallery_photo" id="gallery_photo" placeholder="Gallery Photo"><?php echo $gallery_photo; ?></textarea>
        </td></tr>
	    <tr><td>Points Earned <?php echo form_error('points_earned') ?></td>
            <td><input type="text" class="form-control" name="points_earned" id="points_earned" placeholder="Points Earned" value="<?php echo $points_earned; ?>" />
        </td>
	    <tr><td>Points Disabled <?php echo form_error('points_disabled') ?></td>
            <td><input type="text" class="form-control" name="points_disabled" id="points_disabled" placeholder="Points Disabled" value="<?php echo $points_disabled; ?>" />
        </td>
	    <input type="hidden" name="item_id" value="<?php echo $item_id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('item') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->