

<div id="menu" style="float:left;width:18%">
 <ul class="navbar-nav bg-dark sidebar sidebar-light accordion " id="side_bar">
     <a class="sidebar-brand  justify-content-center" href="#">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
         <div class="sidebar-brand-text">Admin Panel</div>
      </a>
      <hr class="sidebar-divider my-0">
      
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-tachometer-alt"></i>
          <span class="material-icons">Dashboard</span>
      </li>
     
      
      <li class="nav-item ">
        <a class="nav-link" href="registered_user.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>REGISTERED USER</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
                <a href="#coursesubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-book-open" data-parent="#side_bar"></i><span>&nbsp&nbspCompany</span></a>
                <ul class="collapse list-unstyled" id="coursesubmenu">
                    <li>
                        <a  href="add_company.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdd Company</a>
                    </li>
                    <br>
                    <li>
                        <a  href="manage_course.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspManage Company</a>
                    </li>
                </ul>
       </li>
       
       
       <hr class="sidebar-divider">
       <li class="nav-item">
                <a href="#viewsubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-eye" aria-hidden="true"></i><span>&nbsp&nbspVIEW</span></a>
                <ul class="collapse list-unstyled" id="viewsubmenu">
                   
                    <li>
                        <a  href="view.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspView Full</a>
                    </li>
                    <br>
                    
                </ul>
       </li>
       <hr class="sidebar-divider">
       <li class="nav-item">
                <a href="#viewsubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-eye" aria-hidden="true"></i><span>&nbsp&nbspSwitch</span></a>
                <ul class="collapse list-unstyled" id="viewsubmenu">
                    
                    <br>
                    <li>
                        <a  href="logout.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogout</a>
                    </li>
                    <br>
                    
                    
                </ul>
       </li>
      
       

 </ul>
</div>
 <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
