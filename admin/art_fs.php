<?php include('db_connect.php');?>

<div class="container-fluid">
<style>
	input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  transform: scale(1.5);
  padding: 10px;
}
</style>
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of Arts for Sale</b>
						<span class="">

							<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_art_fs">
					<i class="fa fa-plus"></i> New</button>
				</span>
					</div>
					<div class="card-body">
						
						<table class="table table-bordered table-condensed table-hover">
							<colgroup>
								<col width="7%">
								<col width="10%">
								<col width="10%">
								<col width="23%">
								<col width="15%">
								<col width="15%">
								<col width="15%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">SNo:-</th>
									<th class="">Date</th>
									<th class="">Image</th>
									<th class="">Cavas Information</th>
									<th class="">Price</th>
									<th class="">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$fs = $conn->query("SELECT fs.*,a.art_title,a.art_description,u.name as aname,u.id as artist_id from arts_fs fs inner join arts a on a.id = fs.art_id inner join users u on u.id = a.artist_id order by unix_timestamp(fs.date_created) desc ");
								while($row=$fs->fetch_assoc()):
									$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
									unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
									$desc = strtr(html_entity_decode($row['art_description']),$trans);
									$desc=str_replace(array("<li>","</li>"), array("",","), $desc);
									$img = '';
									$imgs = scandir('assets/uploads/artist_'.$row['art_id']);
									foreach($imgs as $k=>$v){
										if(!in_array($v,array('.','..')) && empty($img)){
											$img = $v;
										}
									}
								?>
								<tr>
									
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <p> <b><?php echo date("M d,Y h:i A",strtotime($row['date_created'])) ?></b></p>
									</td>
									<td class="">
										 <div class="imgs"><img src="<?php echo 'assets/uploads/artist_'.$row['art_id'].'/'.$img ?>" alt=""></div>
									</td>
									<td class="">
										 <p>Title: <b><?php echo ucwords($row['art_title']) ?></b></p>
										 <p><small>Artist: <b><?php echo ucwords($row['aname']) ?></b></small></p>
										 <p><small>Description:</small></p>
										 <p class="truncate"><?php echo strip_tags($desc) ?></p>
									</td>
									<td class="text-right">
										 <p> <b><?php echo number_format($row['price'],2) ?></b></p>
									</td>
									<td class="text-center">
										 <?php if($row['status'] == 1): ?>
										 	<span class="badge badge-success">Sold</span>
										 <?php else: ?>
										 	<span class="badge badge-secondary">For Sale</span>
										 <?php endif; ?>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-outline-primary edit_art_fs" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-danger delete_art_fs" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	$('#new_art_fs').click(function(){
		uni_modal("New Entry","manage_art_fs.php")
	})
	
	$('.edit_art_fs').click(function(){
		uni_modal("Edit Entry","manage_art_fs.php?id="+$(this).attr('data-id'))
		
	})
	$('.delete_art_fs').click(function(){
		_conf("Are you sure to delete this Person?","delete_art_fs",[$(this).attr('data-id')])
	})

	function delete_art_fs($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_art_fs',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>