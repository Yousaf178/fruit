<?php  include_once('include/connection.php'); ?>
<?php  include_once('include/header1.php'); ?>
<?php 

if(empty($_SESSION['id'])){
	
	header('Location:index.php');
}

?>
supplier
<?php  include_once('include/header2.php'); ?>
<?php 

if($_POST){
	
	$supplier = $_POST['supplier'];
	$contact = $_POST['contact'];
	$nic = $_POST['nic'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$date = date('Y-m-d');
	$status = 1;
	
   $insert = "insert into suppliers(`supplier`,`contact`,`nic`,`email`,`address`,`created`,`status`)
                            	values('$supplier','$contact','$nic','$email','$address','$date','$status')";
								
	$cmd  = $db->query($insert);
  if($cmd){
	   echo '<script>window.location="supplier.php";alert("Record save successfull");</script>';
	 // header('Location:supplier.php');
	 
  }	
  else{
	  echo "Record not save";
  }
	
	
}


?>
<!--- css ---->

<!--- js ---->
<?php  include_once('include/header3.php'); ?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add new Supplier</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

     <div class="row">
	 <div class="col-md-6">
	     <form action="" method="POST">
		    <div class="form-group">
			 <label>Supplier</label>
			 <input type="text" name="supplier" class="form-control" placeholder="Please enter supplier name here">
			
			</div>
			    <div class="form-group">
			 <label>Contact</label>
			 <input type="text" name="contact" class="form-control" placeholder="Please enter supplier contact here">
			
			</div>
		     <div class="form-group">
			 <label>NIC</label>
			 <input type="text" name="nic" class="form-control" placeholder="Please enter supplier nic here">
			
			</div>
			    <div class="form-group">
			 <label>Email</label>
			 <input type="email" name="email" class="form-control" placeholder="Please enter supplier email here">
			
			</div>
			    <div class="form-group">
			 <label>Address</label>
			 <textarea class="form-control" name="address"></textarea>
			
			</div>
			    <div class="form-group">
			 
			 <input type="submit" class="btn btn-primary">
			
			</div>
		 
		 </form>
		</div> 
	 
	 </div>



<?php  include_once('include/footer.php'); ?>