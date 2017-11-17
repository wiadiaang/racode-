
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>TS_CUSTOMER LIST <?php echo anchor('customer/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('customer/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('customer/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('customer/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Username</th>
		    <th>Surname</th>
		    <th>Email</th>
		    <th>Phone</th>
		    <th>Address1</th>
		    <th>Address2</th>
		    <th>City</th>
		    <th>Country</th>
		    <th>Zip</th>
		    <th>Langlat</th>
		    <th>Password</th>
		    <th>Fb Id</th>
		    <th>G Id</th>
		    <th>G Photo</th>
		    <th>Creation Date</th>
		    <th>Google Plus</th>
		    <th>Skype</th>
		    <th>Facebook</th>
		    <th>Wishlist</th>
		    <th>Last Login</th>
		    <th>Downloads</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($customer_data as $customer)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $customer->username ?></td>
		    <td><?php echo $customer->surname ?></td>
		    <td><?php echo $customer->email ?></td>
		    <td><?php echo $customer->phone ?></td>
		    <td><?php echo $customer->address1 ?></td>
		    <td><?php echo $customer->address2 ?></td>
		    <td><?php echo $customer->city ?></td>
		    <td><?php echo $customer->country ?></td>
		    <td><?php echo $customer->zip ?></td>
		    <td><?php echo $customer->langlat ?></td>
		    <td><?php echo $customer->password ?></td>
		    <td><?php echo $customer->fb_id ?></td>
		    <td><?php echo $customer->g_id ?></td>
		    <td><?php echo $customer->g_photo ?></td>
		    <td><?php echo $customer->creation_date ?></td>
		    <td><?php echo $customer->google_plus ?></td>
		    <td><?php echo $customer->skype ?></td>
		    <td><?php echo $customer->facebook ?></td>
		    <td><?php echo $customer->wishlist ?></td>
		    <td><?php echo $customer->last_login ?></td>
		    <td><?php echo $customer->downloads ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('customer/read/'.$customer->customer_id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('customer/update/'.$customer->customer_id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('customer/delete/'.$customer->customer_id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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