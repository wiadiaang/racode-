
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>MT_CLIENT LIST <?php echo anchor('customer/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('customer/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Social Strategy</th>
		    <th>First Name</th>
		    <th>Last Name</th>
		    <th>Email Address</th>
		    <th>Password</th>
		    <th>Street</th>
		    <th>City</th>
		    <th>State</th>
		    <th>Zipcode</th>
		    <th>Country Code</th>
		    <th>Location Name</th>
		    <th>Contact Phone</th>
		    <th>Lost Password Token</th>
		    <th>Date Created</th>
		    <th>Date Modified</th>
		    <th>Last Login</th>
		    <th>Ip Address</th>
		    <th>Status</th>
		    <th>Token</th>
		    <th>Mobile Verification Code</th>
		    <th>Mobile Verification Date</th>
		    <th>Custom Field1</th>
		    <th>Custom Field2</th>
		    <th>Avatar</th>
		    <th>Email Verification Code</th>
		    <th>Is Guest</th>
		    <th>Id Session</th>
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
		    <td><?php echo $customer->social_strategy ?></td>
		    <td><?php echo $customer->first_name ?></td>
		    <td><?php echo $customer->last_name ?></td>
		    <td><?php echo $customer->email_address ?></td>
		    <td><?php echo $customer->password ?></td>
		    <td><?php echo $customer->street ?></td>
		    <td><?php echo $customer->city ?></td>
		    <td><?php echo $customer->state ?></td>
		    <td><?php echo $customer->zipcode ?></td>
		    <td><?php echo $customer->country_code ?></td>
		    <td><?php echo $customer->location_name ?></td>
		    <td><?php echo $customer->contact_phone ?></td>
		    <td><?php echo $customer->lost_password_token ?></td>
		    <td><?php echo $customer->date_created ?></td>
		    <td><?php echo $customer->date_modified ?></td>
		    <td><?php echo $customer->last_login ?></td>
		    <td><?php echo $customer->ip_address ?></td>
		    <td><?php echo $customer->status ?></td>
		    <td><?php echo $customer->token ?></td>
		    <td><?php echo $customer->mobile_verification_code ?></td>
		    <td><?php echo $customer->mobile_verification_date ?></td>
		    <td><?php echo $customer->custom_field1 ?></td>
		    <td><?php echo $customer->custom_field2 ?></td>
		    <td><?php echo $customer->avatar ?></td>
		    <td><?php echo $customer->email_verification_code ?></td>
		    <td><?php echo $customer->is_guest ?></td>
		    <td><?php echo $customer->id_session ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('customer/read/'.$customer->client_id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('customer/update/'.$customer->client_id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('customer/delete/'.$customer->client_id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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