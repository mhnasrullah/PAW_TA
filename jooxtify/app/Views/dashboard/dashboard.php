<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
  <title>Hello, world!</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">
  <!--fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="font/font/flaticon.css">
  <link rel="stylesheet" href="style.css">
</head>


<body>
  <div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
      <div class="simplebar-content" style="padding: 0px;">
        <a class="sidebar-brand" href="index.html">
          <span class="align-middle">Vishweb Design</span>
        </a>

        <ul class="navbar-nav align-self-stretch">

          <li class="sidebar-header">
            Pages
          </li>
          <li class="">
            <a class="nav-link text-left active" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="flaticon-bar-chart-1"></i> Dashboard
            </a>
          </li>

          <li class="has-sub">
            <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse">
              <i class="flaticon-user"></i> Profile
            </a>
            <div class="collapse menu mega-dropdown" id="collapseExample2">
              <div class="dropmenu" aria-labelledby="navbarDropdown">
                <div class="container-fluid ">
                  <div class="row">
                    <div class="col-lg-12 px-2">
                      <div class="submenu-box">
                        <ul class="list-unstyled m-0">
                          <li><a href="">PHP Frameworks</a></li>
                          <li><a href="">Laravel</a></li>
                          <li><a href=""> Codeigniter</a></li>
                          <li><a href="">Node.js</a></li>
                          <li><a href="">AngularJS</a></li>
                          <li><a href="">ReactJS</a></li>
                          <!-- <li><a href="">Asp.net</a></li> -->
                        </ul>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> setting
            </a>
          </li>

          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> invoice
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> Bank
            </a>
          </li>
          <li class="sidebar-header">
            tools and component
          </li>

          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> ui element
            </a>
          </li>

          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> form
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> table
            </a>
          </li>

          <li class="sidebar-header">
            tools and component
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> chart
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-map"></i> map
            </a>
          </li>

        </ul>


      </div>


    </nav>
    <!-- /#sidebar-wrapper -->










    <!-- Page Content -->
    <div id="page-content-wrapper">


      <div id="content">

        <div class="container-fluid p-0 px-lg-0 px-md-0">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light my-navbar">

            <!-- Sidebar Toggle (Topbar) -->
            <div type="button" id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed"
              data-toggle="offcanvas">
              <span></span>
              <span></span>
              <span></span>
            </div>


            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown  d-sm-none">

                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown">
                <a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
                  <div class="position-relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-bell align-middle">
                      <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                      <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="indicator">4</span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                  <div class="dropdown-menu-header">
                    4 New Notifications
                  </div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      <div class="row no-gutters align-items-center">
                        <div class="col-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-alert-circle text-danger">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                          </svg>
                        </div>
                        <div class="col-10">
                          <div class="text-dark">Update completed</div>
                          <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                          <div class="text-muted small mt-1">30m ago</div>
                        </div>
                      </div>
                    </a>

                  </div>
                  <div class="dropdown-menu-footer">
                    <a href="#" class="text-muted">Show all notifications</a>
                  </div>
                </div>
              </li>
              <!-- Nav Item - Messages -->
              <li class="nav-item">
                <a class="nav-link " href="#" role="button">
                  <i class="fas fa-envelope"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">7</span>
                </a>
              </li>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Vishweb Design</span>
                  <img class="img-profile rounded-circle" src="img/logo3.png">
                </a>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid px-lg-4">
            <div class="row">
              <div class="col-md-12 mt-lg-4 mt-4">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                      class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report</a>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">Sales</h5>
                        <h1 class="display-5 mt-1 mb-3">2.382</h1>
                        <div class="mb-1">
                          <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                          <span class="text-muted">Since last week</span>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">Sales</h5>
                        <h1 class="display-5 mt-1 mb-3">2.382</h1>
                        <div class="mb-1">
                          <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                          <span class="text-muted">Since last week</span>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">Sales</h5>
                        <h1 class="display-5 mt-1 mb-3">2.382</h1>
                        <div class="mb-1">
                          <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                          <span class="text-muted">Since last week</span>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title mb-4">Earnings</h5>
                        <h1 class="display-5 mt-1 mb-3">$21.300</h1>
                        <div class="mb-1">
                          <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                          <span class="text-muted">Since last week</span>
                        </div>
                      </div>
                    </div>

                  </div>


                </div>
              </div>



              <!-- column -->
              <div class="col-md-12 mt-4">
                <div class="card">
                  <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex align-items-center">
                      <div>
                        <h4 class="card-title">Top Selling Products</h4>
                        <h5 class="card-subtitle">Overview of Top Selling Items</h5>
                      </div>
                      <div class="ml-auto">
                        <div class="dl">
                          <select class="custom-select">
                            <option value="0" selected="">Monthly</option>
                            <option value="1">Daily</option>
                            <option value="2">Weekly</option>
                            <option value="3">Yearly</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- title -->
                  </div>
                  <div class="table-responsive">
                    <table class="table v-middle">
                      <thead>
                        <tr class="bg-light">
                          <th class="border-top-0">Products</th>
                          <th class="border-top-0">License</th>
                          <th class="border-top-0">Support Agent</th>
                          <th class="border-top-0">Technology</th>
                          <th class="border-top-0">Tickets</th>
                          <th class="border-top-0">Sales</th>
                          <th class="border-top-0">Earnings</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="m-r-10"><a class="btn btn-circle btn-info text-white">EA</a></div>
                              <div class="">
                                <h4 class="m-b-0 font-16">Elite Admin</h4>
                              </div>
                            </div>
                          </td>
                          <td>Single Use</td>
                          <td>John Doe</td>
                          <td>
                            <label class="label label-danger">Angular</label>
                          </td>
                          <td>46</td>
                          <td>356</td>
                          <td>
                            <h5 class="m-b-0">$2850.06</h5>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="m-r-10"><a class="btn btn-circle btn-orange text-white">MA</a></div>
                              <div class="">
                                <h4 class="m-b-0 font-16">Monster Admin</h4>
                              </div>
                            </div>
                          </td>
                          <td>Single Use</td>
                          <td>Venessa Fern</td>
                          <td>
                            <label class="label label-info">Vue Js</label>
                          </td>
                          <td>46</td>
                          <td>356</td>
                          <td>
                            <h5 class="m-b-0">$2850.06</h5>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="m-r-10"><a class="btn btn-circle btn-success text-white">MP</a></div>
                              <div class="">
                                <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                              </div>
                            </div>
                          </td>
                          <td>Single Use</td>
                          <td>John Doe</td>
                          <td>
                            <label class="label label-success">Bootstrap</label>
                          </td>
                          <td>46</td>
                          <td>356</td>
                          <td>
                            <h5 class="m-b-0">$2850.06</h5>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="m-r-10"><a class="btn btn-circle btn-purple text-white">AA</a></div>
                              <div class="">
                                <h4 class="m-b-0 font-16">Ample Admin</h4>
                              </div>
                            </div>
                          </td>
                          <td>Single Use</td>
                          <td>John Doe</td>
                          <td>
                            <label class="label label-purple">React</label>
                          </td>
                          <td>46</td>
                          <td>356</td>
                          <td>
                            <h5 class="m-b-0">$2850.06</h5>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-left">
                <p class="mb-0">
                  <a href="index.html" class="text-muted"><strong>Dashboard Vishweb Design </strong></a> &copy
                </p>
              </div>
              <div class="col-6 text-right">
                <ul class="list-inline">
                  <li class="footer-item">
                    <a class="text-muted" href="#">Support</a>
                  </li>
                  <li class="footer-item">
                    <a class="text-muted" href="#">Help Center</a>
                  </li>
                  <li class="footer-item">
                    <a class="text-muted" href="#">Privacy</a>
                  </li>
                  <li class="footer-item">
                    <a class="text-muted" href="#">Terms</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>


  <script>
    $('#bar').click(function () {
      $(this).toggleClass('open');
      $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled');

    });
  </script>






</body>

</html>