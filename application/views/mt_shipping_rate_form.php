<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>MT_SHIPPING_RATE</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Merchant Id <?php echo form_error('merchant_id') ?></td>
            <td><input type="text" class="form-control" name="merchant_id" id="merchant_id" placeholder="Merchant Id" value="<?php echo $merchant_id; ?>" />
        </td>
	    <tr><td>Distance From <?php echo form_error('distance_from') ?></td>
            <td><input type="text" class="form-control" name="distance_from" id="distance_from" placeholder="Distance From" value="<?php echo $distance_from; ?>" />
        </td>
	    <tr><td>Distance To <?php echo form_error('distance_to') ?></td>
            <td><input type="text" class="form-control" name="distance_to" id="distance_to" placeholder="Distance To" value="<?php echo $distance_to; ?>" />
        </td>
	    <tr><td>Shipping Units <?php echo form_error('shipping_units') ?></td>
            <td><input type="text" class="form-control" name="shipping_units" id="shipping_units" placeholder="Shipping Units" value="<?php echo $shipping_units; ?>" />
        </td>
	    <tr><td>Distance Price <?php echo form_error('distance_price') ?></td>
            <td><input type="text" class="form-control" name="distance_price" id="distance_price" placeholder="Distance Price" value="<?php echo $distance_price; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mt_shipping_rate') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->