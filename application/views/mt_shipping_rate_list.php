
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>MT_SHIPPING_RATE LIST <?php echo anchor('mt_shipping_rate/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('mt_shipping_rate/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Merchant Id</th>
		    <th>Distance From</th>
		    <th>Distance To</th>
		    <th>Shipping Units</th>
		    <th>Distance Price</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($mt_shipping_rate_data as $mt_shipping_rate)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $mt_shipping_rate->merchant_id ?></td>
		    <td><?php echo $mt_shipping_rate->distance_from ?></td>
		    <td><?php echo $mt_shipping_rate->distance_to ?></td>
		    <td><?php echo $mt_shipping_rate->shipping_units ?></td>
		    <td><?php echo $mt_shipping_rate->distance_price ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('mt_shipping_rate/read/'.$mt_shipping_rate->id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('mt_shipping_rate/update/'.$mt_shipping_rate->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('mt_shipping_rate/delete/'.$mt_shipping_rate->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->