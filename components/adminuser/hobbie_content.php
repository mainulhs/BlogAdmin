<!--action code-->
<?php
	if(isset($_POST['upload'])){
	
	$a = $_POST['h_name'];
    $sql = "insert into hobbie(id, h_name) Values('','$a')";
	query($sql);
}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Hobbies/Interest
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Hobbies/Interest</li>
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
                  <h3 class="box-title">Hobbies/Interest Entry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="hobbie" id = "hobbie" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="h_name">Hobbie/Interest Name</label>
                      <input type="text" class="form-control" id="h_name" name="h_name" placeholder="Enter Interest Name">
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
<!--table section -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
        		<div class="box">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Hobbies/Interest Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <th>Hobbies/Interest Name</th>
                        <th>Action</th>
                      </tr>
                   </thead>
                    <!--for data retrive-->
                      <?php
						$query = "select * from hobbie";
						$record = fetchData($query);
                        foreach ($record as $hobbie) {
                                $id = $hobbie['id'];	
								echo "<tr>";
									echo "<td>".$hobbie['h_name']."</td>";
									echo "<td>
                                    <a href='dashboard.php?page=delete_hobbie_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                    <a href='dashboard.php?page=update_hobbie_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a>
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