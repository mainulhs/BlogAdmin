<!--Action php-->
<?php
	$id = $_GET['id'];
	if(isset($_POST['upload'])){
	$degreeName = $_POST['degreeName'];
	$institutionName = $_POST['institutionName'];
    $subject = $_POST['subject'];
    $passYear = $_POST['passYear'];
    $cgpa = $_POST['cgpa'];
	$sql = "update education_info set degreeName = '$degreeName', institutionName = '$institutionName', subject ='$subject', passYear = '$passYear' , cgpa = '$cgpa' where id = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=education_content');</script>";
}
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from education_info where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id = $data['id'];
					$degreeName = $data['degreeName'];
	                $institutionName = $data['institutionName'];
                    $subject = $data['subject'];
                    $passYear = $data['passYear'];
                    $cgpa = $data['cgpa'];
				}	
		}
?>
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Education Information Upadete
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Education Information Upadate</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Education Information Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="slide" id = "slide" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="degreeName">Degree Name</label>
                      <input type="text" class="form-control" id="degreeName" name="degreeName" value="<?php echo $degreeName;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="institutionName">Institution Name</label>
                      <input type="text" class="form-control" id="institutionName"  name="institutionName" value="<?php echo $institutionName;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $subject;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="passYear">Passing Year</label>
                      <input type="text" class="form-control" id="passYear" name="passYear" value="<?php echo $passYear;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="cgpa">CGPA</label>
                      <input type="text" class="form-control" id="cgpa" name="cgpa" value="<?php echo $cgpa;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do U Agree
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="upload" id="upload">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
</div>
