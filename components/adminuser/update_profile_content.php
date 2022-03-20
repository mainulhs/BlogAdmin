<!--Action php-->
<?php
    $id = $_GET['id'];
	$updir = '../public/upload/';
	if(isset($_POST['upload']))
    {
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
	       $sql = "update profile_info set title = '$title', firstname = '$firstname', lastname ='$lastname', gender = '$gender', designation = '$designation',  fathername = '$fathername', mothername = '$mothername', pre_address = '$pre_address', per_address = '$per_address', city = '$city', country = '$country', nationality = '$nationality', email = '$email', mobile = '$mobile', religion = '$religion', dob ='$dob', age ='$age', name = '$filename', size = '$filesize', type = '$filetype', path = '$filepath', maritial_st = '$maritial_st'";
          query($sql);
            echo"<script>location.replace('dashboard.php?page=profile');</script>";
    }
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from profile_info where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id = $data['id'];
					$title=$data['title'];
	                $firstname=$data['firstname'];
                    $lastname=$data['lastname'];
                    $gender=$data['gender'];
                    $designation=$data['designation'];
                    $fathername=$data['fathername'];
                    $mothername=$data['mothername'];
                    $pre_address=$data['pre_address'];
                    $per_address=$data['per_address'];
                    $city=$data['city'];
                    $country=$data['country'];
                    $nationality=$data['nationality'];
                    $email=$data['email'];
                    $mobile=$data['mobile'];
                    $religion=$data['religion'];
                    $dob=$data['dob'];
                    $age=$data['age'];
                    $maritial_st=$data['maritial_st'];
                    $name = $data['name'];
				}	
		}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Profile Upadte
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile Update</li>
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
                  <h3 class="box-title">Profile Update</h3>
                </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" name="profile" id = "profile" enctype="multipart/form-data">
                <div class="box-body">
            <!--Title-->
                <div class="form-group">
                      <label>Title</label>
                      <select class="form-control" name = "title" value="<?php echo $title;?>">
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Miss.</option>
                      </select>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--First Name-->
                <div class="form-group">
                      <label for="firstName">First Name</label>
                      <input type="text" class="form-control" id="firstName"  name="firstName" value="<?php echo $firstname;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Last Name-->
                <div class="form-group">
                      <label for="lastName">Last Name</label>
                      <input type="text" class="form-control" id="lastName"  name="lastName" value="<?php echo $lastname;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Gender-->
               <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" name = "gender">
                        <option><?php echo $gender;?></option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                      </select>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Designation-->
               <div class="form-group">
                      <label for="religion">Designation</label>
                      <input type="text" class="form-control" id="designation"  name="designation" value="<?php echo $designation;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Father Name-->
                <div class="form-group">
                      <label for="fatherName">Father Name</label>
                      <input type="text" class="form-control" id="fatherName"  name="fatherName" value="<?php echo $fathername;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Mother Name-->
                <div class="form-group">
                      <label for="motherName">Mother Name</label>
                      <input type="text" class="form-control" id="motherName"  name="motherName" value="<?php echo $mothername;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Present Address-->
                <div class="form-group">
                      <label for="presentAddress">Present Address</label>
                      <input type="text" class="form-control" id="presentAddress"  name="presentAddress" value="<?php echo $pre_address;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Permanent Address-->
                <div class="form-group">
                      <label for="perAddress">Permanent Address</label>
                      <input type="text" class="form-control" id="perAddress"  name="perAddress" value="<?php echo $per_address;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--City-->
                <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city"  name="city" value="<?php echo $city;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Country-->
                <div class="form-group">
                      <label for="country">Country</label>
                      <input type="text" class="form-control" id="country"  name="country" value="<?php echo $country;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Nationality-->
                 <div class="form-group">
                      <label for="nationality">Nationality</label>
                      <input type="text" class="form-control" id="nationality"  name="nationality" value="<?php echo $nationality;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Email ID-->
                 <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email"  name="email" value="<?php echo $email;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Mobile No-->
                <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="text" class="form-control" id="mobile"  name="mobile" value="<?php echo $mobile;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Religion-->
                <div class="form-group">
                      <label for="religion">Religion</label>
                      <input type="text" class="form-control" id="religion"  name="religion" value="<?php echo $religion;?>">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Date of Birth-->
                <div class="form-group">
                      <label for="Date_Of_Birth">Date Of Birth</label>
                      	<div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                       <input type="text" class="datepicker form-control"id="Date_Of_Birth" name="DateOfBirth" value="<?php echo $dob;?>"/>
                       </div>
                </div>
            <!--Age-->
                <div class="form-group">
                      <label for="age">Age</label>
                      <input type="text" class="form-control" id="age"  name="age" value="<?php echo $age;?>">
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
                        <option><?php echo $maritial_st;?></option>
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
      </div><!-- /.content-wrapper -->