<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Mt_rating_meaning List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Rating Start</th>
		<th>Rating End</th>
		<th>Meaning</th>
		<th>Date Created</th>
		<th>Date Modified</th>
		<th>Ip Address</th>
		
            </tr><?php
            foreach ($rating_meaning_data as $rating_meaning)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $rating_meaning->rating_start ?></td>
		      <td><?php echo $rating_meaning->rating_end ?></td>
		      <td><?php echo $rating_meaning->meaning ?></td>
		      <td><?php echo $rating_meaning->date_created ?></td>
		      <td><?php echo $rating_meaning->date_modified ?></td>
		      <td><?php echo $rating_meaning->ip_address ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>