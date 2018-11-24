<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="user.php" class="simple-text">
                    Sigosoft | Admin
                </a>
            </div>

            <ul class="nav">
               
                <li>
                    <a href="user.php">
                        <i class="ti-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                  <li>
                    <a href="addcareer.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Career page</p>
                    </a>
                </li>
                <li>
                    <a href="viewjob.php">
                        <i class="ti-image"></i>
                        <p>Job applications</p>
                    </a>
                </li>
              
                <li>
                    <a href="contactview.php">
                        <i class="ti-envelope"></i>
                        <p>Contact page</p>
                    </a>
                </li>
              <li>
                    <a href="viewfreelancer.php">
                        <i class="ti-envelope"></i>
                        <p>View Freelancers</p>
                    </a>
                </li>
               
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sigosoft | Admin</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                      <!--   <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li> -->
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 
                                    <i class="ti-settings"></i>
									<p>Sigosoft</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Password change</a></li>
                                <li><a href="logout.php">Sign out</a></li>
                              </ul>
                        </li>
						<!-- <li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li> -->
                    </ul>

                </div>
            </div>
        </nav>