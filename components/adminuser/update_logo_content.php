<!--Action php-->
<?php
	$updir = '../public/upload/';
	$id = $_GET['id'];
	if(isset($_POST['upload'])){
	$a = $_POST['title'];
	$filename = $_FILES['image']['name'];
	$tmpfile = $_FILES['image']['tmp_name'];
	$filesize = $_FILES['image']['size'];
	$filetype = $_FILES['image']['type'];
	$path_parts= pathinfo($_FILES['image']['name']);
	$ext=$path_parts['extension'];
	$filename=trim(GUID(),'{}').'.'.$ext;
	$filepath=$updir.$filename;
	$result=move_uploaded_file($tmpfile, $filepath);
	if(!$result){
		echo "error uploading file";
		exit();
	}
	$sql = "update logo set title = '$a', name = '$filename', size = '$filesize', type = '$filetype', path = '$filepath'  where id = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=logo_content');</script>";
}
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from logo where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id=$data['id'];
					$title=$data['title'];
					$name=$data['name'];
					}	
		}
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Logo Update
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Logo Update</li>
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
                  <h3 class="box-title">Logo Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="logo" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Logo Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="<?php echo $title;?>">
                    </div>
                    <div class="form-group">
                      <label for="InputFile">Upload Logo</label>
					  <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000">
					  <input name="image" type="file" id="userfile" value="<?php echo $name;?>">
                      <p class="help-block">Choose New Logo</p>
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
