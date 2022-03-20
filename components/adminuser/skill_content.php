<!--action code-->
<?php
	if(isset($_POST['upload'])){
	
	$a = $_POST['skillName'];
	$b = $_POST['description'];
    $c = $_POST['percentage'];
    $sql = "insert into skill(id, skillName, description,percentage) Values('','$a','$b', '$c')";
	query($sql);
}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Skills
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Skills</li>
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
                  <h3 class="box-title">Skill Entry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="slide" id = "slide" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="skillName">Skill Name</label>
                      <input type="text" class="form-control" id="title" name="skillName" placeholder="Enter Skill Name">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="description">Skill description</label>
                      <input type="text" class="form-control" id="caption"  name="description" placeholder="Enter Description ">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="percentage">Percentage</label>
                      <input type="text" class="form-control" id="percentage"  name="percentage" placeholder="Enter Percentage ">
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
                  <h3 class="box-title">Skill Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x: scroll">
                  <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <th>Skill Name</th>
                        <th>Skill Description</th>
                        <th>Percentage</th>
                        <th>Action</th>
                      </tr>
                   </thead>
                    <!--for data retrive-->
                      <?php
						$query = "select * from skill";
						$record = fetchData($query);
                        foreach ($record as $skill) {
                                $id = $skill['id'];	
								echo "<tr>";
									echo "<td>".$skill['skillName']."</td>";
									echo "<td>".$skill['description']."</td>";
                                    echo "<td>".$skill['percentage']."</td>";
									echo "<td>
                                    <a href='dashboard.php?page=delete_skill_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                    <a href='dashboard.php?page=update_skill_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a>
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