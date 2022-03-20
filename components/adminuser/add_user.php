<?php
	if(isset($_POST['addUser']))
    {	
	$sql = "insert into login values('','".$_POST['userName']."','".$_POST['newPass']."')";			
	$sql_new = query($sql);
    if($sql_new == true)
	{
        $message = "User added Successfully";
            echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{
        $message = "Insertion Faild";
            echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
?>
     <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add User
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="active">Add User</li>
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
                  <h3 class="box-title">Add New User</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="change_password" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">User Name</label>
                      <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter User Name" required>
                    </div>
                    <div class="form-group">
                      <label for="description">Password</label>
                      <input type="password" class="form-control" id="newPass"  name="newPass" placeholder="Enter Password " required>
                    </div>
                    
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" required> Do U Agree
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="addUser" id="addUser">Add New User</button>
                  </div>
                </form>
              </div><!-- /.box -->


            </div><!--/.col (left) -->
            <!-- right column -->
            <!--/.col (right) -->
          </div>   <!-- /.row -->
          </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     