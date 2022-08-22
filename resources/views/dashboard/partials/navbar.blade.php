    <style>
	
		.headline{

		  margin:5px 0 0 15px;
		  font-size:2.5vh;
		
		}

		@media only screen and (max-width: 500px) {
			.headline{

			  display:none;
			
			}
		}
		
    </style>

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/"><img src="{{ url('dashboard2/images/mypriv2.png') }}" class="mr-5" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ url('dashboard2/images/m.png') }}" class="mr-2" alt="logo"/></a>
      </div>
	  
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
		
        <div class="headline">
          Sistem Penghantaran Pesanan Terus Ke WhatsApp & Telegram
        </div>		
		
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <!--<div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>-->
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
		  
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">

            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
			
			<div class="ddown">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
              <img class="dropbtn" src="{{ url('dashboard2/images/faces/user.png') }}" alt="profile" onclick="myddown()" />
			</button>
			  <div id="myDropdown" class="ddown-content">
				<a href="/dashboard/setting">Settings</a>
				<a href="/logout">Logout</a>
			  </div>
			</div>
			
			
          </li>
		  
          <!--<li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>-->
        </ul>
        <!--<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>-->
      </div>
    </nav>
	
	<script>
	/* When the user clicks on the button, 
	toggle between hiding and showing the dropdown content */
	function myddown() {
	  document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {
		var dropdowns = document.getElementsByClassName("ddown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}
	</script>