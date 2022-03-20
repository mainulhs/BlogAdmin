  <!--Action-->
    <?php
	if(isset($_POST['changePass']))
		{	
			if(count($_POST)>0) {
                $select = "SELECT *from login WHERE username='" . $_SESSION["userName"] . "'";
				query($select);
				$row = fetchData($select);
                foreach($row as $row1)
                {
				if($_POST["oldPass"] == $row1["password"]) {
					$update = "UPDATE login set password='" . $_POST["newPass"] . "' WHERE username='" . $_SESSION["userName"] . "'";
                    query($update);
                 echo '<script language="javascript"> alert("Password Successfully Changed") </script>';
				 echo "<script>location.replace('dashboard.php?page=change_password');</script>";
				}
				else
			      echo '<script language="javascript"> alert("Current Password is not Correct") </script>';
				  echo "<script>location.replace('dashboard.php?page=change_password');</script>";
                }
            }
		}
    ?>   
         <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Change Password
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">ChangePassword</li>
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
                  <h3 class="box-title">Change Password</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="change_password" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Current Password</label>
                      <input type="password" class="form-control" id="oldPass" name="oldPass" placeholder="Enter Current Password">
                    </div>
                    <div class="form-group">
                      <label for="description">New Password</label>
                      <input type="password" class="form-control" id="newPass"  name="newPass" placeholder="Enter New Password ">
                    </div>
                    
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do U Agree
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="changePass" id="changePass">Change Password</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
          </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     