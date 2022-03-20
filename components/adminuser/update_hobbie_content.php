<!--Action php-->
<?php
	$id = $_GET['id'];
	if(isset($_POST['upload'])){
	$a = $_POST['h_name'];
	$sql = "update hobbie set h_name = '$a' where id = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=hobbie_content');</script>";
}
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from hobbie where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id = $data['id'];
					$h_name = $data['h_name'];
					}	
		}
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Hobbies/Interest Update
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Hobbies/Interest Update</li>
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
                  <h3 class="box-title">Hobbies/Interest Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="skill" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="h_name">Hobbie/Interest Name</label>
                      <input type="text" class="form-control" id="h_name" name="h_name" value="<?php echo $h_name;?>">
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
