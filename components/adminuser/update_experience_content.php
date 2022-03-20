<!--Action php-->
<?php
	$id = $_GET['id'];
	if(isset($_POST['upload'])){
	$companyName=$_POST['companyName'];
	$position=$_POST['position'];
    $description = $_POST['description'];
    $startDate=$_POST['startDate'];
    $endDate=$_POST['endDate'];
    $jyear=$_POST['jyear'];
	$sql = "update experience set companyName = '$companyName', position = '$position', description = '$description', startDate ='$startDate', endDate = '$endDate' , jyear = '$jyear' where id = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=experience_content');</script>";
}
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from experience where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id = $data['id'];
				    $companyName=$data['companyName'];
	                $position=$data['position'];
                    $description = $data['description'];
                    $startDate=$data['startDate'];
                    $endDate=$data['endDate'];
                    $jyear=$data['jyear'];
				}	
		}
?>
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Experience Upadete
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Experience Upadate</li>
          </ol>
        </section>
      <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Experience Upadate</h3>
                </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" name="profile" id = "profile" enctype="multipart/form-data">
                <div class="box-body">
            
            <!--companyName-->
                <div class="form-group">
                      <label for="companyName">Company Name</label>
                      <input type="text" class="form-control" id="companyName"  name="companyName" value = "<?php echo $companyName;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--position-->
                <div class="form-group">
                      <label for="position">Position</label>
                      <input type="text" class="form-control" id="position"  name="position" value = "<?php echo $position;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--description-->
                <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description"  name="description" value = "<?php echo $description;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Job Start Date-->
                <div class="form-group">
                      <label for="startDate">Job Start Date</label>
                      	<div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" class="datepicker form-control" id="startDate" name="startDate" value = "<?php echo date_format($startDate, yyyy/mm/dd);?>"/>
                       </div>
                </div>
            <!--Job End Date-->
                <div class="form-group">
                      <label for="startDate">Job End Date</label>
                      	<div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" class="datepicker form-control"  data-date-format="yyyy/mm/dd" id="endDate" name="endDate" value = "<?php echo $endDate;?>"/>
                </div>
            <!--job year-->
                <div class="form-group">
                      <label for="age">Job Duration</label>
                      <input type="text" class="form-control" id="jyear"  name="jyear" value = "<?php echo $jyear;?>">
                      <div class="form-error bg-danger"></div>
                </div>
                 <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do U Agree
                      </label>
                      <div class="form-error bg-danger"></div>
                 </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="upload" id="upload">Submit</button>
                  </div>
                </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
</div>
