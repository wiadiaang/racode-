
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>MT_ITEM LIST <?php echo anchor('item/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('item/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Merchant Id</th>
		    <th>Item Name</th>
		    <th>Item Description</th>
		    <th>Item Address</th>
		    <th>Item Latitude</th>
		    <th>Item Longitude</th>
		    <th>Date Start</th>
		    <th>Time Start</th>
		    <th>Date Finish</th>
		    <th>Time Finish</th>
		    <th>Status</th>
		    <th>Category</th>
		    <th>Price</th>
		    <th>Qty</th>
		    <th>Addon Item</th>
		    <th>Cooking Ref</th>
		    <th>Discount</th>
		    <th>Multi Option</th>
		    <th>Multi Option Value</th>
		    <th>Photo</th>
		    <th>Sequence</th>
		    <th>Is Featured</th>
		    <th>Date Created</th>
		    <th>Date Modified</th>
		    <th>Ip Address</th>
		    <th>Ingredients</th>
		    <th>Spicydish</th>
		    <th>Two Flavors</th>
		    <th>Two Flavors Position</th>
		    <th>Require Addon</th>
		    <th>Dish</th>
		    <th>Item Name Trans</th>
		    <th>Item Description Trans</th>
		    <th>Non Taxable</th>
		    <th>Not Available</th>
		    <th>Gallery Photo</th>
		    <th>Points Earned</th>
		    <th>Points Disabled</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($item_data as $item)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $item->merchant_id ?></td>
		    <td><?php echo $item->item_name ?></td>
		    <td><?php echo $item->item_description ?></td>
		    <td><?php echo $item->item_address ?></td>
		    <td><?php echo $item->item_latitude ?></td>
		    <td><?php echo $item->item_longitude ?></td>
		    <td><?php echo $item->date_start ?></td>
		    <td><?php echo $item->time_start ?></td>
		    <td><?php echo $item->date_finish ?></td>
		    <td><?php echo $item->time_finish ?></td>
		    <td><?php echo $item->status ?></td>
		    <td><?php echo $item->category ?></td>
		    <td><?php echo $item->price ?></td>
		    <td><?php echo $item->qty ?></td>
		    <td><?php echo $item->addon_item ?></td>
		    <td><?php echo $item->cooking_ref ?></td>
		    <td><?php echo $item->discount ?></td>
		    <td><?php echo $item->multi_option ?></td>
		    <td><?php echo $item->multi_option_value ?></td>
		    <td><?php echo $item->photo ?></td>
		    <td><?php echo $item->sequence ?></td>
		    <td><?php echo $item->is_featured ?></td>
		    <td><?php echo $item->date_created ?></td>
		    <td><?php echo $item->date_modified ?></td>
		    <td><?php echo $item->ip_address ?></td>
		    <td><?php echo $item->ingredients ?></td>
		    <td><?php echo $item->spicydish ?></td>
		    <td><?php echo $item->two_flavors ?></td>
		    <td><?php echo $item->two_flavors_position ?></td>
		    <td><?php echo $item->require_addon ?></td>
		    <td><?php echo $item->dish ?></td>
		    <td><?php echo $item->item_name_trans ?></td>
		    <td><?php echo $item->item_description_trans ?></td>
		    <td><?php echo $item->non_taxable ?></td>
		    <td><?php echo $item->not_available ?></td>
		    <td><?php echo $item->gallery_photo ?></td>
		    <td><?php echo $item->points_earned ?></td>
		    <td><?php echo $item->points_disabled ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('item/read/'.$item->item_id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('item/update/'.$item->item_id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('item/delete/'.$item->item_id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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