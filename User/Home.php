<?php
session_start();
include './Master.php';
//include '.db_connect.php';

?>
<br><br><center>
    <h3>WELCOME <?php echo $_SESSION['name']; ?></h3></center>
<div style="margin-top: 10px;margin-left: -150px;">
<br/><br/><center>
    
    
 <h2 style="font-size: 20px;width:500px;margin-left: 50px;text-decoration: underline">The Mission of ArtSpace</h2>
				<br/>	<p style="width:1000px;margin-left: 100px;text-align: justify"> <br/>Online Art Gallery is a place where 
				one can see and buy artworks by emerging,established or master artists.
                                        </p>
    
    
</div>
 
</div>
<?php include './Footer.php';?>