<!--Action php-->
<?php
	$updir = '../public/upload/';
	$id = $_GET['id'];
	if(isset($_POST['upload'])){
	$a = $_POST['title'];
	$b = $_POST['caption'];
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
	$sql = "update slide set title = '$a', name = '$filename', caption = '$b', size = '$filesize', type = '$filetype', path = '$filepath'  where id = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=slide_content');</script>";
}
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from slide where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id=$data['id'];
					$title=$data['title'];
					$caption=$data['caption'];
					$name=$data['name'];
					}	
		}
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Slide Update
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Slide Update</li>
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
                  <h3 class="box-title">Slide Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="slide" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="imageName">Image Name</label>
                      <input type="text" class="form-control" id="title" name="title" value="<?php echo $title;?>">
                    </div>
                    <div class="form-group">
                      <label for="description">Image Caption</label>
                      <input type="text" class="form-control" id="caption"  name="caption" value="<?php echo $caption;?>">
                    </div>
                    <div class="form-group">
                      <label for="InputFile">Upload Image</label>
					  <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000">
					  <input name="image" type="file" id="userfile" value="<?php echo $name;?>">
                      <p class="help-block">Choose Image File</p>
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
