<!--Action -->
<?php 
    $updir = '../public/upload/';
	if(isset($_POST['upload'])){
	
	$title=$_POST['title'];
	$firstname=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $gender=$_POST['gender'];
    $designation=$_POST['designation'];
    $fathername=$_POST['fatherName'];
    $mothername=$_POST['motherName'];
    $pre_address=$_POST['presentAddress'];
    $per_address=$_POST['perAddress'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $nationality=$_POST['nationality'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $religion=$_POST['religion'];
    $dob=$_POST['DateOfBirth'];
    $age=$_POST['age'];
    $maritial_st=$_POST['maritalStatus'];
        
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
	$sql = "insert into profile_info (id, title, firstname, lastname, gender, designation,  fathername, mothername, pre_address, per_address, city, country, nationality, email, mobile, religion, dob, age, name, size, type, path, maritial_st) 	   values('','$title','$firstname','$lastname','$gender','$designation','$fathername','$mothername','$pre_address','$per_address','$city','$country','$nationality','$email','$mobile','$religion','$dob','$age', '$filename', '$filesize', '$filetype', '$filepath','$maritial_st');";
    query($sql);
 }
?>    
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
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
                  <h3 class="box-title">Profile Entry</h3>
                </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" name="profile" id = "profile" enctype="multipart/form-data">
                <div class="box-body">
            <!--Title-->
                <div class="form-group">
                      <label>Title</label>
                      <select class="form-control" name = "title">
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Miss.</option>
                      </select>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--First Name-->
                <div class="form-group">
                      <label for="firstName">First Name</label>
                      <input type="text" class="form-control" id="firstName"  name="firstName" placeholder="Enter First Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Last Name-->
                <div class="form-group">
                      <label for="lastName">Last Name</label>
                      <input type="text" class="form-control" id="lastName"  name="lastName" placeholder="Enter Last Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Gender-->
               <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" name = "gender">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                      </select>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Designation-->
               <div class="form-group">
                      <label for="religion">Designation</label>
                      <input type="text" class="form-control" id="designation"  name="designation" placeholder="Enter Designation">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Father Name-->
                <div class="form-group">
                      <label for="fatherName">Father Name</label>
                      <input type="text" class="form-control" id="fatherName"  name="fatherName" placeholder="Enter Father Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Mother Name-->
                <div class="form-group">
                      <label for="motherName">Mother Name</label>
                      <input type="text" class="form-control" id="motherName"  name="motherName" placeholder="Enter Mother Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Present Address-->
                <div class="form-group">
                      <label for="presentAddress">Present Address</label>
                      <input type="text" class="form-control" id="presentAddress"  name="presentAddress" placeholder="Enter Valid Address">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Permanent Address-->
                <div class="form-group">
                      <label for="perAddress">Permanent Address</label>
                      <input type="text" class="form-control" id="perAddress"  name="perAddress" placeholder="Enter Valid Address">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--City-->
                <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city"  name="city" placeholder="Enter Valid City">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Country-->
                <div class="form-group">
                      <label for="country">Country</label>
                      <input type="text" class="form-control" id="country"  name="country" placeholder="Enter Country Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Nationality-->
                 <div class="form-group">
                      <label for="nationality">Nationality</label>
                      <input type="text" class="form-control" id="nationality"  name="nationality" placeholder="Enter Nationality">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Email ID-->
                 <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Mobile No-->
                <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Enter mobile No.">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Religion-->
                <div class="form-group">
                      <label for="religion">Religion</label>
                      <input type="text" class="form-control" id="religion"  name="religion" placeholder="Enter Religion">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Date of Birth-->
                <div class="form-group">
                      <label for="Date_Of_Birth">Date Of Birth</label>
                      	<div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" class="datepicker form-control"  data-date-format="yyyy/mm/dd" id="Date_Of_Birth" name="DateOfBirth" placeholder="Date Of Birth"/>
                       </div>
                </div>
            <!--Age-->
                <div class="form-group">
                      <label for="age">Age</label>
                      <input type="text" class="form-control" id="age"  name="age" placeholder="Enter Age">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Photograph-->
               <div class="form-group">
                      <label for="InputFile">Upload Photograph</label>
					  <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000">
					  <input name="image" type="file" id="userfile"  >
                      <p class="help-block">Choose Image File</p>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Marital Status-->
                  <label>Marital Status</label>
                     <select class="form-control" name = "maritalStatus">
                        <option>Married</option>
                        <option>Unmarried</option>
                        <option>Single</option>
                      </select>
                      <div class="form-error bg-danger"></div>
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
                <div class="box-body" style="overflow-x: scroll">
                  <table id="example1" class="table table-bordered table-striped" style = "font-size:12px;">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Designation</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Present Address</th>
                        <th>Permanent Address</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Nationality</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Religion</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Image</th>
                        <th>Marital Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                      <?php
						$query = "select * from profile_info";
	
						$record = fetchData($query);
                        foreach ($record as $profile)
							{		
                            $id = $profile['id'];
								echo "<tr>";
									echo "<td>".$profile['title']."</td>";
									echo "<td>".$profile['firstname']."</td>";
									echo "<td>".$profile['lastname']."</td>";
									echo "<td>".$profile['gender']."</td>";
                                    echo "<td>".$profile['designation']."</td>";
                                    echo "<td>".$profile['fathername']."</td>";
                                    echo "<td>".$profile['mothername']."</td>";
                                    echo "<td>".$profile['pre_address']."</td>";
                                    echo "<td>".$profile['per_address']."</td>";
                                    echo "<td>".$profile['city']."</td>";
                                    echo "<td>".$profile['country']."</td>";
                                    echo "<td>".$profile['nationality']."</td>";
                                    echo "<td>".$profile['email']."</td>";
                                    echo "<td>".$profile['mobile']."</td>";
                                    echo "<td>".$profile['religion']."</td>";
                                    echo "<td>".$profile['dob']."</td>";
                                    echo "<td>".$profile['age']."</td>";
									echo "<td><img width = 60px, hight = 60px, src='../public/upload/".$profile['name']."'></td>";
                                    echo "<td>".$profile['maritial_st']."</td>";
									echo "<td>
				                            <a href='dashboard.php?page=delete_profile_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                         </td>";
                                    echo "<td>
		  		                            <a href='dashboard.php?page=update_profile_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a> 
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