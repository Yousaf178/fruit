<?php  include_once('include/connection.php'); ?>
<?php  include_once('include/header1.php'); ?>
<?php 

if(empty($_SESSION['id'])){
	
	header('Location:index.php');
}

?>
Customer
<?php  include_once('include/header2.php'); ?>
<!--- css ---->

<!--- js ---->
<?php  include_once('include/header3.php'); ?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">customer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

     <div class="row">
	     <?php 
		  $del = "delete from customers where id='".$_GET['id']."'";
		  $cmd = $db->query($del);
		  if($cmd){
			  
			  echo '<script>window.location="customer.php";alert("Record Deleted successfully");</script>';
		  }
		  else{
			  
			 echo '<script>window.location="customer.php";alert("Record are not Deleted");</script>';
		  }
		 
		 ?>
	 
	 </div>



<?php  include_once('include/footer.php'); ?>