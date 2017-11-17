<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Mt_rating_meaning List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('rating_meaning/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('rating_meaning/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('rating_meaning'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Rating Start</th>
		<th>Rating End</th>
		<th>Meaning</th>
		<th>Date Created</th>
		<th>Date Modified</th>
		<th>Ip Address</th>
		<th>Action</th>
            </tr><?php
            foreach ($rating_meaning_data as $rating_meaning)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $rating_meaning->rating_start ?></td>
			<td><?php echo $rating_meaning->rating_end ?></td>
			<td><?php echo $rating_meaning->meaning ?></td>
			<td><?php echo $rating_meaning->date_created ?></td>
			<td><?php echo $rating_meaning->date_modified ?></td>
			<td><?php echo $rating_meaning->ip_address ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('rating_meaning/read/'.$rating_meaning->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('rating_meaning/update/'.$rating_meaning->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('rating_meaning/delete/'.$rating_meaning->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>