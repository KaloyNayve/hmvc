<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">

<h1>
Pillot Portal
<small>Pillot Portal 1</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Pillot Portal 1</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
	
		<div class="row">
			<div class="col-md-12 col-lg-12">
		  <?php if(isset($_POST['status'])){ ?>
					<div id="file_updated_box">
							<div class="alert <?php echo ($_POST['status']=="success") ? " alert-success " : " alert-danger "; ?> alert-dismissible file_updated">
								<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
								<h4><i class="icon fa <?php echo ($_POST['status']=="success") ? " fa-check" : " fa-ban"; ?>"></i> <?php echo $_POST['msg']; ?></h4>
							</div>
					</div>
					
					<?php
					
			}

?>
			</div>
	
		</div>
		<div class="row">

			<section class="col-lg-12 col-md-12">
				<div class="box box-info">
				
					<div class="box-body">
					
					   <?php  echo  $this->session->flashdata('error'); ?>
					<form id="addprojectform" action="<?php echo base_url();?>saveproject" method="post" class="form-horizontal" enctype="multipart/form-data">
					
							<div class="col-md-6">
							<div class="form-group">
								<label>Start Date</label>
									<input type="text" id="startdate" name="startdate" required autocomplete="off"  class="form-control" value="<?php if (isset($_POST['startdate'])){echo $_POST['startdate'];}else{ echo date('Y/m/d');}?>" />
								</div>
								<div class="form-group">
								<label>End Date</label>
									<input type="text" id="enddate" autocomplete="off" required  name="enddate" class="form-control" value="<?php if (isset($_POST['enddate'])){echo $_POST['enddate'];}else{ echo date('Y/m/d');}?>" />
								</div>
								<div  class="form-group">
									<label for="username">Project Title</label>
									<input type="text" class="form-control" name="project" required value="" id="project"/>
								</div>
							
								<div  class="form-group">
									<label for="username">Description of task</label>
									
									<textarea class="form-control" id="taskdesc" required name="taskdesc" rows="4"></textarea>
								</div>
							
							<div  class="form-group">
							
								
							  <label for="pre_srcnum">Monitored By</label>
							<select class="form-control select2" id="user" name="user"  data-placeholder="Select.." required >
							
							<?php 	 
						echo "<option value=''>--</option>";

						// $sql_qry_bdg =  "select Distinct d.Badge,d.First_Name,d.Last_Name from Dir_Indir d where Date_Ins=(select max(Date_Ins) from Dir_Indir) order by d.First_Name ASC";
					
						foreach ($users as $row){		
					
						echo "<option value='".$row['BADGE']."'";
								if(isset($_POST['user']) && in_array($row['BADGE'], $_POST['user'])){
									echo " selected ";
								}
						echo ">".$row['BADGE']." - ".$row['FIRST_NAME']." ".$row['LAST_NAME']."</option>";
						}
										?>
							</select>
								
							</div>
							
							<div  class="form-group">
								<label for="username">Hours to complete task</label>
									<input type="number" class="form-control" name="hours" required value="" id="hours"/>
							</div>
							
							<div  class="form-group">
							<div class="col-md-6">
							<input type="submit" class="btn btn-primary"  name="addproject" value="Add">
							
							</div>
							</div>
						
							</div>
					</form>
					
					
		
					
					
					
				
					</div>
				</div>
			</section>
			
		</div>
		
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
