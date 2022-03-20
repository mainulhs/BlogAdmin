<!--Action -->
<?php 
	if(isset($_POST['upload'])){
	
	$companyName=$_POST['companyName'];
	$position=$_POST['position'];
    $description = $_POST['description'];
    $startDate=$_POST['startDate'];
    $endDate=$_POST['endDate'];
    $jyear=$_POST['jyear'];
	$sql = "insert into experience (id, companyName, position, description, startDate, endDate, jyear) 	   values('','$companyName','$position','$description','$startDate','$endDate','$jyear');";
    query($sql);
 }
?>    
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Experience
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Experience</li>
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
                  <h3 class="box-title">Experience Entry</h3>
                </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" name="profile" id = "profile" enctype="multipart/form-data">
                <div class="box-body">
            
            <!--companyName-->
                <div class="form-group">
                      <label for="companyName">Company Name</label>
                      <input type="text" class="form-control" id="companyName"  name="companyName" placeholder="Enter Company Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--position-->
                <div class="form-group">
                      <label for="position">Position</label>
                      <input type="text" class="form-control" id="position"  name="position" placeholder="Enter Position">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--description-->
                <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description"  name="description" placeholder="Enter Description">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Job Start Date-->
                <div class="form-group">
                      <label for="startDate">Job Start Date</label>
                      	<div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" class="datepicker form-control"  data-date-format="yyyy/mm/dd" id="startDate" name="startDate" placeholder="Job Start Date"/>
                       </div>
                </div>
            <!--Job End Date-->
                <div class="form-group">
                      <label for="startDate">Job End Date</label>
                      	<div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" class="datepicker form-control"  data-date-format="yyyy/mm/dd" id="endDate" name="endDate" placeholder="Job End Date"/>
                       </div>
                </div>
            <!--job year-->
                <div class="form-group">
                      <label for="age">Job Duration</label>
                      <input type="text" class="form-control" id="jyear"  name="jyear" placeholder="Enter Job Duration">
                      <div class="form-error bg-danger"></div>
                </div>
                 <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do U Agree
                      </label>
                      <div class="form-error bg-danger"></div>
                 </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="upload" id="upload">Submit</button>
                  </div>
                </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
<!--Section For Table-->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
        		<div class="box">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Profile Data</h3>
                </div><!-- /.box-header -->
                <!--for showing table-->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Company Name</th>
                        <th>Position</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Job Year</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                      <?php
						$query = "select * from experience";
	
						$record = fetchData($query);
                        foreach ($record as $experience)
							{		
                            $id = $experience['id'];
								echo "<tr>";
									echo "<td>".$experience['companyName']."</td>";
									echo "<td>".$experience['position']."</td>";
                                    echo "<td>".$experience['description']."</td>";
									echo "<td>".$experience['startDate']."</td>";
									echo "<td>".$experience['endDate']."</td>";
                                    echo "<td>".$experience['jyear']."</td>";
									echo "<td>
				                            <a href='dashboard.php?page=delete_experience_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
		  		                            <a href='dashboard.php?page=update_experience_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a> 
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
</div>
            <script src="../../public/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
            <script src="../../public/lib/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
            <script>
                            $('.datepicker').datepicker({
                                format: 'yyyy-mm-dd'

                            });
                            $('.datepicker').datepicker('setDate', new Date());
                            $(".datepicker").datepicker('update');
            </script> 