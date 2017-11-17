
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Mt_rating_meaning Read</h3>
        <table class="table table-bordered">
	    <tr><td>Rating Start</td><td><?php echo $rating_start; ?></td></tr>
	    <tr><td>Rating End</td><td><?php echo $rating_end; ?></td></tr>
	    <tr><td>Meaning</td><td><?php echo $meaning; ?></td></tr>
	    <tr><td>Date Created</td><td><?php echo $date_created; ?></td></tr>
	    <tr><td>Date Modified</td><td><?php echo $date_modified; ?></td></tr>
	    <tr><td>Ip Address</td><td><?php echo $ip_address; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('rating_meaning') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->