<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TS_COUNTRY</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>CountryName <?php echo form_error('countryName') ?></td>
            <td><input type="text" class="form-control" name="countryName" id="countryName" placeholder="CountryName" value="<?php echo $countryName; ?>" />
        </td>
	    <tr><td>CountryCode <?php echo form_error('countryCode') ?></td>
            <td><input type="text" class="form-control" name="countryCode" id="countryCode" placeholder="CountryCode" value="<?php echo $countryCode; ?>" />
        </td>
	    <input type="hidden" name="countryId" value="<?php echo $countryId; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('country') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->