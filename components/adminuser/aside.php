<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../public/lib/dist/img/avatar2.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['userName'];?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Control Panel</li>
            <li class="active treeview">
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span> Dashboard</span></a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>PROFILE</span>
                <span class="label label pull-right bg-red">3</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="dashboard.php?page=profile"><i class="fa fa-circle-o"></i>Profile</a></li>
                <li><a href="dashboard.php?page=add_user"><i class="fa fa-circle-o"></i>Add New User</a></li>
                <li><a href="dashboard.php?page=change_password"><i class="fa fa-circle-o"></i>Change Password</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-adjust"></i>
                <span>OTHERS</span>
                <span class="label label pull-right bg-green">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="dashboard.php?page=skill_content"><i class="fa fa-circle-o"></i>Skills</a></li>
                <li><a href="dashboard.php?page=education_content"><i class="fa fa-circle-o"></i>Educational Information</a></li>
                <li><a href="dashboard.php?page=experience_content"><i class="fa fa-circle-o"></i>Experience</a></li>
                <li><a href="dashboard.php?page=hobbie_content"><i class="fa fa-circle-o"></i>Hobbies/Interest</a></li>
              </ul>
             </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>IMAGE</span>
                <span class="label label-primary pull-right">3</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="dashboard.php?page=logo_content"><i class="fa fa-circle-o"></i>LOGO</a></li>
                <li><a href="dashboard.php?page=slide_content"><i class="fa fa-circle-o"></i>SLIDE</a></li>
                <li><a href="dashboard.php?page=gallary_content"><i class="fa fa-circle-o"></i>GALLARY</a></li>
              </ul>
            </li>
            <li><a href="dashboard.php?page=article_content"><i class="fa fa-circle-o"></i>Article</a></li>
            <li><a href="dashboard.php?page=service_content"><i class="fa fa-circle-o"></i>Service</a></li>
            <li><a href="dashboard.php?page=team_content"><i class="fa fa-circle-o"></i>Team</a></li>
            <li><a href="dashboard.php?page=portfolio_content"><i class="fa fa-circle-o"></i>Portfolio</a></li>
            <li><a href="dashboard.php?page=testimonial_content"><i class="fa fa-circle-o"></i>Testimonial</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
</aside>