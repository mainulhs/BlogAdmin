<!--action code-->
<?php
$updir = '../public/upload/';
	if(isset($_POST['upload'])){
	
	$a = $_POST['title'];
	$b = $_POST['description'];
	
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
	$sql = "insert into portfolio(id,imageName, name, description , size, type, path) 
							Values('','$a', '$filename', '$b', '$filesize', '$filetype', '$filepath')";
	query($sql);
}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Portfolio
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Portfolio</li>
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
                  <h3 class="box-title">Portfolio Entry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="portfolio" id = "portfolio" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Image Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Image Title">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="description">Image Description</label>
                      <input type="text" class="form-control" id="description"  name="description" placeholder="Enter Description ">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="InputFile">Upload Image</label>
					  <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000">
					  <input name="image" type="file" id="userfile"  >
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
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
        		<div class="box">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Portfolio Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <th>Image Title</th>
                        <th>Image Description</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                   </thead>
                    <!--for data retrive-->
                      <?php
						$query = "select * from portfolio";
						$record = fetchData($query);
                        foreach ($record as $portfolio) {
                                $id=$portfolio['id'];	
								echo "<tr>";
									echo "<td>".$portfolio['imageName']."</td>";
									echo "<td>".$portfolio['description']."</td>";
									echo "<td><img width = 100px, hight = 100px, src='../public/upload/".$portfolio['name']."'></td>";
									echo "<td>
								<a href='dashboard.php?page=delete_portfolio_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
		  						<a href='dashboard.php?page=portfolio_content_update&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a>
											</td>";
								echo "</tr>";
							}
					 ?>
                   </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->