<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>MT_RATING_MEANING</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Rating Start <?php echo form_error('rating_start') ?></td>
            <td><input type="text" class="form-control" name="rating_start" id="rating_start" placeholder="Rating Start" value="<?php echo $rating_start; ?>" />
        </td>
	    <tr><td>Rating End <?php echo form_error('rating_end') ?></td>
            <td><input type="text" class="form-control" name="rating_end" id="rating_end" placeholder="Rating End" value="<?php echo $rating_end; ?>" />
        </td>
	    <tr><td>Meaning <?php echo form_error('meaning') ?></td>
            <td><input type="text" class="form-control" name="meaning" id="meaning" placeholder="Meaning" value="<?php echo $meaning; ?>" />
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
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('rating_meaning') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->