<!--Action php-->
<?php
	$id = $_GET['id'];
	if(isset($_POST['upload'])){
	$a = $_POST['skillName'];
	$b = $_POST['description'];
    $c = $_POST['percentage'];
	$sql = "update skill set skillName = '$a', description = '$b', percentage = '$c' where id = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=skill_content');</script>";
}
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from skill where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id = $data['id'];
					$skillName = $data['skillName'];
					$description = $data['description'];
                    $percentage =$data['percentage'];
					}	
		}
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Skill Update
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Skill Update</li>
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
                  <h3 class="box-title">Skill Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="skill" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="imageName">Skill Name</label>
                      <input type="text" class="form-control" id="title" name="skillName" value="<?php echo $skillName;?>">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description"  name="description" value="<?php echo $description;?>">
                    </div>
                    <div class="form-group">
                      <label for="percentage">Percentage</label>
                      <input type="text" class="form-control" id="percentage"  name="percentage" value="<?php echo $percentage;?>">
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
