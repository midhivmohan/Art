<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT e.*,u.name as aname FROM events e inner join users u on u.id = e.artist_id where e.id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<style type="text/css">
	.imgs{
		margin: .5em;
		max-width: calc(100%);
		max-height: calc(100%);
	}
	.imgs img{
		max-width: calc(100%);
		max-height: calc(100%);
		cursor: pointer;
	}
	
	
	
</style>
<div class="container-field">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
							
							  
						<?php 
					  		$images = array();
					  		if(isset($id)){
					  			$fpath = 'assets/uploads/event_'.$id;
					  			$images= scandir($fpath);
					  		}
					  		$i = 1;
					  		foreach($images as $k => $v):
					  			if(!in_array($v,array('.','..'))):
					  				$active = $i == 1 ? 'active' : '';
			  					
					  	?>
					  		 
						      <img class="img-fluid" src="<?php echo $fpath.'/'.$v ?>" alt="">
						    </div>
					  	<?php
					  			$i++;
					  			else:
			  						unset($images[$v]);
					  			endif;
				  			endforeach;
					  	?>
					  	 
					  		</div>
						</div>
					</div>
					<div class="col-md-12" id="content">
						<h4 class="text-center"><b><?php echo ucwords($title) ?></b></h4>
						<hr class="divider">
						<center><small><?php echo ucwords($aname) ?></small></center>
						<br>
						<p><b><i class="fa fa-calendar"></i> <?php echo date("F d, Y h:i A",strtotime($event_datetime)) ?></b></p>
						<?php echo html_entity_decode($content); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
