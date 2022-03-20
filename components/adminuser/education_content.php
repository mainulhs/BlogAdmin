<!--action code-->
<?php
	if(isset($_POST['upload'])){
	
	$degreeName = $_POST['degreeName'];
	$institutionName = $_POST['institutionName'];
    $subject = $_POST['subject'];
    $passYear = $_POST['passYear'];
    $cgpa = $_POST['cgpa'];
    $sql = "insert into education_info(id, degreeName, institutionName,subject,passYear,cgpa) Values('','$degreeName','$institutionName','$subject','$passYear','$cgpa' )";
	query($sql);
}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Education Information
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Education Information</li>
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
                  <h3 class="box-title">Education Information Entry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="slide" id = "slide" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="degreeName">Degree Name</label>
                      <input type="text" class="form-control" id="degreeName" name="degreeName" placeholder="Enter Degree Name">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="institutionName">Institution Name</label>
                      <input type="text" class="form-control" id="institutionName"  name="institutionName" placeholder="Enter Institution Name ">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="passYear">Passing Year</label>
                      <input type="text" class="form-control" id="passYear" name="passYear" placeholder="Enter Passing Year">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="cgpa">CGPA</label>
                      <input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="Enter CGPA">
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
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <th>Degree Name</th>
                        <th>Institution Name</th>
                        <th>subject</th>
                        <th>Passing Year</th>
                        <th>CGPA</th>
                        <th>Action</th>
                      </tr>
                   </thead>
                    <!--for data retrive-->
                      <?php
						$query = "select * from education_info";
						$record = fetchData($query);
                        foreach ($record as $education_info) {
                                $id = $education_info['id'];	
								echo "<tr>";
									echo "<td>".$education_info['degreeName']."</td>";
									echo "<td>".$education_info['institutionName']."</td>";
									echo "<td>".$education_info['subject']."</td>";
                                    echo "<td>".$education_info['passYear']."</td>";
                                    echo "<td>".$education_info['cgpa']."</td>";
									echo "<td>
								<a href='dashboard.php?page=delete_education_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
		  						<a href='dashboard.php?page=update_education_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a>
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