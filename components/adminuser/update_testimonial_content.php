<!--Action php-->
<?php
    $id = $_GET['id'];
	$updir = '../public/upload/';
	if(isset($_POST['upload']))
    {
	   $p_name=$_POST['p_name'];
	   $designation=$_POST['designation'];
	   $company=$_POST['com_name'];
	   $comment=$_POST['p_comment'];

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
	   $sql = "update testimonial set p_name = '$p_name',designation='$designation',com_name='$company',p_comment='$comment', name = '$filename', size = '$filesize', type = '$filetype', path = '$filepath'  where id = '$id'";
        query($sql);
        echo"<script>location.replace('dashboard.php?page=testimonial_content');</script>";
    }
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from testimonial where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id = $data['id'];
					$p_name = $data['p_name'];
					$designation = $data['designation'];
					$com_name = $data['com_name'];
                    $p_comment = $data['p_comment'];
                    $name = $data['name'];
					}	
		}
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tesimonial
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Testimonial Update</li>
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
                  <h3 class="box-title">Testimonial Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"  method="POST" name="testimonial_form" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="p_name" value="<?php echo $p_name;?>">
                    </div>
                    <div class="form-group">
                      <label for="designation">Designation</label>
                      <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $designation;?>">
                    </div>
                    <div class="form-group">
                      <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="com_name" value="<?php echo $com_name;?>">
                    </div>
                     <div class="form-group">
                      <label for="comment">Comment</label>
                      <input type="text" class="form-control" id="comment" name="p_comment" value="<?php echo $p_comment;?>">
                    </div>
                    <div class="form-group">
                      <label for="InputFile">Upload Image</label>
					  <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000">
					  <input name="image" type="file" id="userfile" value="<?php echo $name;?>" >
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
      </div><!-- /.content-wrapper -->