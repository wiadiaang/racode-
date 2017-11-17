
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Mt_shipping_rate Read</h3>
        <table class="table table-bordered">
	    <tr><td>Merchant Id</td><td><?php echo $merchant_id; ?></td></tr>
	    <tr><td>Distance From</td><td><?php echo $distance_from; ?></td></tr>
	    <tr><td>Distance To</td><td><?php echo $distance_to; ?></td></tr>
	    <tr><td>Shipping Units</td><td><?php echo $shipping_units; ?></td></tr>
	    <tr><td>Distance Price</td><td><?php echo $distance_price; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('mt_shipping_rate') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->